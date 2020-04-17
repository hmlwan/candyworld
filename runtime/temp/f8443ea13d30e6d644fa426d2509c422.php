<?php /*a:1:{s:52:"I:\1000\application\index\view\publics\register.html";i:1523330544;}*/ ?>
<!DOCTYPE html>
<html id="register">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title>注册</title>
    <link href="/static/css/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/css/mui.loading.css"/>
    <link rel="stylesheet" href="/static/css/public.css"/>
</head>

<body class="login-body">
<div class="mui-content login-content">
    <img src="/static/img/logo5.png" class="logo">

    <div class="login-box">
        <form id="register_form" action="<?php echo url('publics/doRegister'); ?>" method="post" onsubmit="return false">
            <div class="login-box-item">
                <input type="text" placeholder="邀请码" name="invite_code" <?php if($code): ?>readonly<?php endif; ?> value="<?php echo htmlentities($code); ?>">
            </div>
            <div class="login-box-item">
                <input type="text" placeholder="昵称" name="nick_name">
            </div>
            <div class="login-box-item">
                <input type="text" id="mobile" placeholder="账号" name="mobile">
            </div>
            <div class="login-box-item">
                <input type="text" name="code" placeholder="验证码" style="width: 50%;">
                <button type="button" data-url="<?php echo url('publics/send'); ?>" data-mobile="mobile" onclick="sendCode(this)"
                        id="send-code" class="mui-btn mui-btn-warning send-code">发送验证码
                </button>
            </div>
            <div class="login-box-item">
                <input type="password" name="password" placeholder="登录密码">
            </div>
            <div class="login-box-item">
                <input type="password" name="safe_password" placeholder="交易密码">
            </div>
            <div class="login-box-item login-btn" style="position: static;width: 100%;background-color: #17c3e5;" data-form="register_form"  onclick="ajaxPost(this)">注册
            </div>
        </form>
    </div>
</div>
</body>
<script src="/static/js/jquery-1.11.1.min.js"></script>
<script src="/static/js/mui.min.js"></script>
<script src="/static/js/mui.loading.js"></script>
<script src="/static/js/main.js"></script>
<script type="text/javascript" charset="utf-8">
    mui.init();
</script>

</html>
