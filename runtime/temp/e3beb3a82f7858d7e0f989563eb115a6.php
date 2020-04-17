<?php /*a:4:{s:49:"F:\1000\application\index\view\product\index.html";i:1529157763;s:47:"F:\1000\application\index\view\layout\head.html";i:1523246924;s:46:"F:\1000\application\index\view\layout\nav.html";i:1529332964;s:49:"F:\1000\application\index\view\layout\footer.html";i:1523246924;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>产品</title>
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
<!--<header class="mui-bar mui-bar-nav  my-header">
    <h1 id="title" class="mui-title">流量魔盒</h1>
</header>-->
<div class="mui-content" style="padding-bottom: 100px">
    <div class="white-box mui-row product-top">
        <div class="mui-col-xs-4 mui-col-xs-4 text">
            当前算力
        </div>
        <div id="rand-value" class="mui-col-xs-4 mui-col-xs-4 product-img">
            789
        </div>
        <div class="mui-col-xs-4 mui-col-xs-4 text">
            kb/s
        </div>
    </div>
    <p style="padding: 20px">
        晶盒能源：通过数据互联模拟手机、电脑、智能家电等智能设备的工作算力，基于智能终端，通过大型云服务器计算产生晶石能源。
    </p>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($list as $list): ?>
            <div class="swiper-slide product-list">
                <div class="product-item white-box left">
                    <img class="product-img" src="<?php echo htmlentities($list->image_url); ?>">
                    <h4 class="text-center product-name"><?php echo htmlentities($list->product_name); ?></h4>

                    <p class="text-center">晶石开采率：<?php echo number_format($list->rate_min,2); ?>kb/s-<?php echo number_format($list->rate_max,2); ?>kb/s</p>

                    <p class="text-center">24小时产量：<?php echo number_format($list->yield_min,2); ?>糖果-<?php echo number_format($list->yield_max,2); ?>糖果</p>

                    <p class="text-center">电池周期：<?php echo htmlentities($list->period); ?> 天</p>
                    <!-- <p class="text-center">工厂价格：<?php echo htmlentities($list->price); ?>糖果</p> -->
                    <!-- <p class="text-center">宝石价格：<?php echo htmlentities($list->jewel_price); ?>宝石</p> -->
                    <div class="mui-row product-price">
                        <!-- <div class="mui-col-xs-6 mui-col-sm-6" did="<?php echo htmlentities($list->id); ?>" onclick="buy(this, 2)"><?php echo htmlentities($list->price); ?>糖果</div> -->
                        <div class="mui-col-xs-6 mui-col-sm-6" did="<?php echo htmlentities($list->id); ?>" style="background-color: #17F4DF"><?php echo htmlentities($list->price); ?>糖果</div>
                        <div class="mui-col-xs-6 mui-col-sm-6" did="<?php echo htmlentities($list->id); ?>" onclick="buy(this, 1)" style="background-color: #17c3e5">购买</div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!--<div class="product-list">
        <div class="product-item white-box left">
            <img class="product-img" src="img/mh1.png">
            <h4 class="text-center product-name">迷你魔盒</h4>
            <p class="text-center">魔石开采率：0.01kb/s-0.011kb/s</p>
            <p class="text-center">24小时产量：0.01kb/s-0.011kb/s</p>
            <p class="text-center">电池周期：25 天</p>
            <div class="mui-row product-price">
                <div class="mui-col-xs-6 mui-col-sm-6">10魔石</div>
                <div class="mui-col-xs-6 mui-col-sm-6">购买</div>
            </div>
        </div>
        <div class="product-item white-box left">
            <img class="product-img" src="img/mh1.png">
            <h4 class="text-center product-name">迷你魔盒</h4>
            <p class="text-center">魔石开采率：0.01kb/s-0.011kb/s</p>
            <p class="text-center">24小时产量：0.01kb/s-0.011kb/s</p>
            <p class="text-center">电池周期：25 天</p>
            <div class="mui-row product-price">
                <div class="mui-col-xs-6 mui-col-sm-6">10魔石</div>
                <div class="mui-col-xs-6 mui-col-sm-6">购买</div>
            </div>
        </div>
        <div class="product-item white-box left">
            <img class="product-img" src="img/mh1.png">
            <h4 class="text-center product-name">迷你魔盒</h4>
            <p class="text-center">魔石开采率：0.01kb/s-0.011kb/s</p>
            <p class="text-center">24小时产量：0.01kb/s-0.011kb/s</p>
            <p class="text-center">电池周期：25 天</p>
            <div class="mui-row product-price">
                <div class="mui-col-xs-6 mui-col-sm-6">10魔石</div>
                <div class="mui-col-xs-6 mui-col-sm-6">购买</div>
            </div>
        </div>
        <div class="product-item white-box left">
            <img class="product-img" src="img/mh1.png">
            <h4 class="text-center product-name">迷你魔盒</h4>
            <p class="text-center">魔石开采率：0.01kb/s-0.011kb/s</p>
            <p class="text-center">24小时产量：0.01kb/s-0.011kb/s</p>
            <p class="text-center">电池周期：25 天</p>
            <div class="mui-row product-price">
                <div class="mui-col-xs-6 mui-col-sm-6">10魔石</div>
                <div class="mui-col-xs-6 mui-col-sm-6">购买</div>
            </div>
        </div>
    </div>-->
</div>
<nav class="mui-bar mui-bar-tab my-nav">
    <a class="mui-tab-item mui-active" href="<?php echo url('index/index','','',true); ?>" >
        <!--<span class="mui-icon mui-icon-home"></span>-->
        <img src="/static/img/dbsy.png" data-image="dbsy">
        <span class="mui-tab-label">首页</span>
    </a>
    <a class="mui-tab-item" href="<?php echo url('product/index','','',true); ?>" >
        <img src="/static/img/dbmo.png" data-image="dbmo" >
        <span class="mui-tab-label">晶盒</span>
    </a>
    <a class="mui-tab-item" href="<?php echo url('market/index','','',true); ?>" >
        <img src="/static/img/dbjy.png" data-image="dbjy" >
        <span class="mui-tab-label">交易</span>
    </a>
    <a class="mui-tab-item" href="<?php echo url('member/index','','',true); ?>" >
        <img src="/static/img/dbwd.png" data-image="dbwd" >
        <span class="mui-tab-label">我的</span>
    </a>
</nav>
</body>

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
	
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1.2,
        spaceBetween: 0,
        centeredSlides: true,
        speed: 300,
    });
    function buy(e, type)
    {
        mui.showLoading("请稍等....");
        var product_id = $(e).attr("did");
        $.ajax({
            url:"/index/product/recharge",
            type:'post',
            dataType:'json',
            data:{'product_id' : product_id, 'type' : type},
            success:function(data){
                mui.hideLoading();
                mui.alert(data.message);
            }
        })
    }

    setInterval(function(){
        var n2= Math.floor(1000*Math.random())
        $("#rand-value").html(n2)
    },2000)
</script>
</html>