<?php /*a:3:{s:68:"/www/wwwroot/www.wscorps.cn/application/index/view/member/about.html";i:1529152286;s:67:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/head.html";i:1523246924;s:69:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/footer.html";i:1523246924;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>关于我们</title>
    
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<link href="/static/css/mui.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/static/css/mui.loading.css"/>
<link rel="stylesheet" href="/static/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/static/css/swiper-4.2.0.min.css"/>
<script src="/static/js/mui.min.js"></script>
</head>
<style type="text/css">
    .font {
        width: 72%;
        height: auto;
        margin: 0 auto;
    }
</style>
<body style="background:white;">
<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5ssss">
    <a href="/index/member/index" class="mui-icon mui-icon-left-nav mui-pull-left"></a>

    <h1 id="title" class="mui-title">关于我们</h1>
</header>
<div class="mui-content" style="background: white;">
    <div class="img" style="text-align: center;">
        <img src="/static/img/logo5.png" style="width: 25%;margin-top: 20px;"/>
    </div>
    <div class="font">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CBE晶盒能源是由英国IUK团队开发。团队前期通过模拟智能手机、电脑、智能家电等智能设备的工作算力产出晶石，平台不参与任何交易，以非盈利性为目的，记录智能设备的耗能数据，并将所有耗能数据上传到能源数据系统，从而后期研发出自己独有的芯片模块，并将模块应用到所有智能设备，使智能设备具有电补偿功能，用户在使用这些日常设备过程中同时享受能源的耗能补偿，让所有用户意识到能源的价值，参与能源生态的建设和发展。

        </p>
    </div>
</div>
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
	
</body>
</html>