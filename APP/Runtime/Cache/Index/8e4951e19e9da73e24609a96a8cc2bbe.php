<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>邀请好友</title>
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		text-decoration: none;
    		list-style: none;
    	}
    	.navbar-fixed .page-content, .navbar-through .page-content{
    		margin-top: 0px;
    		padding-top: 0px;
    	}
    	.bcemw{
    		width: 60%;
    		height: 4rem;
    		background: #5BCEFF;
    		position: fixed;
    		bottom: 5rem;
    		left: 20%;
    		border-radius: 4rem;
    		text-align: center;
    		line-height: 4rem;
    		font-size: 18px;
    		color: #432b09;
    	}
    </style>

</head>
<body onload="onload()" class="framework7-root">
<div class="panel-overlay"></div>
<div class="panel panel-left panel-reveal layout-dark">
</div>

<div class="views">
    <div class="view view-main" data-page="myextend">
        <div class="pages">
            <div data-page="myextend" class="page navbar-fixed" isinited="true">

                <div class="page-content center">
                    <img id="sharedImg" src="<?php echo ($erwei); ?>" style="width:auto; max-width: 100%; height: auto; max-height: 100%;">
                </div>


            </div>


        </div>
    </div>
</div>

<a class="bcemw" href="#">保存二维码</a>

</body></html>