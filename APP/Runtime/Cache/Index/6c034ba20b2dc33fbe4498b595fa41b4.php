<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0057)http://4.sxhengtaiweiye.com.cn/index.php/index/shop/plist -->
<html class="pixel-ratio-1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link type="text/css" rel="stylesheet" href="/Public/dianyun/css1/lib.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <title>购买充电宝</title>


    <!--<link rel="stylesheet" href="/Public/dianyun/css/framework7.ios.min.css">-->
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">

</head>
<body style="background: #c9cad2;">
	
	
	<div class="index-d" style="margin-bottom: 2rem;">
		<p class="index-d-p"> <img src="/Public/dianyun/img/hot-icon.png" />充电宝列表</p>
	
				  
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


  <div style="height:50px">  </div>








	<footer>
	
		<div class="foot_bo">
			<a href="<?php echo U('Index/New/index');?>">
				<img src="/Public/dianyun/img/i1.png" />
				<p>首页</p>
			</a>
		</div>
	
		<div class="foot_cen">
			<a href="<?php echo U('Index/Robot/robot');?>">
				<img src="/Public/dianyun/img/i6.png" />
			</a>
		</div>
	
		<div class="foot_bo">
			<a href="<?php echo U('Index/Wallet/index');?>">
				<img src="/Public/dianyun/img/i3.png" />
				<p>我的</p>
			</a>
		</div>
	
	</footer>







</body>
</html>