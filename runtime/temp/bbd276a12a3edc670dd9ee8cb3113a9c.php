<?php /*a:3:{s:59:"/www/wwwroot/mojing/application/index/view/member/card.html";i:1523388146;s:59:"/www/wwwroot/mojing/application/index/view/layout/head.html";i:1523304526;s:61:"/www/wwwroot/mojing/application/index/view/layout/footer.html";i:1523304526;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>绑定银行卡</title>
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
<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5">
    <a href="/index/member/set" class="mui-icon mui-icon-left-nav mui-pull-left"></a>

    <h1 id="title" class="mui-title">银行卡</h1>
</header>
<div class="mui-content container">
    <form class="mui-input-group" action="<?php echo url('member/updateUser'); ?>" method="post" onsubmit="return false" id="submitForm">
        <div class="mui-input-row my-input-row">
            <label>账号</label>
            <input type="text" <?php if($list->is_certification == 1): ?>readonly<?php endif; ?> class="mui-input" placeholder="请输入账号" name="card" value="<?php echo htmlentities($list->card); ?>">
        </div>
        <div class="mui-input-row my-input-row">
            <label>开户行</label>
            <input type="text" <?php if($list->is_certification == 1): ?>readonly<?php endif; ?> class="mui-input" placeholder="请输入开户行" name="card_name" value="<?php echo htmlentities($list->card_name); ?>">
        </div>
    </form>
    <?php if($list->is_certification != 1): ?>
    <button data-form="submitForm" onclick="ajaxPost(this)" type="submit" class="mui-btn mui-btn-warning my-btn" >
    确定</button>
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
	
</html>