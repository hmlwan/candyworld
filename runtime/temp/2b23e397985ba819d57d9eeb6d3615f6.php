<?php /*a:1:{s:66:"D:\wwwroot\web.4656.top\application\index\view\publics\change.html";i:1578457636;}*/ ?>
<!DOCTYPE html>
<html id="change-password">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>找回密码</title>
		<link href="/static/css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/static/css/mui.loading.css"/>
    	<link rel="stylesheet" href="/static/css/public.css"/>
	</head>

	<body class="login-body">
		<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5;">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">修改密码</h1>
		</header>
		<div class="mui-content container">
			<form class="mui-input-group" id="change_form" action="<?php echo url('publics/changeSave'); ?>" method="post" onsubmit="return false">
				<div class="mui-input-row my-input-row">
					<label>手机号</label>
					<input type="text" class="mui-input" id="mobile" placeholder="请输入手机号" name="mobile">
				</div>
				<div class="mui-input-row my-input-row">
					<label>新密码</label>
					<input type="password" class="mui-input-password" placeholder="请输入密码" name="new_pwd">
				</div>
				<div class="mui-input-row my-input-row">
					<label>确认密码</label>
					<input type="password" class="mui-input-password" placeholder="请输入密码" name="confirm_pwd">
				</div>
				<div class="mui-input-row my-input-row">
					<input type="text" class="mui-input" style="width: 50%;" placeholder="请输入验证码" name="code">
					<button type="button" data-url="<?php echo url('publics/sendChange'); ?>" data-mobile="mobile" onclick="sendCode(this)"
                        id="send-code" class="mui-btn mui-btn-warning send-code" data-loading-text="登录中">发送验证码</button>
				</div>
			</form>
			<button type="button" class="mui-btn mui-btn-warning my-btn" data-loading-text="登录中" data-form="change_form"  onclick="ajaxPost(this)">确定</button>
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