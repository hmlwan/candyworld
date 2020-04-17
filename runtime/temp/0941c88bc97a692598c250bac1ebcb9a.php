<?php /*a:3:{s:47:"F:\1000\application\index\view\index\tasks.html";i:1562905693;s:47:"F:\1000\application\index\view\layout\head.html";i:1523246924;s:49:"F:\1000\application\index\view\layout\footer.html";i:1523246924;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>晶盒任务</title>
    
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<link href="/static/css/mui.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/static/css/mui.loading.css"/>
<link rel="stylesheet" href="/static/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/static/css/swiper-4.2.0.min.css"/>
<script src="/static/js/mui.min.js"></script>
    <script>
 window.onbeforeunload = function(){
        return false; // This will stop the redirecting.
    }
    </script>
</head>
<style type="text/css">
    .font {
        width: 72%;
        height: auto;
        margin: 0 auto;
    }
</style>
<body style="background:white;">
<header class="mui-bar mui-bar-nav my-header"  style="background-color: #17c3e5;">
    <a href="/index/index/index" class="mui-icon mui-icon-left-nav mui-pull-left"></a>

    <h1 id="title" class="mui-title">晶盒任务</h1>
</header>
<div class="mui-content" style="padding-bottom: 70px">
    <iframe src="https://m.toutiao.com/?w2atif=1&channel=__all__#channel=__all__" style="width:100%;height:700px" frameborder="0"  id="external-frame" onload="setIframeHeight(this)" security="restricted" sandbox=""></iframe>		
</div>
<script>
	
setInterval(()=>{

  var h =document.body.clientHeight;
 // document.querySelector('iframe').height =h;



}, 200);

</script>
<script>
    window.onbeforeunload = function(){
        return false; // This will stop the redirecting.
    }
</script>
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