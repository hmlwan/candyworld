<?php /*a:1:{s:61:"/www/wwwroot/mojing/application/index/view/publics/login.html";i:1529283618;}*/ ?>
<!DOCTYPE html>
<html id="login">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title>登录</title>
    <link href="/static/css/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/css/mui.loading.css"/>
    <link rel="stylesheet" href="/static/css/public.css"/>
</head>

<body class="login-body">
<div class="mui-content login-content">
    <img src="/static/img/logo1.png" class="logo">

    <form id="login-form" action="<?php echo url('publics/login'); ?>" method="post" onsubmit="return false">
        <div class="login-box">
            <div class="login-box-item">
                <img class="icon" src="/static/img/denglu.png">
                <input type="text" name="account" placeholder="账号">
            </div>
            <div class="login-box-item">
                <img class="icon" src="/static/img/suo.png">
                <input type="password" name="password" placeholder="密码">
            </div>
            <div style="overflow: hidden">
                <a id="change-password" class="find-password">找回密码</a>
                <a id="register" class="register">还没账号？去注册</a>
            </div>
            <div class="login-box-item login-btn" style="background-color: #17c3e5"  data-form="login-form" onclick="ajaxPost(this)" >登 陆</div>
        </div>
    </form>
</div>
</body>
<script src="/static/js/jquery-1.11.1.min.js"></script>
<script src="/static/js/mui.min.js"></script>
<script src="/static/js/mui.loading.js"></script>
<script src="/static/js/main.js"></script>
<script type="text/javascript" charset="utf-8">
    mui.init();
    document.getElementById('change-password').addEventListener('tap', function () {
        mui.openWindow({
            url: "<?php echo url('publics/change'); ?>",
            id: 'change-password',
        })
    })
    document.getElementById('register').addEventListener('tap', function () {
        mui.openWindow({
            url: "<?php echo url('publics/register'); ?>",
            id: 'register',
        })
    })
</script>

</html>