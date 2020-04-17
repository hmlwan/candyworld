<?php
namespace app\index\controller;

use app\common\entity\UserInviteCode;
use app\common\service\Market\Auth;
use app\common\service\Users\Identity;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Grafika\Color;
use Grafika\Grafika;
use think\facade\Env;
use think\facade\Session;
use think\facade\Url;
use think\Request;
use app\common\service\Users\Service;
use app\common\entity\User;
use app\common\entity\UserProduct;
use app\common\entity\UserMagicLog;
use Zxing\Qrcode\QRCodeReader;
use think\Db;

class Member extends Base
{
    public function index()
    {
        //获取缓存用户详细信息
        $userInfo = User::where('id', $this->userId)->find();
        //获取用户冻结资金 和交易总数
        $freeze = $userInfo->getFreeze();

        return $this->fetch('memberinfo', [
            'list' => $userInfo,
            'freeze' => $freeze
        ]);
    }

    /**
     * 设置页面
     */
    public function set()
    {
        //获取缓存用户详细信息
        // $identity = new Identity();
        // $identity->delCache($this->userId);
        $identity = new Identity();
        $userInfo = $identity->getUserInfo($this->userId);
        return $this->fetch('set', ["list" => $userInfo]);
    }

    /**
     * 关于
     */
    public function about()
    {
        return $this->fetch("about");
    }

    /**
     * 修改密码页面
     */
    public function password()
    {
        return $this->fetch("password");
    }


    /**
     * 联盟
     */
    public function union()
    {
        $userInfo = User::where('id', $this->userId)->find();

        //获得直推会员
        $userList = $userInfo->getChilds($this->userId);
        return $this->fetch('union', [
                "list" => $userInfo,
                "userList" => $userList
            ]
        );
    }

    /**
     * 修改密码
     */
    public function updatePassword(Request $request)
    {
        $validate = $this->validate($request->post(), '\app\index\validate\PasswordForm');

        if ($validate !== true) {
            return json(['code' => 1, 'message' => $validate]);
        }

        $oldPassword = $request->post('old_pwd');
        $user = User::where('id', $this->userId)->find();
        $service = new \app\common\service\Users\Service();
        $result = $service->checkPassword($oldPassword, $user);

        if (!$result) {
            return json(['code' => 1, 'message' => '原密码输入错误']);
        }

        //修改
        $user->password = $service->getPassword($request->post('new_pwd'));

        if ($user->save() === false) {
            return json(['code' => 1, 'message' => '修改失败']);
        }

        return json(['code' => 0, 'message' => '修改成功']);
    }

    /**
     * 新手解答
     */
    public function articleList()
    {
        //获取缓存用户详细信息
        $article = new \app\index\model\Article();
        $articleList = $article->getArticleList(2);
        return $this->fetch('articleList', ["list" => $articleList]);
    }

    /**
     * 问题留言
     */
    public function submitMsg(Request $request)
    {
        //获取缓存用户详细信息
        $identity = new Identity();
        $userInfo = $identity->getUserInfo($this->userId);

        //内容
        $data['content'] = $request->post("content");
        $data['create_time'] = time();
        $data['user_id'] = $this->userId;

        $res = \app\common\entity\Message::insert($data);
        if ($res) {
            return json(['code' => 0, 'message' => '提交成功', 'toUrl' => url('member/message')]);
        } else {
            return json(['code' => 1, 'message' => '提交失败']);
        }
    }

    /**
     * 客服页面
     */
    public function message()
    {
        $entity = \app\common\entity\Message::field('m.*, u.nick_name, u.avatar')
            ->alias("m")
            ->leftJoin("user u", 'm.user_id = u.id')
            ->where('m.user_id', $this->userId)
            ->order('m.create_time', 'desc')
            ->select();
        return $this->fetch("message", ['list' => $entity]);
    }

    /**
     * 实名认证
     */
    public function certification()
    {
        //获取缓存用户详细信息 
        $identity = new Identity();
        $userInfo = $identity->getUserInfo($this->userId);

        return $this->fetch("certification", ['list' => $userInfo]);
    }

