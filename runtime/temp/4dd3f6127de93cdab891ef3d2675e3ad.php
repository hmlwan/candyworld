<?php /*a:3:{s:63:"/www/wwwroot/mojing/application/index/view/member/lastreal.html";i:1523470174;s:59:"/www/wwwroot/mojing/application/index/view/layout/head.html";i:1523304526;s:61:"/www/wwwroot/mojing/application/index/view/layout/footer.html";i:1523304526;}*/ ?>
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
</head>
<body>
<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5">
    <a href="/index/member/certification" class="mui-icon mui-icon-left-nav mui-pull-left"></a>

    <h1 id="title" class="mui-title">实名认证</h1>
</header>
<div class="mui-content container">
    <div class="mui-scroll-wrapper" style="top:44px">
        <div class="mui-scroll">
            <form class="mui-input-group" action="<?php echo url('member/updateUser'); ?>" method="post" onsubmit="return false" id="submitForm">
                <input type="hidden" name="card_id" value="<?php echo htmlentities($data['card_id']); ?>">
                <input type="hidden" name="real_name" value="<?php echo htmlentities($data['real_name']); ?>">
                <input type="hidden" name="card_right" value="<?php echo htmlentities($list->card_right); ?>">
                <input type="hidden" name="card_left" value="<?php echo htmlentities($list->card_left); ?>">
                <input type="file" style="display: none;" id="card_right">
                <div class="mui-input-row my-input-row">
                    <label>身份证正面照</label>
                    <button type="button" class="mui-btn mui-btn-warning send-code <?php if($list->is_certification != 1): ?> upload <?php endif; ?>" did="card_right" style="padding: 6px 12px;background-color: #17c3e5;border-color: #17c3e5">上传图片</button>
                </div>
                <div class="mui-row">
                    <img <?php if($list->card_right != ''): ?>src="<?php echo htmlentities($list->card_right); ?>"<?php endif; ?> style="width: 80%; max-height: 120px;margin: 10px auto;display: block;" id="card_right_img">
                </div>
                <input type="file" style="display: none;" id="card_left">
                <div class="mui-input-row my-input-row">
                    <label>身份证反面照</label>
                    <button type="button" style="padding: 6px 12px;background-color: #17c3e5;border-color: #17c3e5" class="mui-btn mui-btn-warning send-code <?php if($list->is_certification != 1): ?> upload <?php endif; ?>" did="card_left">上传图片</button>
                </div>
                <div class="mui-row">
                    <img <?php if($list->card_left != ''): ?>src="<?php echo htmlentities($list->card_left); ?>"<?php endif; ?> style="width: 80%; max-height: 120px;margin: 10px auto;display: block;" id="card_left_img">
                </div>
            </form>
        </div>
    </div>
</div>

<?php if($list->is_certification != 1): ?>
<button id="submit" data-form="submitForm" onclick="ajaxPost(this)" type="submit" style="z-index:100;" class="mui-btn mui-btn-warning my-btn">确定</button>
<?php endif; ?>

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
    // $(document).on('click', '#submit', function(){
    //     alert();
    // })
    $(".upload").click(function(){
        var did = $(this).attr("did");
        $("#"+did).click();
    })
    $("input[type = 'file']").change(function(){
        var $this = $(this);
        var file = this.files[0];
        if(file.length == 0)
        {
            mui.alert("请选择要上传的图片");
            return false;
        }
        var id = $(this).attr("id");
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
                    $("#"+id+"_img").attr("src", url);
                    $("input[name = '"+id+"']").val(url);
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