<?php /*a:3:{s:46:"F:\1000\application\index\view\index\task.html";i:1562905236;s:47:"F:\1000\application\index\view\layout\head.html";i:1523246924;s:49:"F:\1000\application\index\view\layout\footer.html";i:1523246924;}*/ ?>
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
    <div class="mui-scroll-wrapper">
        <div class="mui-scroll" >
            <div class="mui-slider" style="    margin-top: 10.5%;">
                <div class="mui-slider-group mui-slider-loop">
                    <!--支持循环，需要重复图片节点-->
                    <?php foreach($sl as $key=>$c): ?>
                    <div class="mui-slider-item mui-slider-item-duplicate"><a href="<?php echo htmlentities($c['url']); ?>"><img src="<?php echo htmlentities($c['img']); ?>"/></a>
                    </div>
                    <?php endforeach; ?>
                   
                </div>
            </div>
           
            <div class="white-box mui-row index-item">
                 <p style="font-weight: bold;
    color: #f0ad4e;">今日浏览: 1分钟</p>
<style type="text/css">
    html, body { color:#222; font-family:Microsoft YaHei, Helvitica, Verdana, Tohoma, Arial, san-serif; margin:0; padding: 0; text-decoration: none; }
    img { border:0; }
    ul { list-style: none outside none; margin:0; padding: 0; }
    body {
        background-color:#eee; 
    }
    body .mainmenu:after { clear: both; content: " "; display: block; }

    body .mainmenu li{ 
        float:left;
        margin-left: 2.5%;
        margin-top: 2.5%;
        width: 30%;  
        border-radius:3px; 
        overflow:hidden;
    }

    body .mainmenu li a{ display:block;  color:#FFF;   text-align:center }
    body .mainmenu li a b{ 
        display:block; height:80px;
    }
    body .mainmenu li a img{ 
        margin: 15px auto 15px;
        height: 50px;
    }

    body .mainmenu li a span{ display:block; height:30px; line-height:30px;background-color:#FFF; color: #999; font-size:14px; }


</style>

             <ul class="mainmenu">
                 <?php foreach($list as $key=>$c): ?>
                <li><a href="/index/index/tasks" ><b><img src="<?php echo htmlentities($c['imgs']); ?>" /></b><span><?php echo htmlentities($c['types']); ?></span></a></li>
                   <?php endforeach; ?>     
            </ul>
               
                
             
              
            </div>
            
        </div>
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
	
<script type="text/javascript">
    var gallery = mui('.mui-slider');
    gallery.slider({
        interval: 3000//自动轮播周期，若为0则不自动播放，默认为0；
    });
    mui('.mui-scroll-wrapper').scroll({
        deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
    });
</script>
</body>
</html>