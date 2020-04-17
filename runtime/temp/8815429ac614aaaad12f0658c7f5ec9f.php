<?php /*a:3:{s:58:"/www/wwwroot/mojing/application/index/view/member/zfb.html";i:1523388468;s:59:"/www/wwwroot/mojing/application/index/view/layout/head.html";i:1523304526;s:61:"/www/wwwroot/mojing/application/index/view/layout/footer.html";i:1523304526;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>绑定支付宝</title>
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

    <h1 id="title" class="mui-title">支付宝</h1>
</header>
<div class="mui-content container setting">
    <form class="mui-input-group" action="<?php echo url('member/updateUser'); ?>" method="post" onsubmit="return false" id="submitForm">
        <div class="mui-input-row my-input-row">
            <label>账号</label>
            <input type="text" class="mui-input" placeholder="请输入支付宝账号" name="zfb" value="<?php echo htmlentities($list->zfb); ?>">
        </div>
        <input type="hidden" class="mui-input" id="zfb_image_url" name="zfb_image_url" value="<?php echo htmlentities($list->zfb_image_url); ?>">
        <div class="mui-input-row my-input-row  upload">
            <img class="left" style="" src="/static/img/zfb.png">
            <span class="left">上传支付宝二维码</span>
        </div>
        <div class="white-box" style="padding: 10px;">
            <?php if($list->zfb_image_url): ?>
				<img id="show" class="uploadFile" style="width: 100px;display: block;margin: auto;" src="<?php echo htmlentities($list->zfb_image_url); ?>">
				<?php else: ?>
				<img id="show" class="uploadFile" style="width: 100px;display: block;margin: auto;" src="/static/img/tj.png">
			<?php endif; ?>
        </div>
        <input type="file" id="file" name="zfb_image_url" style="display: none;">
    </form>
    <button data-form="submitForm" style="background-color: #17c3e5;border-color: #17c3e5" onclick="ajaxPost(this)"  type="submit" class="mui-btn mui-btn-warning my-btn" >确定</button>
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
	
<script type="text/javascript">
    mui.init()
    mui.previewImage();
    mui('.mui-scroll-wrapper').scroll({
        deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
    });
    $(".uploadFile").click(function(){
		$("#file").click();
	})
	$("#file").change(function(){
		var $this = $(this);
		var file = this.files[0];
		if(file.length == 0)
		{
			mui.alert("请选择要上传的图片");
			return false;
		}
		var data = new FormData();
		data.append('image',file);
		// console.log(data);return false;
		mui.showLoading("正在上传...");
		$.ajax({
			url:"/index/upload/uploadEditor",
			type:"post",
			data:data,
			processData:false,
			contentType:false,
			dataType:'json',
			success:function(data){
				var url = data.data[0];
				if(data.errno == 0)
				{
					mui.hideLoading();
					$("#show").attr("src", url);
					$("#zfb_image_url").val(url);
				}
				else
				{
					mui.alert(data.fail);
				}
			}
		})
	})
</script>
</html>