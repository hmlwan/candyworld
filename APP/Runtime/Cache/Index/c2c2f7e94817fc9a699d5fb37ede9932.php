<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html class="pixel-ratio-3 retina android android-5 android-5-0 watch-active-state"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<link rel="stylesheet" href="/Public/dianyun/css/framework7.ios.min.css">
	<link rel="stylesheet" href="/Public/dianyun/css/app.css">
	<link rel="stylesheet" href="/Public/dianyun/css/iconfont.css">


</head>

<body onload="onload()" class="framework7-root">
<div class="panel-overlay"></div>
<div class="panel panel-left panel-reveal layout-dark">
</div>

<div class="views">
	<div class="view view-main" data-page="bankmodify">
		<div class="pages">
			<link href="/Public/dianyun/css/webuploader.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				.webuploader-pick {background-color: transparent;}
			</style>

			<div data-page="bankmodify" class="page navbar-fixed" isinited="true">
				<div class="navbar theme-white">
					<div class="navbar-inner">
						<div class="left">
							<a href="javascript:history.go(-1);" class="external link"> <i class="icon iconfont icon-angleleft" style="transform: translate3d(0px, 0px, 0px);"></i>返回</a>
						</div>
						<div class="center" data-i18n="member.myinfo" style="left: -24px;">资料修改</div>
						<div class="right"></div>
					</div>
				</div>

				<div class="page-content defaultbg">
					<form  method="post" action="<?php echo U('Index/Index/zhifupost');?>" name ="myform" id="myform">
						<div class="list-block">
							<ul>

								<li class="">
									<div class="item-content">
										<div class="item-inner">
											<div class="item-title label"><span>微信收款码</span></div>
											<div class="item-input">
												<div id="divuploader1" class="wu-example">
													<div class="btns">
														<div id="picker1" class="webuploader-container">
															<span  class="sima"><img src="/Public/dianyun/img/button-selalipay.png" onclick="document.getElementById('upfile').click()" id="clickimg"  width="120" height="120"></span>
															<div id="rt_rt_1cut8j5snttdo7srtcl9710mm1" style="position: absolute; top: 0px; left: 0px; width: 136px;overflow: hidden; bottom: auto; right: auto;">
																<input type="file" name="photoimg" class="webuploader-element-invisible" multiple="multiple" id="upfile">
																<label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);">

																</label>
															</div>
														</div>
													</div>
													<div id="thelist1" class="uploader-list"></div>
												</div>
												<input type="hidden" id="image" name="image" value="">
											</div>
										</div>
									</div>
								</li>



							</ul>
						</div>
						<div class="center" style="padding: 30px 15px 15px 15px;">

							<a href="#" name="submit" onclick="document.getElementById('myform').submit();return false" class="external button-fill button button-large bg-blue submitbtn">
								保存微信收款信息
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