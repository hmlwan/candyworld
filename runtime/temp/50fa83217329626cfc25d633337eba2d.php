<?php /*a:3:{s:62:"/www/wwwroot/mojing/application/index/view/member/message.html";i:1523388146;s:59:"/www/wwwroot/mojing/application/index/view/layout/head.html";i:1523304526;s:61:"/www/wwwroot/mojing/application/index/view/layout/footer.html";i:1523304526;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>客服</title>
    
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
    .cont {
        background: white;
        height: auto;
    }

    .ter {
        background: white;
        height: auto;
    }
</style>
<body>
<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5">
    <a href="/index/member/index" class="mui-icon mui-icon-left-nav mui-pull-left"
       ></a>
    <h1 id="title" class="mui-title">客服</h1>
</header>
<div class="mui-content cont" >
    <p style="padding: 10px;background: #f7f7f7">问题留言</p>
    <form action="<?php echo url('member/submitMsg'); ?>" style="height: 170px;padding: 0" method="post" onsubmit="return false" id="submitForm">
        <textarea style="color:grey;border: none;height: 100px" name="content" id="content" placeholder="请您输入您的问题，我们将尽快回复您"></textarea>
        <button data-form="submitForm" onclick="ajaxPost(this)" type="submit"
                style="width: 25%;height: 30px;border: none;background: #ffd21f;float: right;margin-right: 10px">提交
        </button>
    </form>
    <?php foreach($list as $list): ?>
    <div style="text-align: center;color: gray;background: #f7f7f7;padding: 10px">
        <?php echo htmlentities($list->getCreateTime()); ?>
    </div>
    <div class="mui-table-view ter">
        <div class="mui-table-view-cell mui-media">

            <a href="javascript:;">
                <?php if($list->avatar): ?>
                    <img class="mui-media-object mui-pull-left" src="<?php echo htmlentities($list->avatar); ?>" style="width: 20%;">
                    <?php else: ?>
                    <img class="mui-media-object mui-pull-left" src="/static/img/headphoto.png" style="width: 20%;">
                <?php endif; ?>
                <div class="mui-media-body" style="color: #8f8f94;margin-top: 2px;">
                    <?php echo htmlentities($list->nick_name); ?>
                    <p class='mui-ellipsis' style="margin-top: 5px;"><?php echo htmlentities($list->content); ?></p>
                </div>
            </a>

        </div>
    </div>
    <?php endforeach; ?>
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
	
</body>
</html>