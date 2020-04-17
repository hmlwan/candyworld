<?php /*a:4:{s:65:"/www/wwwroot/mojing/application/index/view/member/memberinfo.html";i:1529216550;s:59:"/www/wwwroot/mojing/application/index/view/layout/head.html";i:1523304526;s:61:"/www/wwwroot/mojing/application/index/view/layout/footer.html";i:1523304526;s:58:"/www/wwwroot/mojing/application/index/view/layout/nav.html";i:1529390566;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>我的晶盒</title>
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
	<!--content-->
	<div class="mui-content" style="padding-bottom: 70px">
		<div class="mine-top">
			<div class="mine-info">
				<div class="mine-info-top">
					<div class="mine-info-left">
						<h3><?php echo htmlentities($list->nick_name); ?></h3>
						<div class="mine-info-level">
							<img src="/static/img/uhui.png" style="width: 28%">
							<img src="/static/img/lianmeng.png" style="width: 28%">
							<span><?php echo htmlentities($list->getLevel()); ?></span>
						</div>
					</div>
					<div class="mine-info-right">
						<?php if($list->avatar): ?>
							<img class="header" src="<?php echo htmlentities($list->avatar); ?>" id="avatar">
							<?php else: ?>
							<img class="header" src="/index/img/tj.png" id="avatar">
						<?php endif; ?>
				</div>
				</div>
				<!-- <form id="avatarForm"> -->
					<input type="file" id="file" name="image" style="display: none;">
				<!-- </form> -->
				<div class="mine-info-bottom" style="margin-top: 10px;">
					<div class="mui-row">
						<div class="mui-col-sm-6 mui-col-xs-6 mine-info-item">
							<img src="/static/img/moshi.png" >
							<span class="text">糖果:</span>
							<span class="text number"><?php echo htmlentities($list->magic); ?></span>
						</div>
						<div class="mui-col-sm-6 mui-col-xs-6 mine-info-item">
							<img src="/static/img/dongjie.png" >
							<span class="text">冻结:</span>
							<span class="text number"><?php echo !empty($freeze['freeze']) ? htmlentities($freeze['freeze']) :  0; ?></span>
						</div>
						<!-- <div class="mui-col-sm-5 mui-col-xs-5 mine-info-item">
							<img src="/static/img/baoshi.png" >
							<span class="text">宝石:</span>
							<span class="text number"><?php echo round($list->jewel,5); ?></span>
						</div> -->
						<div class="mui-col-sm-3 mui-col-xs-3 mine-info-item">
							<img src="/static/img/jiaoyi2.png" >
							<span class="text">交易:</span>
							<span class="text number"><?php echo !empty($freeze['total']) ? htmlentities($freeze['total']) :  0; ?></span>
						</div>
						<div class="mui-col-sm-4 mui-col-xs-4 mine-info-item">
							<img src="/static/img/hp.png" >
							<span class="text">好评:</span>
							<span class="text number"><?php echo htmlentities($list->comment_rate); ?>%</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<ul class="mui-table-view my-view" style="margin-top: 10px;">
			<li class="mui-table-view-cell mine-list-item">
				<a href="<?php echo url('member/magicbox'); ?>" class="mui-navigate-right " >
					<img src="/static/img/moe.png" />
					<span>晶盒</span>
				</a>
			</li>
			<li class="mui-table-view-cell mine-list-item">
				<a class="mui-navigate-right " href="<?php echo url('trade/index'); ?>" >
					<img src="/static/img/jiaoyi.png" />
					<span>交易</span>
				</a>
			</li>
			<li class="mui-table-view-cell mine-list-item">
				<a href="<?php echo url('member/magicloglist'); ?>" class="mui-navigate-right " >
					<img src="/static/img/zhangdan.png" />
					<span>账单</span>
				</a>
			</li>
		</ul>
		<ul class="mui-table-view my-view" style="margin-top: 10px;">
			<li class="mui-table-view-cell mine-list-item">
				<a href="<?php echo url('member/spread'); ?>" class="mui-navigate-right " >
					<img src="/static/img/zhaomu.png" />
					<span>招募</span>
				</a>
			</li>
			<li class="mui-table-view-cell mine-list-item">
				<a href="<?php echo url('member/union'); ?>" class="mui-navigate-right " >
					<img src="/static/img/tuandui.png" />
					<span>联盟</span>
				</a>
			</li>
			<li class="mui-table-view-cell mine-list-item">
				<a href="javascript:void(0)" data-msg="开发中，敬请期待"  class="mui-navigate-right my-tips" >
					<img src="/static/img/shanghu.png" />
					<span>商户</span>
				</a>
			</li>
		</ul>
		<ul class="mui-table-view my-view" style="margin-top: 10px;">
			<li class="mui-table-view-cell mine-list-item">
				<a href="/index/member/message" class="mui-navigate-right " >
					<img src="/static/img/kefu.png" />
					<span>客服</span>
				</a>
			</li>
			<li class="mui-table-view-cell mine-list-item">
				<a href="/index/member/articleList" class="mui-navigate-right " >
					<img src="/static/img/xsjd.png" />
					<span>新手解答</span>
				</a>
			</li>
			<li class="mui-table-view-cell mine-list-item">
				<a href="/index/member/about" class="mui-navigate-right " >
					<img src="/static/img/gywm.png" />
					<span>关于我们</span>
				</a>
			</li>
			<li class="mui-table-view-cell mine-list-item">
				<a href="/index/member/set" class="mui-navigate-right " >
					<img src="/static/img/shzhi.png" />
					<span>设置</span>
				</a>
			</li>
		</ul>
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
	<!--js-->
	<script>
		$("#avatar").click(function(){
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
			mui.showLoading("正在上传头像...");
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
						mui.showLoading("头像上传成功，正在保存...");
						$.ajax({
							url:"/index/member/updateUser",
							type:"post",
							data:{'avatar' : data.data[0]},
							dataType:'json',
							success:function(data){
								mui.alert(data.message);
								if(data.code == 0)
								{
									mui.hideLoading();
									$("#avatar").attr("src", url);
								}
							}
						})
					}
					else
					{
						mui.alert(data.fail);
					}
				}
			})
		})
	</script>	
</body>
</html>