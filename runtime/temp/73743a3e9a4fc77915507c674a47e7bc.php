<?php /*a:3:{s:67:"/www/wwwroot/mojing/application/index/view/member/magicloglist.html";i:1529215426;s:59:"/www/wwwroot/mojing/application/index/view/layout/head.html";i:1523304526;s:61:"/www/wwwroot/mojing/application/index/view/layout/footer.html";i:1523304526;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>账单</title>
    
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<link href="/static/css/mui.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/static/css/mui.loading.css"/>
<link rel="stylesheet" href="/static/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/static/css/swiper-4.2.0.min.css"/>
<script src="/static/js/mui.min.js"></script>
    <link href="/static/css/mescroll.css" rel="stylesheet">
</head>

<body>
<header class="mui-bar mui-bar-nav my-header" style="background-color: #17c3e5">
    <a href="/index/member/index" class="mui-icon mui-icon-left-nav mui-pull-left" style="color: black;"></a>

    <h1 id="title" class="mui-title">账单</h1>
</header>
<div style="top: 44px;z-index: 50;position: fixed"
     class="mui-segmented-control mui-segmented-control-inverted mui-segmented-control-primary my-tabs">
    <a href="/index/member/magicloglist?type=1"
       class="mui-control-item <?php if(app('request')->get('type') == 1 || !app('request')->get('type')): ?>mui-active<?php endif; ?>" id="income" did="1">
        收入
    </a>

    <a href="/index/member/magicloglist?type=-1" class="mui-control-item <?php if(app('request')->get('type') == -1): ?>mui-active<?php endif; ?>"
       id="spend" did="-1">
        支出
    </a>
</div>
<div class="mui-content">
    <div class="mui-scroll-wrapper" id="scroll" style="top: 94px;">
        <div class="mui-scroll" >
            <div class="mui-table-view my-list" id="data-box">

            </div>
        </div>
    </div>
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
    mui.init({
        pullRefresh: {
            container: '#scroll',//待刷新区域标识，querySelector能定位的css选择器均可，比如：id、.class等
            up: {
                height: 50,//可选.默认50.触发上拉加载拖动距离
                auto: true,//可选,默认false.自动上拉加载一次
                contentrefresh: "正在加载...",//可选，正在加载状态时，上拉加载控件上显示的标题内容
                contentnomore: '没有更多数据了',//可选，请求完毕若没有更多数据时显示的提醒内容；
                callback: getList //必选，刷新函数，根据具体业务来编写，比如通过ajax从服务器获取新数据；
            }
        }
    });
    var page = 1;
    var limit = 20;
    function getList() {
        $.get("<?php echo url('member/magicloglist',['type'=>$type]); ?>", {page: page, limit: limit}, function (response) {
            if (response.code == 0) {
                var data = response.data;
                if (data.length > 0) {
                    var content = "";
                    for (var i = 0; i < data.length; i++) {
                        content += '<ul class="my-list-item"><li class="clear"> <span class="left"> <span>类型:</span>' +
                                '<span class="value">' + data[i].types + '</span></span></li><li class="clear"><span class="left">' +
                                '<span>数量:</span><span class="value">' + data[i].magic + '糖果</span></span> </li><li class="clear">' +
                                '<span class="left"><span>时间:</span><span class="value">' + data[i].create_time + '</span></span></li></ul>';

                    }

                    $("#data-box").append(content);
                    page++;
                    mui('#scroll').pullRefresh().endPullupToRefresh(false)
                }else{
                    mui('#scroll').pullRefresh().endPullupToRefresh(true);
                }
            }else{
                mui.toast('网络异常,请稍候再试');
                plus.nativeUI.closeWaiting();
                mui('#scroll').pullRefresh().endPullupToRefresh(true);
            }
        }, 'json')
    }
</script>
<script>
</script>

</html>