<?php /*a:3:{s:68:"/www/wwwroot/www.wscorps.cn/application/index/view/trade/detail.html";i:1529152136;s:67:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/head.html";i:1523246924;s:69:"/www/wwwroot/www.wscorps.cn/application/index/view/layout/footer.html";i:1523246924;}*/ ?>
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
    </style>
</head>
<body>

<div class="mui-content">
    <header class="mui-bar mui-bar-nav my-header">
        <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo url('trade/index'); ?>"></a>

        <h1 id="title" class="mui-title">交易详细</h1>
    </header>
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
    </div>
    <div class="mui-table-view mui-control-content my-list mui-active" id="item1" >
        <ul class="my-list-item">
            <li class="clear mg-d-sm">
                        <span class="left">
                            <span>编 号:</span>
                            <span class="value"><?php echo htmlentities($order->order_number); ?></span>
                        </span>
                        <span class="right">
                                <?php if($order['status'] == 2): ?>等待付款<?php endif; if($order['status'] == 3): ?>等待收款<?php endif; ?>
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
        <?php if($type == 'pay'): ?>
        <div class=" mui-row" style="padding: 10px">
            <?php if($order->status == 2): ?>
            <button type="button" onclick="selectFile()" class="mui-btn mui-btn-success mui-btn-outlined">
                <?php if(empty($order->image)): ?>
                上传凭据
                <?php else: ?>
                重新上传
                <?php endif; ?>
            </button>
            <input type="file" id="image_file" data-url="<?php echo url('upload/order'); ?>" data-id="<?php echo htmlentities($order->id); ?>"
                   style="display: none" onchange="uploadImage(this)" name="image">
            <button data-url="<?php echo url('trade/pay'); ?>" data-id="<?php echo htmlentities($order->id); ?>" onclick="confrimPay(this)"
                    type="button" <?php if(empty($order->image)): ?> style="display:none" <?php endif; ?>class="mui-btn
                mui-btn-warning mui-btn-outlined">确认付款
            </button>

            <button type="button" onclick="cancelPay(this)" data-url="<?php echo url('trade/cancelTrade'); ?>"
                    data-id="<?php echo htmlentities($order->id); ?>" class="mui-btn mui-btn-danger mui-btn-outlined">取消交易
            </button>
            <?php endif; ?>
        </div>
        <?php endif; if($type == 'confirm'): ?>
        <div class=" mui-row" style="padding: 10px">
            <?php if($order->status == 3): ?>
            <button data-url="<?php echo url('trade/confirm'); ?>" data-id="<?php echo htmlentities($order->id); ?>" onclick="confrimFinish(this)"
                    type="button" class="mui-btn mui-btn-warning mui-btn-outlined">确认已收款
            </button>
            <?php endif; if($order->status == 2): ?>
            <button type="button" onclick="cancelPay(this)" data-url="<?php echo url('trade/cancelTrade'); ?>"
                    data-id="<?php echo htmlentities($order->id); ?>" class="mui-btn mui-btn-danger mui-btn-outlined">取消交易
            </button>
            <?php endif; ?>
        </div>
        <?php endif; ?>
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
    function selectFile() {
        $("#image_file").click();
    }

    function uploadImage(target) {
        var $this = $(target);
        var url = $this.attr('data-url');
        var file = target.files[0];
        var orderId = $this.attr('data-id');
        if (file.length == 0) {
            mui.alert('请选择需要上传的图片');
            return false;
        }
        var data = new FormData();
        data.append('image', file);
        data.append('orderId', orderId);
        mui.showLoading('上传中...', 'div')
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            processData: false,  // 告诉jQuery不要去处理发送的数据
            contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
            dataType: 'json',
            success: function (response) {
                mui.hideLoading()
                if (response.code == 0) {
                    $("#order-image").attr('src', response.url);
                    $this.next().show();
                    $this.prev().html('重新上传')
                } else {
                    mui.alert(response.message);
                }
            }
        })
    }

    function cancelPay(e) {
        var orderId = $(e).attr('data-id');
        var url = $(e).attr('data-url');
        mui.confirm("你确定要取消交易吗?", '', ['取消', '确定'], function (e) {
            if (e.index == 1) {
                mui.showLoading();
                $.post(url, {orderId: orderId}, function (data) {
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
        })
    }

    function confrimPay(e) {
        var orderId = $(e).attr('data-id');
        var url = $(e).attr('data-url');
        mui.confirm("你确定你要已打款并上传打款截图吗?", '', ['取消', '确定'], function (e) {
            if (e.index == 1) {
                mui.showLoading();
                $.post(url, {orderId: orderId}, function (data) {
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
        })
    }
    function confrimFinish(e) {
        var orderId = $(e).attr('data-id');
        var url = $(e).attr('data-url');
        mui.confirm("你确定你已收款吗?", '', ['取消', '确定'], function (e) {
            if (e.index == 1) {
                mui.showLoading();
                $.post(url, {orderId: orderId}, function (data) {
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
        })
    }
</script>
</html>