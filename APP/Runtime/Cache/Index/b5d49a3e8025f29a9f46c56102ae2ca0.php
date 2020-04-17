<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>机器人</title>

    <link rel="stylesheet" href="/Public/dianyun/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
     <link rel="stylesheet" href="/Public/dianyun/css/shuitexiao.css">


</head>
<body onload="onload()" class="framework7-root">
	
<div class="panel-overlay"></div>
<div class="panel panel-left panel-reveal layout-dark">
</div>

<div class="views">
    <div class="view view-main">
        <div class="pages">
            <link rel="stylesheet" href="/Public/dianyun/css/chat.css">
            <link rel="stylesheet" href="/Public/dianyun/css/robot.css">

            <div class="page toolbar-fixed">
                <div class="page-content">

	<div class="headtopa">机器人</div>

         
         <div class="daojishi">
         
         <div id="advert">
        <div class="bg1">
            <div>
                <img src="/Public/dianyun/img/icon-01.png" alt="" class="icon01">
                <img src="/Public/dianyun/img/icon-02.png" alt="" class="icon02">
                <img src="/Public/dianyun/img/icon-03.png" alt="" class="icon03">
                <img src="/Public/dianyun/img/icon-04.png" alt="" class="icon04">
                <img src="/Public/dianyun/img/icon-05.png" alt="" class="icon05">
                <img src="/Public/dianyun/img/icon-06.png" alt="" class="icon06">
                <img src="/Public/dianyun/img/icon-07.png" alt="" class="icon07">
            </div>
        </div>
        <div class="bg2">
            <div>
                <span class="icon08">
                    <img src="/Public/dianyun/img/icon-08.png" alt="" width="10px">
                </span>
                <span class="icon09">
                    <img src="/Public/dianyun/img/icon-09.png" alt="" width="30px">
                </span>
                <span class="icon10">
                    <img src="/Public/dianyun/img/icon-10.png" alt="" width="20px">
                </span>
            </div>
        </div>
        <div class="bg3">
            <div>
                <span class="icon11">
                    <img src="/Public/dianyun/img/icon-11.png" alt="" width="26px">
                </span>
                <span class="icon12">
                    <img src="/Public/dianyun/img/icon-12.png" alt="" width="18px">
                </span>
            </div>
        </div>
        <div class="content">
            <img src="http://127.0.0.1/Public/dianyun/img/speak.gif" alt="" style="height: 50px;vertical-align: middle;">
        </div>
    </div>
         </div>
         
         <div class="linquliulian">
         	<a href="<?php echo U('Robot/robot');?>">查看今日客单</a>
         </div>



           <div class="jiqirenshouyi">
           	
           	<div class="zonglei">
           		<div class="ddsl">
           			<p class="shuliang"><?php echo ($count); ?></p>
           			<a href="<?php echo U('Robot/robot');?>" class="mingzi" style="display: block;">我的机器人</a>
           		</div>
           		<div class="ddsl">
           			<p class="shuliang"><?php echo ($minfo["logincount"]); ?></p>
           			<a href="<?php echo U('Wallet/award');?>" class="mingzi" style="display: block;">我的流量(个)</a>
           		</div>
           		<div class="ddsl">
           			<p class="shuliang"><?php echo ($minfo["money"]); ?></p>
           			<a href="<?php echo U('Wallet/award');?>" class="mingzi" style="display: block;">我的收益(元)</a>
           		</div>

           	</div>
           	
           	
           </div>






























                </div>




                <div class="toolbar tabbar tabbar-labels">
                    <div class="toolbar-inner">
                        <a href="<?php echo U('Index/New/index');?>" class="tab-link external">
                            <img src="/Public/dianyun/img/tab-home-01.png">
                            <span class="tabbar-label">首页</span>
                        </a>
                        <a href="<?php echo U('Index/Robot/index');?>" class="tab-link external active">
                            <img src="/Public/dianyun/img/tab-robot.png">
                            <span class="tabbar-label">机器人</span>
                        </a>
                        <a href="<?php echo U('Index/Task/index');?>" class="tab-link external">
                            <img src="/Public/dianyun/img/tab-coin-01.png">
                            <span class="tabbar-label">分享</span>
                        </a>
                        <a href="<?php echo U('Index/Wallet/index');?>" class="tab-link external">
                            <img src="/Public/dianyun/img/tab-account-01.png">
                            <span class="tabbar-label">我的</span>
                        </a>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

</body></html>