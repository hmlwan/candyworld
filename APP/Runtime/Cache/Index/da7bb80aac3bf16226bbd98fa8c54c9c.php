<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>绑定支付宝</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<link rel="stylesheet" href="/Public/dianyun/css/app.css">
	<link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">
	<style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    		text-decoration: none;
    		list-style: none;
    	}
    </style>
</head>

<body style="background: #c9cad2;">
	
	<form  method="post" action="<?php echo U('Index/Index/zhifupost');?>" name ="myform" id="myform">
	
	<div class="bdzfb" id="picker1">
		
		<div id="picker1" class="webuploader-container">
								<span  class="sima"><img src="/Public/dianyun/img/sc.png" onclick="document.getElementById('upfile').click()" id="clickimg"  width="120" height="120"></span>
															<div id="rt_rt_1cut8j5snttdo7srtcl9710mm1" style="position: absolute; top: 0px; left: 0px; width: 136px;overflow: hidden; bottom: auto; right: auto;">
																<input type="file" name="photoimg" class="webuploader-element-invisible" multiple="multiple" id="upfile" style="display: none;">
																<label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);">

																</label>
																<input type="hidden" id="image" name="image" value="">
															</div>
														</div>
														

		
		<p>点击上传你的支付宝收款码</p>
		
	</div>
	
	
	<div class="baocuss">
		<a href="#" name="submit" onclick="document.getElementById('myform').submit();return false" class="external submitbtn">
			
			保存收款码
			
		</a>
	</div>
	</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

</body>
<!--  weui-tabbar -->

<!--底部开始-->
<script src="/Public/js/jquery-1.11.3.min.js"></script>
<script src="/Public/js/jquery.form.js"></script>


<script type="text/javascript">
    $(function(){
        $("#upfile").wrap("<form action='<?php echo U('Index/task/uploads');?>' method='post' enctype='multipart/form-data'></form>");
        $("#upfile").off().on('change',function(){
            var objform = $(this).parents();
            objform.ajaxSubmit({
                dataType:  'json',
                target: '#preview',
                success:function(data){
                    if(data.result==1){
                        $("#clickimg").attr('src','/Public/'+data.url)
                        $("#image").val('/Public/'+data.url)
                    }else{
                        $('.sima').html('<font style="color:red;">'+data.msg+'</font>')
                    }
                },
                error:function(){
                }
            });
        });
    });
</script>


</html>