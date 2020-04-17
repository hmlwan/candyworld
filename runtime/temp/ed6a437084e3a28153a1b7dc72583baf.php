<?php /*a:3:{s:68:"/www/wwwroot/mojing/application/index/view/member/certification.html";i:1529210188;s:59:"/www/wwwroot/mojing/application/index/view/layout/head.html";i:1523304526;s:61:"/www/wwwroot/mojing/application/index/view/layout/footer.html";i:1523304526;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>实名认证</title>
    <!--head-->
    
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<link href="/static/css/mui.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/static/css/mui.loading.css"/>
<link rel="stylesheet" href="/static/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/static/css/swiper-4.2.0.min.css"/>
<script src="/static/js/mui.min.js"></script></head>
<body>
<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5">
    <a href="/index/member/set" class="mui-icon mui-icon-left-nav mui-pull-left"></a>

    <h1 id="title" class="mui-title">实名认证</h1>
</header>
<div class="mui-content container">
        <div class="mui-input-row my-input-row">
            <label>姓名</label>
            <input type="text" id="real_name" class="mui-input" <?php if($list->is_certification == 1): ?>readonly<?php endif; ?> placeholder="请输入姓名" name="real_name" value="<?php echo htmlentities($list->real_name); ?>">
        </div>
        <div class="mui-input-row my-input-row">
            <label>身份证</label>
            <input type="text" id="card_id" class="mui-input" <?php if($list->is_certification == 1): ?>readonly<?php endif; ?> placeholder="请输入身份证" name="card_id" value="<?php echo htmlentities($list->card_id); ?>">
        </div>
        <p class="my-p" style="padding: 10px;">
            注:IUK团队重视保障用户的个人信息，用户的个<br>人信息将被严格保密。<br>
            此实名认证系统仅限于IUK团队认证身份信息，保<br>
            证不对外公开或向第三方提供用户个人信息。
        </p>
        <?php if($list->is_certification == 2): ?>
        <p class="my-p" style="padding: 10px;">
            认证失败原因：<?php echo htmlentities($list->certification_fail); ?>
        </p>
        <?php endif; ?>
    <button type="submit" class="mui-btn mui-btn-warning my-btn" style="background-color: #17c3e5;border-color: #17c3e5" id="next">下一步</button>
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
    $("#next").click(function(){
        var real_name = $("#real_name").val();
        var card_id = $("#card_id").val();
        if(!card_id || !real_name)
        {
            mui.alert("姓名和身份证号不能为空！！");
        }
        window.location.href = "/index/member/lastreal?card_id="+card_id+"&real_name="+real_name;
    })
</script>
</html>