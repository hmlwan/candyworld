<?php /*a:3:{s:51:"I:\1000\application\index\view\member\magicbox.html";i:1529158777;s:47:"I:\1000\application\index\view\layout\head.html";i:1523246924;s:49:"I:\1000\application\index\view\layout\footer.html";i:1523246924;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的晶盒</title>
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
		<header class="mui-bar mui-bar-nav  my-header" style="background-color: #17c3e5">
			<a href="/index/member/index" class="mui-icon mui-icon-left-nav mui-pull-left" style="color: black;"></a>
			<h1 id="title" class="mui-title">我的晶盒</h1>
		</header>
		<div class="mui-content">
			<?php foreach($magicList as $list): ?>
			<div class="mohe-list">
				<div class="mohe-list-img">
					<img src="<?php echo htmlentities($list->image_url); ?>">
				</div>
				<div class="mohe-list-content">
					<p><span>名称:</span><span><?php echo htmlentities($list->product_name); ?></span></p>
					<p><span>价格:</span><span><?php echo htmlentities($list->price); ?></span></p>
					<p><span>周期:</span><span><?php echo htmlentities($list->period); ?>天</span></p>
					<p><span>开采率:</span><span><?php echo number_format($list->rate_min, 3); ?>kb/s-<?php echo number_format($list->rate_max, 3); ?>kb/s</span></p>
					<p><span>日产量:</span><span><?php echo htmlentities($list->yield_min); ?>-<?php echo htmlentities($list->yield_max); ?>糖果</span></p>
					<p><span>购买时间:</span><span><?php echo htmlentities($list->getBuyTime()); ?></span></p>
					<p><span>状态:</span><span><?php if($list->status == 1): ?>运行中<?php else: ?>已过期<?php endif; ?></span></p>
				</div>
			</div>
			<?php endforeach; ?>
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