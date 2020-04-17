<?php /*a:3:{s:65:"/www/wwwroot/www.wscorps.cn/application/index/view/index/phb.html";i:1523330544;s:67:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/head.html";i:1523246924;s:69:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/footer.html";i:1523246924;}*/ ?>
<html id="register">
<head>
    <meta charset="utf-8">
    <title>排行榜</title>
    
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<link href="/static/css/mui.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/static/css/mui.loading.css"/>
<link rel="stylesheet" href="/static/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/static/css/swiper-4.2.0.min.css"/>
<script src="/static/js/mui.min.js"></script>
    <style>
        .phb-box {
            padding: 0;
            margin: 0;
        }

        .phb-box .phb-list {
            margin: 0;
            padding: 10px;
            background: #fff;
            border-bottom: 1px solid #eee;
        }

        .phb-box .phb-list .phb-list-item {
            padding: 0;
        }

        .phb-box .phb-list .phb-list-item .top-icon {
            width: 16px;
            vertical-align: middle;
        }

        .phb-box .phb-list .phb-list-item .top-header {
            width: 46px;
            vertical-align: middle;
            margin-left: 10px;
        }

        .phb-box .phb-list .phb-list-item .nick_name {
            margin-left: 10px;
        }

        .phb-box .phb-list .phb-list-item p {
            font-size: 12px;
            padding: 0;
            margin: 0;
        }

        .phb-box .phb-list .phb-list-item p:first-child {
            color: #ffce1b;
        }
    </style>
</head>
<body>
<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5;">
    <a href="/" class="mui-icon mui-icon-left-nav mui-pull-left"></a>

    <h1 class="mui-title">排行榜</h1>
</header>
<div style="top: 44px;z-index: 50;position: fixed"
     class="mui-segmented-control mui-segmented-control-inverted mui-segmented-control-primary my-tabs">
    <a class="mui-control-item mui-active" id="income">
        总排行
    </a>
</div>
<div class="mui-content">
    <div class="mui-scroll-wrapper" >
        <div class="mui-scroll" style="top:85px;padding-bottom: 70px">
            <ul class="phb-box">
                <?php foreach($list as $key=>$val): ?>
                <div class="mui-row phb-list">
                    <div class="mui-col-xs-7 mui-col-sm-7 phb-list-item">
                        <?php if($key < 3): ?>
                            <img class="top-icon" src="/static/img/top<?php echo htmlentities($key+1); ?>.png">
                            <?php else: ?>
                            <span><?php echo htmlentities($key+1); ?></span>
                        <?php endif; ?>
                        <img class="top-header" src="<?php echo !empty($val->avatar) ? htmlentities($val->avatar) :  '/static/img/headphoto.png'; ?>">
                        <span class="nick_name"><?php echo htmlentities($val->nick_name); ?></span>
                    </div>
                    <div class="mui-col-xs-5 mui-col-sm-5 phb-list-item" style="text-align: center">
                        <p><?php echo htmlentities($val->product_rate); ?> kb/s</p>

                        <p>总的开采率</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
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
	

</html>