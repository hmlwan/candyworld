<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>我的充电宝</title>
    <link rel="stylesheet" href="/Public/dianyun/css/app.css">
    <link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">


    <link rel="stylesheet" type="text/css" href="/public/css/common.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style1.css">
    <style type="text/css">
                .toolbar:before {display: none;}
                .bxxxx-top{
                	width: 100%; float: left; height: 40px;background: ;font-size: 24px;line-height: 40px;padding-left: 20px;box-sizing: border-box;color: #000;
                	margin-top: 2rem;
                }
                .bxxxx-top a{
                	font-size: 14px;background: #5946cb;width: 100px;height: 30px;display: inline-block;line-height: 30px;border-radius: 30px;text-align: center;margin-left: 10px;margin-top: -2px;
                }
                .boooooss{
                	width: 92%;
                	height: 1000px;
                	/*background: red;*/
                	float: left;
                	margin-left: 4%;
                	margin-top: 20px;
                }
                .boooooss li{
                    width: 100%;
    height: 100px;
    background: #fdfdff;
    border-radius: 10px;
    margin-bottom: 10px;
    border: solid 1px #ccc;
                }
                .sssee{
                	width: 100%;
                	height: 30px;
                	line-height: 30px;
                	font-size: 18px;
                	color: #000;
                	float: left;
                	margin-top: 10px;
                }
                .sssee img{
                	width: 30px;
                	height: 30px;
                	float: left;
                	margin-left: 10px;
                	margin-right: 4px;
                }
                .sssee span{
                	color: #ff6d1a;
                	font-size: 16px;
                	float: right;
                	margin-right: 10px;
                }
                .yyx_f{
                	width: 65%;
                	height: 50px;
                	float: left;
                }
                .yyx_f p{
                	height: 25px;
                	line-height: 25px;
                	font-size: 14px;
                	padding-left: 10px;
                	color: #6f6f6f;
                	
                }
                .lqkd_r{
                	width: 30%;
                	height: 50px;
                	float: right;
                }
                .lqkd_r a{
                	width: 80%;
                	background: #5946cb;
                	height: 30px;
                	display: block;
                	text-align: center;
                	line-height: 30px;
                	margin: 10px 10%;
                	border-radius: 30px;
                }
            </style>



</head>
<body style="background: #fff;">
	
            <p class="bxxxx-top">我的充电宝
            	<a href="<?php echo U('/index/robot/pcontent');?>" style="">购买充电宝 > </a>
            </p>
            
            <div class="boooooss">
            
            	<ul>
            		<?php if(is_array($orders)): foreach($orders as $key=>$v): ?><li>
            				<p class="sssee"><img src="/Public/dianyun/img/yyy.png" /><?php echo ($v["project"]); ?> <span>运行中</span></p>
            
            				<div class="yyx_f">
            					<p>已运行：
            						<?php if($v['zt'] == 1): echo (set_number($v["a_time"],'0')); ?>小时
            							<?php else: ?> --<?php endif; ?>
            						<p>已收益：<?php echo (four_number($v["already_profit"])); ?>元</p>
            				</div>
            
            				<div class="lqkd_r">
            
            					<?php if($v["zt"] == 1): if($v["is_jiesuan"] == 1): ?><a href="<?php echo U('Robot/jiesuan',array('id'=>$v['id']));?>" style="padding:3px 5px; background:#8637f6; color:#FFFFFF; border-radius:4px;">领取电量</a>
            							<?php else: ?>
            							<a href="javascript:alert(&#39;请勿操作，招充电宝在努力的充电中！&#39;);">运行中</a><?php endif; ?>
            						<?php else: ?> ----<?php endif; ?>
            
            				</div>
            
            			</li><?php endforeach; endif; ?>
            	</ul>
            
            </div>
            
            
            
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