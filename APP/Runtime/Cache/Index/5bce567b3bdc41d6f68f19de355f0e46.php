<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>首页</title>

    
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
    <link rel="stylesheet" href="/Public/css/style.css">
    <script type="text/javascript" src="/Public/js/TouchSlide.1.1.js"></script>
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		list-style: none;
    	}
    </style>
</head>
<body style="background: #F7FBF5;">
	
	
	<div class="index-top">
		<p class="hello">Hi，欢迎来到共享公寓。</p>
		<p class="gonggao">全新舒适性公寓出租啦！</p>
	</div>
	
	<div class="index-c">
		<ul>
			<a href="<?php echo U('Index/Wallet/paihangban');?>">
			<li class="il1">
				<img src="/Public/dianyun/img/i-link-itemIcon1.png"/>
				<p>充电榜</p>
			</li>
			</a>
			<a href="<?php echo U('Index/Index/tgm');?>">
			<li class="il2">
				<img src="/Public/dianyun/img/i-link-itemIcon2.png"/>
				<p>邀请赚钱</p>
			</li>
			</a>
			
			<a href="<?php echo U('Index/New/help');?>">
			<li class="il3">
				<img src="/Public/dianyun/img/i-link-itemIcon3.png"/>
				<p>项目说明</p>
			</li>
			</a>
			
		</ul>
	</div>

	<div class="index-d">
		<p class="index-d-p"> <img src="/Public/dianyun/img/hot-icon.png"/>热门充电宝推荐 <span><a href="<?php echo U('Robot/pcontent',array('id'=>$v['id']));?>">更多</a></span> </p>
		
		  
  <!--new-->

<link href="/Public/css/new.css" rel="stylesheet" type="text/css" />
<div class="tab-panel-item tab-active">
<?php if(is_array($typeData)): foreach($typeData as $key=>$v): ?><div class="aui-flex aui-flex-for">
        <div class="aui-img-fov">
          
            <img src=" <?php echo ($v["thumb"]); ?>" alt="" class="imgs" style="">
        </div>
        <div class="aui-flex-box">
           <div class="aui-sep-content">
            <h3>
                 <?php echo ($v["title"]); ?>
            </h3>
             </div>
            <div class="aui-sep-content">
                
                发电周期：720小时
            </div>
          
            <div class="aui-sep-content">
                
                预计充电：<?php echo ($v["shouyi"]); ?>元
            </div>
          
            <div class="aui-sep-content">
                
                 <button style="border: solid 1px #33a4ff;
    color: #7eab26;
    border-radius: 5px;
    padding: 0.19rem;
    font-size: 11px;
    background: #fff;">
                  <?php echo ($v["b1"]); ?>
                  </button>
                   <button  style="border: solid 1px #33a4ff;
    color: #7eab26;
    border-radius: 5px;
    padding: 0.19rem;
    font-size: 11px;
    background: #fff;">
              <?php echo ($v["b2"]); ?>
               </button>
            </div>
          
             <div class="aui-sep-content">
                
               <h2 style="color:red"><?php echo ($v["price"]); ?>元</h2>
            </div>
            
           
            <button   onclick="location.href='<?php echo U('Robot/buy',array('id'=>$v['id']));?>'"    class="aui-button-got" style=" border: 1px solid #39a4ff;color: #ffffff;background: #1d82d2;    font-weight: bold;    border-radius: 7px;">
                立即建站
            </button>
        </div>
    </div><?php endforeach; endif; ?>
   
</div>
  
  
  
  
  
  
  
  
 <!--endnew-->
		
	</div>
	
  
  

  
  
  
  
  
  
  
  
  
  
  
  
	
	<div class="index-i-lb">
		
	</div>
	<div class="area-20 buyer-history" style="border: 0px red solid;background: #202444; margin-top: 0px;width: 84%;margin-left: 3%;border-radius: 10px;box-shadow: 0px 3px 6px 0px rgba(85,54,237,0.13);background: #ffffff;;margin-bottom: 5rem;">
							<h3 style="color: #000;"><i class="icon iconfont icon-yonghuming"></i> 最近购买用户</h3>
								<marquee scrolldelay="200" id="lstBuyHistory" direction="up" onmouseover="this.stop()" onmouseout="this.start()" style="height: 60px;">
								<ul id="ulBuyHistory">
									<?php if(is_array($mai_log)): foreach($mai_log as $key=>$v): ?><li style="color: #000;"><?php echo (yc_phone($v["user"])); ?>&nbsp;&nbsp;购买了充电宝&nbsp;&nbsp;<?php echo (mb_substr($v["addtime"],5,11,'utf-8')); ?></li><?php endforeach; endif; ?>
								</ul>
							</marquee>
						</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<footer>
		
		<div class="foot_bo">
		<a href="#">
			<img src="/Public/dianyun/img/i2.png"/>
			<p class="xz">首页</p>
		</a>
		</div>
		
		
		<div class="foot_cen">
		<a href="<?php echo U('Index/Robot/robot');?>">
			<img src="/Public/dianyun/img/i5.png"/>
		</a>
		</div>
		
		
		<div class="foot_bo">
		<a href="<?php echo U('Index/Wallet/index');?>">
			<img src="/Public/dianyun/img/i3.png"/>
			<p>我的</p>
		</a>
		</div>
		
		
	</footer>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <script type="text/javascript">
      TouchSlide({
        slideCell:"#slideBox",
        titCell:"#slideBox .hd ul",
        mainCell:"#slideBox .bd ul",
        effect:"leftLoop",
        autoPage:true,
        autoPlay:true,
        interTime:3000

      });
    </script>

</body>
</html>