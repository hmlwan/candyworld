<?php /*a:3:{s:67:"/www/wwwroot/mojing/application/index/view/member/safepassword.html";i:1523388146;s:59:"/www/wwwroot/mojing/application/index/view/layout/head.html";i:1523304526;s:61:"/www/wwwroot/mojing/application/index/view/layout/footer.html";i:1523304526;}*/ ?>
<!DOCTYPE html>
<html id="change-password">

<head>
    <meta charset="utf-8">
    <title>修改密码</title>
    
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<link href="/static/css/mui.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/static/css/mui.loading.css"/>
<link rel="stylesheet" href="/static/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/static/css/swiper-4.2.0.min.css"/>
<script src="/static/js/mui.min.js"></script>
</head>

<body class="login-body">
<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5">
    <a href="/index/member/set" class="mui-icon mui-icon-left-nav mui-pull-left"></a>

    <h1 class="mui-title">修改密码</h1>
</header>
<div style="top: 44px;z-index: 50;"
     class="mui-segmented-control mui-segmented-control-inverted mui-segmented-control-primary my-tabs">
    <a class="mui-control-item" href="<?php echo url('member/password'); ?>">
        登录密码
    </a>
    <a class="mui-control-item  mui-active">
        交易密码
    </a>
</div>
<div class="mui-content container">
    <form action="<?php echo url('member/safePassword'); ?>" onsubmit="return false" class="mui-input-group" id="change-password-form" method="post">
        <div class="mui-input-row my-input-row">
            <label>原密码</label>
            <input type="password"  class="mui-input-password" placeholder="请输入原密码"
                   name="old_pwd">
        </div>
        <div class="mui-input-row my-input-row">
            <label>新密码</label>
            <input type="password"  class="mui-input-password" placeholder="请输入密码"
                   name="new_pwd">
        </div>
        <div class="mui-input-row my-input-row">
            <label>确认密码</label>
            <input type="password" class="mui-input-password" placeholder="请输入密码" name="confirm_pwd">
        </div>
    </form>
    <button type="submit" data-form="change-password-form" onclick="ajaxPost(this)"
            class="mui-btn mui-btn-warning my-btn" data-loading-text="登录中">确定
    </button>
</div>
<script src="/static/js/jquery-1.11.1.min.js"></script>
<script src="/static/js/mui.loading.js"></script>
<script src="/static/js/main.js"></script>
<script src="/static/js/mui.zoom.js"></script>
<script src="/static/js/mui.previewimage.js"></script>
<script src="/static/js/swiper-4.2.0.min.js"></script>

<script type="text/javascript">
	mui.init()
	mui.previewImage();
	mui('body').on('tap','a',function(){
		window.top.location.href=this.href;
	});
	mui('.mui-scroll-wrapper').scroll({
		deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
	});
	mui('body').on('tap','.my-tips',function(){
		mui.alert($(this).attr('data-msg'))
	})
	$(function () {
		$(".mui-tab-item").removeClass('mui-active');
		$(".mui-tab-item").each(function () {
			var current = window.location.href;
			console.log(current);
			if (current == $(this).attr('href')) {
				$(this).addClass('mui-active');
				var image = $(this).find('img').attr('data-image');
				$(this).find('img').attr('src','/static/img/'+image+'1.png')
			}
		})
	})
</script>
	
</body>
</html>
