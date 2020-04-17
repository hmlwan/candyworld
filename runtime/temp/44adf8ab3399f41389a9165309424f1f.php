<?php /*a:3:{s:69:"/www/wwwroot/www.wscorps.cn/application/index/view/trade/fdetail.html";i:1529152136;s:67:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/head.html";i:1523246924;s:69:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/footer.html";i:1523246924;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>交易详细</title>
    
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<link href="/static/css/mui.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/static/css/mui.loading.css"/>
<link rel="stylesheet" href="/static/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/static/css/swiper-4.2.0.min.css"/>
<script src="/static/js/mui.min.js"></script>
    <style>
        .trade-btn {
            background: #ffce1b;
            color: #fff;
            padding: 10px;
            border: 1px solid #ffce1b;
            margin: 0;
        }

        #star {
            position: relative;
            width: 600px;
            margin: 20px auto;
            height: 24px;
        }

        #star ul, #star span {
            float: left;
            display: inline;
            height: 19px;
            line-height: 19px;
        }

        #star ul {
            margin: 0 10px;
        }

        #star li {
            float: left;
            width: 24px;
            cursor: pointer;
            text-indent: -9999px;
            background: url(/static/img/star.png) no-repeat;
        }

        #star strong {
            color: #f60;
            padding-left: 10px;
        }

        #star li.on {
            background-position: 0 -28px;
        }

        #star p {
            position: absolute;
            top: 20px;
            width: 159px;
            height: 60px;
            display: none;
            background: url(/static/img/icon.gif) no-repeat;
            padding: 7px 10px 0;
        }

        #star p em {
            color: #f60;
            display: block;
            font-style: normal;
        }
    </style>
</head>
<body>
<header class="mui-bar mui-bar-nav my-header">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo url('trade/finish'); ?>"></a>

    <h1 id="title" class="mui-title">交易详细</h1>
</header>
<div class="mui-content">
    <img style="width: 85px;height: 85px;display: block;margin: 20px auto 20px;border-radius: 50%"
         src="<?php echo !empty($userInfo->avatar) ? htmlentities($userInfo->avatar) :  '/static/img/headphoto.png'; ?>">

    <div style="z-index: 2;"
         class="mui-segmented-control mui-segmented-control-inverted mui-segmented-control-primary my-tabs">
        <a class="mui-control-item mui-active" href="#item1">
            基本信息
        </a>
        <a class="mui-control-item" href="#item2">
            银行卡
        </a>
        <a class="mui-control-item" href="#item3">
            支付宝
        </a>
        <a class="mui-control-item" href="#item4">
            微信
        </a>
        <?php if($order->is_comment == 0 && $order->target_user_id = $ownId): ?>
        <a class="mui-control-item" href="#item5">
            评论
        </a>
        <?php endif; ?>
    </div>
    <div class="mui-table-view mui-control-content my-list mui-active" id="item1" >
        <ul class="my-list-item">
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>编 号:</span>
                            <span class="value"><?php echo htmlentities($order->order_number); ?></span>
                        </span>
                        <span class="right">
                            <?php if($order['is_comment'] == 1): ?>
                                已评论
                                <?php else: ?>
                                未评论
                            <?php endif; ?>
                        </span>
            </li>
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>电话:</span>
                            <span class="value"><?php echo htmlentities($userInfo->mobile); ?></span>
                        </span>
            </li>
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>数 量:</span>
                            <span class="value"><?php echo htmlentities($order->number); ?> 糖果</span>
                        </span>
            </li>
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>单 价:</span>
                            <span class="value"><?php echo htmlentities($order->price); ?> $</span>
                        </span>
            </li>
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>总价:</span>
                            <span class="value">
                            <?php echo htmlentities($order['total_price']); ?> $
                            <strong style="color: #ffce1b;margin-left: 10px"><?php echo htmlentities($order['total_price_china']); ?> CNY</strong>
                            </span>
                        </span>

            </li>
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>时 间:</span>
                            <span class="value"><?php echo date('Y-m-d H:i:s',$order['match_time']); ?></span>
                        </span>
            </li>
        </ul>
        <div class="white-box mui-row" style="padding: 10px">
            <div class="mui-col-xs-3 mui-col-sm-3" style="line-height: 200px">
                转账截图
            </div>
            <div class="mui-col-xs-9 mui-col-sm-9">
                <img data-preview-src="" data-preview-group="1" id="order-image"
                     style="width: 60%;max-height: 200px;border: 1px solid #ddd" src="<?php echo htmlentities($order->image); ?>">
            </div>
        </div>
    </div>
    <div class="mui-table-view mui-control-content my-list" id="item2" >
        <ul class="my-list-item">
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>姓名:</span>
                            <span class="value"><?php echo htmlentities($userInfo->real_name); ?></span>
                        </span>
            </li>
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>开户行:</span>
                            <span class="value"><?php echo htmlentities($userInfo->card_name); ?></span>
                        </span>
            </li>
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>银行卡:</span>
                            <span class="value"><?php echo htmlentities($userInfo->card); ?></span>
                        </span>
            </li>
        </ul>
    </div>
    <div class="mui-table-view mui-control-content my-list" id="item3" >
        <ul class="my-list-item">
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>支付宝:</span>
                            <span class="value"><?php echo htmlentities($userInfo->zfb); ?></span>
                        </span>
            </li>
            <?php if($userInfo->zfb_image_url): ?>
            <li class="clear mg-d-sm">
                            <span class="left">
                                <span>二维码:</span>
                                <img src="<?php echo htmlentities($userInfo->zfb_image_url); ?>">
                            </span>
            </li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="mui-table-view mui-control-content my-list" id="item4" >
        <ul class="my-list-item">
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>微信:</span>
                            <span class="value"><?php echo htmlentities($userInfo->wx); ?></span>
                        </span>
            </li>
            <?php if($userInfo->wx_image_url): ?>
            <li class="clear mg-d-sm">
                            <span class="left">
                                <span>二维码:</span>
                                <img src="<?php echo htmlentities($userInfo->wx_image_url); ?>">
                            </span>
            </li>
            <?php endif; ?>
        </ul>
    </div>
    <?php if($order->is_comment == 0 && $order->target_user_id = $ownId): ?>
    <div class="mui-table-view mui-control-content my-list" id="item5" >
        <div class="white-box " style="padding: 10px;margin-top:10px">
            <li class="clear mg-d-sm">
                <div id="star">
                    <span>评论:</span>
                    <ul>
                        <li><a href="javascript:;">1</a></li>
                        <li><a href="javascript:;">2</a></li>
                        <li><a href="javascript:;">3</a></li>
                        <li><a href="javascript:;">4</a></li>
                        <li><a href="javascript:;">5</a></li>
                    </ul>
                </div>
            </li>
        </div>
        <button class="mui-btn-block my-btn-block" style="margin-top: 15px" data-url="<?php echo url('trade/comment'); ?>"
                data-id="<?php echo htmlentities($order->id); ?>" onclick="comment(this)">提交评论
        </button>
    </div>
    <?php endif; ?>
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
	
<script>
    var point = 0;
    window.onload = function () {

        var oStar = document.getElementById("star");
        var aLi = oStar.getElementsByTagName("li");
        var oUl = oStar.getElementsByTagName("ul")[0];
        var i = iScore = iStar = 0;


        for (i = 1; i <= aLi.length; i++) {
            aLi[i - 1].index = i;

            //鼠标移过显示分数
            aLi[i - 1].onmouseover = function () {
                fnPoint(this.index);

            };

            //鼠标离开后恢复上次评分
            aLi[i - 1].onmouseout = function () {
                fnPoint();
            };

            //点击后进行评分处理
            aLi[i - 1].onclick = function () {
                iStar = this.index;
                //console.log(iStar)
                point = iStar;
            }
        }

        //评分处理
        function fnPoint(iArg) {
            //分数赋值
            iScore = iArg || iStar;
            for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";
        }

    };
</script>
<script>
    function comment(e) {
        var orderId = $(e).attr('data-id');
        var url = $(e).attr('data-url');
        mui.showLoading();
        $.post(url, {orderId: orderId, point: point}, function (data) {
            mui.hideLoading();
            if (data.code == 0) {
                mui.alert(data.message, function () {
                    window.location.reload();
                })
            } else {
                mui.alert(data.message)
            }

        }, 'json')
    }
</script>

</html>