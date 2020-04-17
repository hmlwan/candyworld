<?php
namespace app\index\controller;

use app\common\entity\User;
use app\common\entity\UserInviteCode;
use app\common\service\Users\Service;
use app\index\model\SendCode;
use app\index\model\SiteAuth;
use app\index\validate\RegisterForm;
use think\Controller;
use think\Request;

class Publics extends Controller
{

    public function initialize()
    {
        $switch = SiteAuth::checkSite();
        if ($switch !== true) {
            if (request()->isAjax()) {
                return json(['code' => 1, 'message' => $switch]);
            } else {
                (new SiteAuth())->alert($switch);
            }
        }
        parent::initialize();
    }

    public function index()
    {
        return $this->fetch('login');
    }

    //登录处理
    public function login(Request $request)
    {
        $result = $this->validate($request->post(), 'app\index\validate\LoginForm');
        if ($result !== true) {
            return json(['code' => 1, 'message' => $result]);
        }
        $model  = new \app\index\model\User();
        $result = $model->doLogin($request->post('account'), $request->post('password'));

        if ($result !== true) {
            return json(['code' => 1, 'message' => '账号或者密码错误']);
        }

        return json(['code' => 0, 'message' => '登录成功', 'toUrl' => url('index/index')]);
    }

    public function register(Request $request)
    {
        $code = $request->get('code', '');
        /*if (!$code) {
        $this->error('平台暂未开启自己注册');
        }*/
        //判断code是否正确
        if ($code) {
            $model  = new UserInviteCode();
            $result = $model->getUserIdByCode($code);
            if (!$result) {
                (new SiteAuth())->alert('邀请码不正确');
            }
        }

        return $this->fetch('register', [
            'code' => $code,
        ]);
    }

    public function doRegister(Request $request)
    {
        $model = new \app\index\model\User();
        if (!$model->checkRegisterOpen()) {
            return json(['code' => 1, 'message' => '平台已关闭注册了']);
        }
        if (!$model->checkIp()) {
            return json(['code' => 1, 'message' => '兄弟，好像注册太多了哦']);
        }

        $validate = $this->validate($request->post(), '\app\index\validate\RegisterForm');
        if ($validate !== true) {
            return json(['code' => 1, 'message' => $validate]);
        }

        $form = new RegisterForm();
        if (!$form->checkCode($request->post('code'), $request->post('mobile'))) {
            return json(['code' => 1, 'message' => '验证码输入错误']);
        }
        //注册处理
        $result = $model->doRegister($request->post());
        if ($result) {
            return json(['code' => 0, 'message' => '注册成功', 'toUrl' => url('index')]);
        }
        return json(['code' => 1, 'message' => '注册失败']);
    }

    //发送注册验证码
    public function send(Request $request)
    {
        if ($request->isPost()) {
            $mobile = $request->post('mobile');
            //检验手机号码
            if (!preg_match('/^1[345789][0-9]{9}$/', $mobile)) {
                return json(['code' => 1, 'message' => '手机号码格式不正确']);
            }
            //判断手机号码是否已被注册
            if (User::checkMobile($mobile)) {
                return json(['code' => 1, 'message' => '此账号已被注册，请重新填写']);
            }
            $model = new SendCode($mobile, 'register');
            if ($model->send()) {
                return json(['code' => 0, 'message' => '你的验证码发送成功']);
                //return json(['code' => 0, 'message' => '你的验证码为' . $model->code]);
            }

            return json(['code' => 1, 'message' => '发送失败']);
        }
    }

    //找回密码
    public function change()
    {
        return $this->fetch('change');
    }

    //发送找回密码验证码
    public function sendChange(Request $request)
    {
        if ($request->isPost()) {
            $mobile = $request->post('mobile');
            //检验手机号码
            if (!preg_match('/^1[345789][0-9]{9}$/', $mobile)) {
                return json(['code' => 1, 'message' => '手机号码格式不正确']);
            }
            //判断手机号码是否注册
            if (!User::checkMobile($mobile)) {
                return json(['code' => 1, 'message' => '此账号不存在，请重新填写']);
            }
            $model = new SendCode($mobile, 'change-password');
            if ($model->send()) {
                return json(['code' => 0, 'message' => '你的验证码发送成功']);
                //return json(['code' => 0, 'message' => '你的验证码为' . $model->code]);
            }

            return json(['code' => 1, 'message' => '发送失败']);
        }
    }

    /**
     * 找回密码 修改密码
     */
    public function changeSave(Request $request)
    {
        $mobile = $request->post("mobile");
        //检验手机号码
        if (!preg_match('/^1[345789][0-9]{9}$/', $mobile)) {
            return json(['code' => 1, 'message' => '手机号码格式不正确']);
        }
        $user = User::where("mobile", $mobile)->find();
        //判断手机号码是否注册
        if (!User::checkMobile($mobile)) {
            return json(['code' => 1, 'message' => '此账号不存在，请重新填写']);
        }

        $new_pwd     = $request->post("new_pwd"); //新密码
        $confirm_pwd = $request->post("confirm_pwd"); //确认密码

        $service = new Service();
        if ($service->getPassword($new_pwd) == $user->password) {
            return json(['code' => 1, 'message' => '密码没变']);
        }

        if (strlen($new_pwd) < 6) {
            return json(['code' => 1, 'message' => '密码长度至少6位']);
        }

        if ($new_pwd != $confirm_pwd) {
            return json(['code' => 1, 'message' => '两次密码输入不一致']);
        }

        if (!$request->post("code")) {
            return json(['code' => 1, 'message' => '验证码不能为空']);
        }

        $form = new RegisterForm();
        if (!$form->checkChange($request->post('code'), $request->post('mobile'))) {
            return json(['code' => 1, 'message' => '验证码输入错误']);
        }

        $res = User::where("mobile", $mobile)->update(["password" => $service->getPassword($new_pwd)]);
        if ($res) {
            return json(['code' => 0, 'message' => '密码修改成功', 'toUrl' => url('index')]);
        } else {
            return json(['code' => 1, 'message' => '密码修改失败']);
        }
    }
}
