<?php /*a:2:{s:56:"D:\WWW\candyworld\application\index\view\member\set.html";i:1578457636;s:57:"D:\WWW\candyworld\application\index\view\layout\head.html";i:1578457636;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>设置</title>
    <!--head-->
    
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<link href="/static/css/mui.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/static/css/mui.loading.css"/>
<link rel="stylesheet" href="/static/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/static/css/swiper-4.2.0.min.css"/>
<script src="/static/js/mui.min.js"></script>
</head>
<body>
<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5">
    <a href="/index/member/index" class="mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 id="title" class="mui-title">设置</h1>
</header>
<div class="mui-content">
    <ul class="mui-table-view my-view" style="margin-top: 10px;">
        <li class="mui-table-view-cell mine-list-item">
            <a href="/index/member/password" class="mui-navigate-right " >
                <span>修改密码</span>
            </a>
        </li>
    </ul>
    <ul class="mui-table-view my-view" style="margin-top: 10px;">
        <li class="mui-table-view-cell mine-list-item">
            <a href="/index/member/certification" class="mui-navigate-right " >
                <span class="left">实名认证</span>
                <?php if($list->is_certification == 1): ?>
		        	<span class="right info">已认证</span>
		        	<?php elseif($list->is_certification == -1): ?>
		        	<span class="right info">未认证</span>
                    <?php elseif($list->is_certification == 2): ?>
                    <span class="right info">认证失败</span>
		        <?php endif; ?>
            </a>
        </li>
        <li class="mui-table-view-cell mine-list-item mobile">
            <a class="mui-navigate-right " >
                <span class="left">手机号码</span>
                <span class="right "><?php echo htmlentities($list->mobile); ?></span>
            </a>
        </li>
    </ul>
    <ul class="mui-table-view my-view" style="margin-top: 10px;">
        <li class="mui-table-view-cell mine-list-item">
            <a href="/index/member/card" class="mui-navigate-right " >
                <span class="left">银行卡</span>
                <?php if($list->card_name && $list->card): ?>
		        	<span class="right info">已绑定</span>
		        	<?php else: ?>
		        	<span class="right info">未绑定</span>
		        <?php endif; ?>
            </a>
        </li>
        <li class="mui-table-view-cell mine-list-item ">
            <a href="/index/member/wx" class="mui-navigate-right " >
                <span class="left">微信</span>
                <?php if($list->wx || $list->wx_image_url): ?>
		        	<span class="right info">已绑定</span>
		        	<?php else: ?>
		        	<span class="right info">未绑定</span>
		        <?php endif; ?>
            </a>
        </li>
        <li class="mui-table-view-cell mine-list-item ">
            <a href="/index/member/zfb" class="mui-navigate-right " >
                <span class="left">支付宝</span>
                <?php if($list->zfb || $list->zfb_image_url): ?>
		        	<span class="right info">已绑定</span>
		        	<?php else: ?>
		        	<span class="right info">未绑定</span>
		        <?php endif; ?>
            </a>
        </li>
    </ul>
    <button onclick="logout()" class="my-btn mui-btn" style="color: #fff;background-color: #17c3e5; border-color: #17c3e5;">退出登录</button>
</div>
</body>
<script>
    function logout(){
        window.location.href = "<?php echo url('member/logout'); ?>";
    }
</script>
</html>