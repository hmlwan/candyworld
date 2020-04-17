<?php /*a:4:{s:47:"F:\1000\application\index\view\index\index.html";i:1562903967;s:47:"F:\1000\application\index\view\layout\head.html";i:1523246924;s:46:"F:\1000\application\index\view\layout\nav.html";i:1529332964;s:49:"F:\1000\application\index\view\layout\footer.html";i:1523246924;}*/ ?>
<html id="register">
<head>
    <meta charset="utf-8">
    <title>数字资产</title>
    
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
<div class="mui-content" style="padding-bottom: 70px">
    <div class="mui-scroll-wrapper">
        <div class="mui-scroll">
            <div class="mui-slider">
                <div class="mui-slider-group mui-slider-loop">
                    <!--支持循环，需要重复图片节点-->
                    <?php foreach($sl as $key=>$c): ?>
                    <div class="mui-slider-item mui-slider-item-duplicate"><a href="<?php echo htmlentities($c['url']); ?>"><img src="<?php echo htmlentities($c['img']); ?>"/></a>
                    </div>
                    <?php endforeach; ?>
                   
                </div>
            </div>
            <div class="white-box mui-row index-item">
                <a href="/index/index/task">
                <div class="mui-col-xs-4 mui-col-sm-4 index-item-list" style="padding-right: 10px" >
                    <div   class="index-item-list-div  my-tips" style="background: url(/static/img/dh.png) no-repeat;background-size: cover;">
                        晶盒任务
                    </div></a>
                </div>
                <div class="mui-col-xs-4 mui-col-sm-4 index-item-list" style="padding-left: 5px;padding-right: 5px">
                    <div href="javascript:void(0)" data-msg="开发中，敬请期待" class="index-item-list-div  my-tips" style="background: url(/static/img/fjsj.png)  no-repeat;background-size: cover;">
                        附近商家
                    </div>
                </div>
                <div class="mui-col-xs-4 mui-col-sm-4 index-item-list" style="padding-left: 10px">
                    <div onclick="jump('/index/index/phb')" class="index-item-list-div" style="background: url(/static/img/phb.png)  no-repeat;background-size: cover;">
                        排行榜
                    </div>
                </div>
                <div class="mui-col-xs-4 mui-col-sm-4 index-item-list" style="padding-right: 10px" >
                    <div href="javascript:void(0)" data-msg="开发中，敬请期待" class="index-item-list-div  my-tips" style="background: url(/static/img/jzyl.png)  no-repeat;background-size: cover;">
                        捐赠有礼
                    </div>
                </div>
                <div class="mui-col-xs-4 mui-col-sm-4 index-item-list" style="padding-left: 5px;padding-right: 5px">
                    <div href="javascript:void(0)" data-msg="开发中，敬请期待" class="index-item-list-div  my-tips" style="background: url(/static/img/lljh.png)  no-repeat;background-size: cover;">
                        晶石计划
                    </div>
                </div>
                <div class="mui-col-xs-4 mui-col-sm-4 index-item-list" style="padding-left: 10px">
                    <div href="javascript:void(0)" data-msg="开发中，敬请期待" class="index-item-list-div  my-tips" style="background: url(/static/img/llb.png)  no-repeat;background-size: cover;">
                        晶石钱包
                    </div>
                </div>
            </div>
            <div class="white-box notice-box" style="margin-bottom: 100px">
                <div class="header">
                    公告
                </div>
                <ul class="mui-table-view content" style="margin-top: 10px;">
                    <?php foreach($list as $c): ?>
                    <li class="mui-table-view-cell mui-media gg">
                        <a href="/index/index/articleinfo?articleId=<?php echo htmlentities($c->article_id); ?>">
                            <img class="mui-media-object mui-pull-left" src="/static/img/logo.png">
                            <div class="mui-media-body">
                                <?php echo htmlentities($c->title); ?>
                                <p class='mui-ellipsis'><?php echo htmlentities($c->create_time); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

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
	
<script type="text/javascript">
    var gallery = mui('.mui-slider');
    gallery.slider({
        interval: 3000//自动轮播周期，若为0则不自动播放，默认为0；
    });
    mui('.mui-scroll-wrapper').scroll({
        deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
    });
</script>

</html>