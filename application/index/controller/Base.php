<?php
namespace app\index\controller;

use app\common\service\Users\Identity;
use app\index\model\SiteAuth;
use think\Controller;

class Base extends Controller
{
    public $userId;
    public $userInfo;

    public function initialize()
    {
        $this->checkSite();
        $this->checkLogin();
        parent::initialize();
    }

    //判断是否登录
    public function checkLogin()
    {
        $identity = new Identity();
        $userId = $identity->getUserId();
        if (!$userId) {
            $this->redirect('publics/index');
        }
        $this->userId = $userId;
        $this->userInfo = $identity->getUserInfo();
    }

    //检查站点
    public function checkSite()
    {
        $switch = SiteAuth::checkSite();
        if ($switch !== true) {
            if (request()->isAjax()) {
                return json(['code' => 1, 'message' => $switch]);
            } else {
                (new SiteAuth())->alert($switch);
                exit;
            }
        }
    }
}