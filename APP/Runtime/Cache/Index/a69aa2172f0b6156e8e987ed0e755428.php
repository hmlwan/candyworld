<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>我的资料</title>
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    	}
    </style>

  </head>
  <body style="background: #c9cad2;">
  	
  	
  	<div class="pe-index-t">
  		<p class="pe-index-t-t">我的头像 <img src="/Public/dianyun/img/lg.png"/> </p>
  		<p class="pe-index-t-c">我的UID <span>XD<?php echo ($minfo["id"]); ?></span> </p>
  		<p class="pe-index-t-c">绑定手机 <span><?php echo ($minfo["mobile"]); ?></span> </p>
  	</div>
  	
  	<p class="pe-index-zf">绑定支付宝</p>
  	
  	<div class="pe-index-pp">
  		<p>提现支付宝</p>
  		<p class="pe-index-pppp"> <?php if(empty($minfo['zhifu'])): ?><a style="color: rgba(220, 235, 245, 1);" class="external" href="<?php echo U('Index/Index/zhifu');?>" style="color: #000;">
                                        点击绑定
                                    </a>
									<?php else: ?>已绑定<?php endif; ?></p>
  	</div>
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
<script src="/Public/dianyun/js/dist2.js"></script>
<script src="/Public/dianyun/js/dist.js"></script>

</body>
</html>