<?php /*a:3:{s:48:"F:\1000\application\index\view\member\union.html";i:1523330544;s:47:"F:\1000\application\index\view\layout\head.html";i:1523246924;s:49:"F:\1000\application\index\view\layout\footer.html";i:1523246924;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>联盟</title>
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
    <a href="/index/member/index" class="mui-icon mui-icon-left-nav mui-pull-left" ></a>
    <h1 id="title" class="mui-title">联盟</h1>
</header>
<div class="mui-content">
    <div class="lianmeng-info mui-row">
        <div class="mui-col-sm-4 mui-col-xs-4">
            <?php if($list->avatar): ?>
            <img class="header" src="<?php echo htmlentities($list->avatar); ?>">
            <?php else: ?>

            <img class="header" src="/static/image/headphoto.jpg">
            <?php endif; ?>
            <div class="chengyuan">
                成员
            </div>
        </div>
        <div class="mui-col-sm-6 mui-col-xs-6" style="padding-top: 15px">
            <h3 style="color: #fff"><?php echo htmlentities($list->nick_name); ?></h3>
            <p style="margin: 10px 0 0 0;color: #fff">开采人数：<?php echo htmlentities($list->getTeamInfo()['total']); ?></p>
            <p style="color: #fff">团队算力：<?php echo htmlentities($list->getTeamInfo()['rate']); ?>GH/H</p>
        </div>
        <div class="mui-col-sm-2 mui-col-xs-2" style="position: relative;height: 140px">
            <!--<div class="detail">
                详细
            </div>-->
        </div>
    </div>
    <div class="mui-scroll-wrapper" style="top:184px" >
        <div class="mui-scroll" >
            <div class="mui-table-view my-list" style="top:0;margin-top: 10px">
                <?php foreach($userList as $userList): ?>
                <ul class="my-list-item mui-row">
                    <div class="mui-col-sm-2 mui-col-xs-2">
                        <?php if($userList->avatar): ?>
                        <img style="width: 100%;border-radius: 50%;max-height: 60px"  src="<?php echo htmlentities($userList->avatar); ?>">
                        <?php else: ?>
                        <img style="width: 100%;border-radius: 50%;max-height: 60px"  src="/static/image/headphoto.jpg">
                        <?php endif; ?>

                    </div>
                    <div class="mui-col-sm-10 mui-col-xs-10" style="padding:20px 0 10px 20px">
                        <li class="clear">
                            <span class="left">
                                <span>昵称:</span>
                                <span class="value"><?php echo htmlentities($userList->nick_name); ?></span>
                            </span>
                        </li>
                        <li class="clear">
                            <span class="left">
                                <span>算力:</span>
                                <span class="value"><?php echo htmlentities($userList->product_rate); ?>GH/H</span>
                            </span>
                        </li>
                        <li class="clear">
                            <span class="left">
                                <span>团队算力:</span>
                                <span class="value"><?php echo htmlentities($userList->getTeamInfo()['rate']); ?>GH/H</span>
                            </span>
                        </li>
                        <li class="clear">
                            <span class="left">
                                <span>开采人数:</span>
                                <span class="value"><?php echo htmlentities($userList->getTeamInfo()['total']); ?></span>
                            </span>
                        </li>
                        <li class="clear">
                            <span class="left">
                                <span>注册时间:</span>
                                <span class="value"><?php echo htmlentities($userList->register_time); ?></span>
                            </span>
                        </li>
                    </div>
                </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--footer-->
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
	
<!--js-->
<script>
    mui('.mui-scroll-wrapper').scroll({
        deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
    });
</script>
</body>
</html>