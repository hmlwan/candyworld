<?php /*a:3:{s:68:"/www/wwwroot/www.wscorps.cn/application/index/view/trade/finish.html";i:1529152136;s:67:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/head.html";i:1523246924;s:69:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/footer.html";i:1523246924;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>交易</title>
    
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
    </style>
</head>
<body>
<header class="mui-bar mui-bar-nav my-header">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo url('member/index'); ?>"></a>

    <h1 id="title" class="mui-title">交易</h1>
</header>

<div style="top: 44px;z-index: 50;"
     class="mui-segmented-control mui-segmented-control-inverted mui-segmented-control-primary my-tabs">
    <a class="mui-control-item " href="<?php echo url('trade/buy'); ?>">
        买入
    </a>
    <a class="mui-control-item " href="<?php echo url('trade/sale'); ?>">
        卖出
    </a>
    <a class="mui-control-item " href="<?php echo url('trade/index'); ?>">
        交易中
    </a>
    <a class="mui-control-item mui-active">
        已完成
    </a>
</div>
<div class="mui-content">
    <div class="mui-scroll-wrapper">
        <div class="mui-scroll">
            <div class="mui-table-view my-list"  style="top: 85px;">
                <?php foreach($list as $order): ?>
                <ul class="my-list-item">
                    <li class="clear">
                        <span class="left">
                            <span>编号:</span>
                            <span class="value"><?php echo htmlentities($order['order_number']); ?></span>
                        </span>
                        <span class="right">
                            <?php if($order['is_comment'] == 1): ?>
                                已评论
                                <?php else: ?>
                                未评论
                            <?php endif; ?>
                        </span>
                    </li>
                    <li class="clear">
                        <span class="left">
                            <span>类型:</span>
                            <span class="value">
                                <?php if(($order['types'] == 1 && $order['user_id'] == $ownId) || ($order['types'] == 2 && $order['target_user_id'] == $ownId)): ?>
                                    买入交易
                                <?php endif; if(($order['types'] == 2 && $order['user_id'] == $ownId) || ($order['types'] == 1 && $order['target_user_id'] == $ownId)): ?>
                                    出售
                                <?php endif; ?>
                            </span>
                        </span>
                    </li>
                    <li class="clear">
                        <span class="left">
                            <span>数量:</span>
                            <span class="value"><?php echo htmlentities($order['number']); ?> 糖果</span>
                        </span>
                    </li>
                    <li class="clear">
                        <span class="left">
                            <span>单价:</span>
                            <span class="value"><?php echo htmlentities($order['price']); ?> $</span>
                        </span>
                    </li>
                    <li class="clear">
                        <span class="left">
                            <span>总价:</span>
                            <span class="value">
                                <?php echo htmlentities($order['total_price']); ?> $
                                <strong style="color: #ffce1b;margin-left: 10px"><?php echo htmlentities($order['total_price_china']); ?>
                                    CNY</strong>
                            </span>
                        </span>
                    </li>
                    <li class="clear">
                        <span class="left">
                            <span>时间:</span>
                            <span class="value"><?php echo date('Y-m-d H:i:s',$order['finish_time']); ?></span>
                        </span>
                        <span class="right">
                            <a href="<?php echo url('trade/fdetail',['id'=>$order['id']]); ?>"
                               class="trade-btn">详细</a>
                        </span>
                    </li>
                </ul>
                <?php endforeach; if(empty($list)): ?>
                <div>
                    <img class="noneview" src="/static/img/noneview.png">
                </div>
                <?php endif; ?>
            </div>

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