    /**
     * 实名认证下一步
     */
    public function lastreal(Request $request)
    {
        $data['real_name'] = $request->get("real_name");
        $data['card_id'] = $request->get("card_id");

        if (!$data['real_name'] || !$data['card_id']) {
            $this->error("请输入姓名和身份证号！！");
        }

        //获取缓存用户详细信息 
        $identity = new Identity();
        $userInfo = $identity->getUserInfo($this->userId);

        return $this->fetch("lastreal", ['list' => $userInfo, "data" => $data]);
    }

    /**
     * 支付宝
     */
    public function zfb()
    {
        //获取缓存用户详细信息 
        $identity = new Identity();
        $userInfo = $identity->getUserInfo($this->userId);

        return $this->fetch("zfb", ['list' => $userInfo]);
    }

    /**
     * 微信
     */
    public function wx()
    {
        //获取缓存用户详细信息 
        $identity = new Identity();
        $userInfo = $identity->getUserInfo($this->userId);

        return $this->fetch("wx", ['list' => $userInfo]);
    }

    /**
     * 添加银行卡
     */
    public function card()
    {
        //获取缓存用户详细信息
        $identity = new Identity();
        $userInfo = $identity->getUserInfo($this->userId);

        return $this->fetch("card", ['list' => $userInfo]);
    }

    /**
     * 修改个人信息
     */
    public function updateUser(Request $request)
    {
        //获取缓存用户详细信息
        $identity = new Identity();
        $userInfo = $identity->getUserInfo($this->userId);

        $user = new Service();

        $data = array();

        $card = $request->post("card");//银行卡号
        if ($card) {
            if ($user->checkMsg("card", $card, $userInfo->user_id)) {
                return json(['code' => 1, 'message' => '该银行卡号已经被绑定了']);
            } else {
                $data['card'] = $card;
            }
        }
        $card_name = $request->post("card_name");//开户行
        if ($card_name) {
            $data['card_name'] = $card_name;
        }
        $zfb = $request->post("zfb");//支付宝
        if ($zfb) {
            if ($user->checkMsg("zfb", $zfb, $userInfo->user_id)) {
                return json(['code' => 1, 'message' => '该支付宝号已经被绑定了']);
            } else {
                $data['zfb'] = $zfb;
            }

        }
        $zfb_image_url = $request->post("zfb_image_url");

        if ($zfb_image_url) {
            $data['zfb_image_url'] = $zfb_image_url;
        }
        $wx = $request->post("wx");//微信
        if ($wx) {
            if ($user->checkMsg("wx", $wx, $userInfo->user_id)) {
                return json(['code' => 1, 'message' => '该微信号已经被绑定了']);
            } else {
                $data['wx'] = $wx;
            }
        }
        $wx_image_url = $request->post("wx_image_url");
        if ($wx_image_url) {
            $data['wx_image_url'] = $wx_image_url;
        }
        $real_name = $request->post("real_name");//真实姓名
        if ($real_name) {
            $data['real_name'] = $real_name;
        }
        $card_id = $request->post("card_id");//身份证号
        if ($card_id) {
            $data['card_id'] = $card_id;
        }
        $card_left = $request->post("card_left");//身份证反面
        if ($card_left) {
            $data['card_left'] = $card_left;
        }
        $card_right = $request->post("card_right");//身份证反面
        if ($card_right) {
            $data['card_right'] = $card_right;
        }
        $avatar = $request->post("avatar");//头像
        if ($avatar) {
            $data['avatar'] = $avatar;
        }

        $res = \app\common\entity\User::where('id', $this->userId)->update($data);
        // dump(\app\common\entity\User::getLastsql());die;
        if ($res) {
            //更新缓存
            $identity->delCache($this->userId);
            return json(['code' => 0, 'message' => '修改成功', 'toUrl' => url('member/index')]);
        } else {
            return json(['code' => 1, 'message' => '修改失败']);
        }
    }

    /**
     * 魔盒
     */
    public function magicbox()
    {
        $user_product = new UserProduct();
        $magicList = $user_product->getBox($this->userId);
        return $this->fetch("magicbox", ["magicList" => $magicList]);
    }

    /**
     * 清除缓存
     */
    public function delCache()
    {
        $identity = new Identity();
        $identity->delCache($this->userId);
    }

