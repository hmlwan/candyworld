<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>收益</title>
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		list-style: none;
    	}
    </style>

  </head>
  <body style="background: #c9cad2;">
  	
  	<div class="award-index-t">
   	<p class="award-ysy">账户余额(元)</p>
   	<p class="award-sss"><?php echo ($yue); ?></p>
   </div>
   
   <div class="award-index-a">
   	<p class="award-ysy">总收益(元)</p>
   	<p class="award-sss"><?php echo ($shouyi); ?></p>
   </div>
   
   <div class="award-index-b">
   	<p class="award-ysy">已提现(元)</p>
   	<p class="award-sss"><?php echo ($yiti); ?></p>
   </div>
   
   <div class="award-index-aaa">
   	<a href="<?php echo U('Index/Wallet/award');?>">全部</a>
   	<a href="<?php echo U('Index/Wallet/llaward');?>">充电收入</a>
   	<a href="<?php echo U('Index/Wallet/tgaward');?>" style="border-bottom: 2px #fff solid;">推广收入</a>
   </div>
   
   <div class="award-index-ui">
   	<ul>
   		<?php if(is_array($list)): foreach($list as $key=>$v): ?><li>
   			<p> <span><?php echo (date('Y-m-d',$v["addtime"])); ?></span> <span><?php echo ($v["desc"]); ?></span>  <span><?php if($v["adds"] == 0.00): ?>-<?php echo (two_number($v["reduce"])); else: ?>+<?php echo (two_number($v["adds"])); endif; ?></span> </p>
   		</li><?php endforeach; endif; ?>
   	</ul>
   </div>
   <div class="award-index-ycc">
   	<?php echo ($page); ?>
   </div>


</body>
</html>