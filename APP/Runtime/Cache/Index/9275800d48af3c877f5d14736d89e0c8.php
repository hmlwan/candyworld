<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>领金币</title>

    <link rel="stylesheet" href="/Public/dianyun/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">


  </head>
  <body onload="onload()" class="framework7-root">
    <div class="panel-overlay"></div>
	<div class="panel panel-left panel-reveal layout-dark">	    
	</div>
	
    <div class="views">
      <div class="view view-main" data-page="coin">
        <div class="pages">
          <link rel="stylesheet" href="/Public/dianyun/css/chat.css">
<div class="headtop">朋友圈分享</div>
<div data-page="coin" class="page navbar-fixedyyy toolbar-fixed" isinited="true" style="background: #39a4ff;">



   



    <div class="page-contentyyy">
        <div class="coin-topbg">
            <div class="row">
            
            <div class="jinbi">
            	<p>我的金币</p>
            	<p class="jinbishuliang"><?php echo ($jifen); ?>.00</p>
            </div>
                
            </div>
        </div>
        
        
        <div class="dhtbss" style="margin-top: -20px;">
							
							<div class="dhtb">
							<img src="http://ae01.alicdn.com/kf/HTB1ZPcfaxiH3KVjSZPf760BiVXaE.png" alt="" />
							<a href="<?php echo U('Index/Task/duihuan');?>" style="color: #fff;">兑换机器</a>
						</div>
						
						<div class="dhtb">
							<img src="http://ae01.alicdn.com/kf/HTB1drwgawKG3KVjSZFL761MvXXay.png" alt="" />
							<a href="<?php echo U('Index/index/fenxiang');?>" style="color: #fff;">下载素材</a>
						</div>
						
						<div class="dhtb">
							<img src="http://ae01.alicdn.com/kf/HTB1axIgavWG3KVjSZFP760aiXXaG.png" alt="" />
							<a href="<?php echo U('Index/Task/complete');?>" style="color: #fff;">上传截图</a>
						</div>
						
						<div class="dhtb">
							<img src="http://ae01.alicdn.com/kf/HTB1fcZnaBGw3KVjSZFD760WEpXa9.png" alt="" />
							<a href="<?php echo U('Index/Task/completelog');?>" style="color: #fff;">金币记录</a>
						</div>
							
						</div>



                       <div class="wenzi">
                       	<p id="tbid"> 掌上精灵致力于打造流量型平台   
2019最具价值项目——掌上精灵无门槛，0元即可创业，推广2代佣金！！！5月20号20:00点火爆内测 
免费注册送一台流量精灵
目前不删档内测中  速度锁粉了 流量收益：一级收益的20% ，二...... </p>
                        <a class="fl" href="#" onClick="return confirm('暂时没有更多文案!');">更换文案(1)</a>
                        <a class="fr" href="javascript:;" onclick="copyText(document.all.tbid)">点击复制文案</a>
                       </div>



  

        <div class="area-20">
            <div class="row">
                <div class="col-100">
                	 <label class="bold" style="color: #fff;">1、怎么发圈？</label>
                	 <p style="color: #fff;">先点击复制推广文案.然后点击下载素材,保存你喜欢的素材后打开微信APP进入朋友圈发送</p>
                    <label class="bold" style="color: #fff;">2、金币有什么作用？</label>
                    <p style="color: #fff;">金币满<?php echo ($duihuan); ?>个即可兑换一台智能机器人，每天为你赚取600-2000个点击流量。</p>
                    <label class="bold" style="color: #fff;">3、如何领取金币？</label>
                    <p style="color: #fff;">通过“发圈领金币”中获取发圈图片，并发布到您的朋友圈保留两个小时以上，然后截图上传，公司平台审核后，即可获得随机数量的金币。</p>
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
            <a href="<?php echo U('Index/Robot/index');?>" class="tab-link external">
                <img src="/Public/dianyun/img/tab-robot-01.png">
                <span class="tabbar-label">机器人</span>
            </a>
            <a href="<?php echo U('Index/Task/index');?>" class="tab-link external active">
                <img src="/Public/dianyun/img/tab-coin.png">
                <span class="tabbar-label">分享</span>
            </a>
            <a href="<?php echo U('Index/Wallet/index');?>" class="tab-link external">
                <img src="/Public/dianyun/img/tab-account-01.png">
                <span class="tabbar-label">我的</span>
            </a>
        </div>
    </div>


</div>


<script type="text/javascript">
function copyText(obj){
	try{
		var rng = document.body.createTextRange();
		rng.moveToElementText(obj);
		rng.scrollIntoView();
		rng.select();
		rng.execCommand("Copy");
		rng.collapse(false);
		alert("已经复制到粘贴板!你可以使用Ctrl+V 贴到需要的地方去了哦!");
	}catch(e){
		alert("您的浏览器不支持此复制功能，请选中相应内容并使用Ctrl+C进行复制!");
	}
}
</script>


</body></html>