    /**
     * 登录到交易市场
     */
    public function login(Request $request)
    {
        if ($request->isPost()) {
            $password = $request->post('password');
            if (!$password) {
                return json(['code' => 1, 'message' => '请输入密码']);
            }
            $auth = new Auth();
            if (!$auth->check($password)) {
                return json(['code' => 1, 'message' => '密码错误']);
            }
            $url = Session::get('prev_url');
            Session::delete('prev_url');
            return json(['code' => 0, 'message' => '登录成功', 'toUrl' => $url]);
        }
        Session::set('prev_url', !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : url('market/index'));
        return $this->fetch('login');
    }

    /**
     * 账单
     */
    public function magicloglist(Request $request)
    {
        $type = $request->get("type", 1);
        if ($request->isAjax()) {
            $page = $request->get('page', 1);
            $limit = $request->get('limit', 10);
            $model = new UserMagicLog();
            $list = $model->magicloglist($type, $this->userId, $page, $limit);

            return json(['code' => 0, 'message' => 'success', 'data' => $list]);
        }
        return $this->fetch("magicloglist", [
            'type' => $type
        ]);
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        $service = new Identity();
        $service->logout();

        $this->redirect('publics/index');
    }

    /**
     * 推广
     */
    public function spread()
    {
        //获取当前用户的推广码
        //$path = url('qrcode');
        $code = UserInviteCode::where('user_id', $this->userId)->value('invite_code');

        $fileName = Env::get('app_path') . '../public/code/qrcode_' . $code . '.png';
        if (!file_exists($fileName)) {
            $path = $this->qrcode($code);

            ob_clean();
            $editor = Grafika::createEditor();

            $background = Env::get('app_path') . '../public/static/img/zhaomubg.png';

            $editor->open($image1, $background);
            $editor->text($image1, $code, 30, 520, 1390, new Color('#ffffff'), '', 0);
            $editor->open($image2, $path);
            $editor->blend($image1, $image2, 'normal', 0.9, 'center');
            $editor->save($image1, Env::get('app_path') . '../public/code/qrcode_' . $code . '.png');
        }

        return $this->fetch('spread', [
            'path' => '/code/qrcode_' . $code . '.png'
        ]);
    }

    protected function qrcode($code)
    {
        //$code = UserInviteCode::where('user_id', $this->userId)->value('invite_code');
        $path = Env::get('app_path') . '../public/code/' . $code . '.png';

        if (!file_exists($path)) {
            ob_clean();
            $url = url('publics/register', ['code' => $code], 'html', true);
            $qrCode = new \Endroid\QrCode\QrCode();

            $qrCode->setText($url);
            $qrCode->setSize(300);
            $qrCode->setWriterByName('png');
            $qrCode->setMargin(10);
            $qrCode->setEncoding('UTF-8');
            $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
            $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
            $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 100]);
            //$qrCode->setLabel('Scan the code', 16, __DIR__.'/../assets/fonts/noto_sans.otf', LabelAlignment::CENTER);
            $qrCode->setLogoPath(Env::get('app_path') . '../public/static/img/logo5.png');
            $qrCode->setLogoWidth(200);
            $qrCode->setValidateResult(false);

            header('Content-Type: ' . $qrCode->getContentType());
            $content = $qrCode->writeString();

            $path = Env::get('app_path') . '../public/code/' . $code . '.png';

            file_put_contents($path, $content);
        }

        return $path;

    }

    public function safepassword(Request $request)
    {
        if ($request->isPost()) {
            $validate = $this->validate($request->post(), '\app\index\validate\PasswordForm');

            if ($validate !== true) {
                return json(['code' => 1, 'message' => $validate]);
            }

            //判断原密码是否相等
            $oldPassword = $request->post('old_pwd');
            $user = User::where('id', $this->userId)->find();
            $service = new \app\common\service\Users\Service();
            $result = $service->checkSafePassword($oldPassword, $user);

            if (!$result) {
                return json(['code' => 1, 'message' => '原密码输入错误']);
            }

            //修改
            $user->trad_password = $service->getPassword($request->post('new_pwd'));

            if (!$user->save()) {
                return json(['code' => 1, 'message' => '修改失败']);
            }

            return json(['code' => 0, 'message' => '修改成功']);

        }
        return $this->fetch('safepassword');
    }
}