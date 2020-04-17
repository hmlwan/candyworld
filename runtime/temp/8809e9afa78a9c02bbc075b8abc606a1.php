<?php /*a:4:{s:68:"/www/wwwroot/www.wscorps.cn/application/admin/view/order/detail.html";i:1523246924;s:67:"/www/wwwroot/www.wscorps.cn/application/admin/view/layout/main.html";i:1523246924;s:69:"/www/wwwroot/www.wscorps.cn/application/admin/view/layout/header.html";i:1523413308;s:67:"/www/wwwroot/www.wscorps.cn/application/admin/view/layout/left.html";i:1523246924;}*/ ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>后台管理</title>
    <link rel="stylesheet" href="/admin/vendor/offline/theme.css">
    <link rel="stylesheet" href="/admin/vendor/pace/theme.css">

    <link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="/admin/css/animate.min.css">

    <link rel="stylesheet" href="/admin/css/panel.css">

    <link rel="stylesheet" href="/admin/css/skins/palette.1.css" id="skin">
    <link rel="stylesheet" href="/admin/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="/admin/css/jquery.confirm.css">
    <link rel="stylesheet" href="/admin/css/main.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/admin/vendor/jquery-1.11.1.min.js"></script>
    <script src="/admin/vendor/modernizr.js"></script>
    


</head>

<body>
<div class="app">
    <header class="header header-fixed navbar">
    <div class="brand" style="background-color: #535A7C">
        <a href="javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
        <a href="<?php echo url('admin/index/index'); ?>" class="navbar-brand">
            <i class="fa fa-stop mg-r-sm"></i>
            <span class="heading-font">后台管理系统</span>
        </a>
    </div>

    <ul class="nav navbar-nav navbar-right off-right">
        <li class="quickmenu">
            <a href="javascript:;" data-toggle="dropdown">
                <?php echo htmlentities($manage['name']); ?>
                <i class="caret mg-l-xs hidden-xs no-margin"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                <li>
                    <a href="<?php echo url('index/updateInfo'); ?>">修改密码</a>
                </li>
                <li>
                    <a onclick="logoutSys(this)" data-href="<?php echo url('index/logout'); ?>">退出</a>
                </li>
            </ul>
        </li>
    </ul>
</header>
<script>
    function logoutSys(event) {
        var url = $(event).attr('data-href');
        $.confirm({
            title: '<strong style="color: #c7254e;font-size: 16px">温馨提示</strong>',
            content: '<div class="text-center" style="border-top:1px solid #eee;padding-top: 20px">你确定要退出系统吗?</div>',
            confirmButton: '确定',
            confirmButtonClass: 'btn btn-info',
            cancelButton: '取消',
            cancelButtonClass: 'btn btn-danger',
            animation: 'scaleY',
            theme: 'material',
            confirm: function () {
                window.location.href = url;
            }
        })
    }
</script>

    <section class="layout" style="padding-top: 50px">

        <aside class="sidebar collapsible canvas-left">
    <div class="scroll-menu">

        <nav class="main-navigation slimscroll" data-height="auto" data-size="4px" data-color="#ddd" data-distance="0">
            <ul id="left-menu">
                <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-home"></i><span>后台首页</span></a></li>
                <?php foreach($menus as $menu): if($menu->getLevel() == 1): ?>
                        <li class="dropdown">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="<?php echo config('app.menu_icon')[$menu->getShrotName()] ?? ''; ?>"></i><span><?php echo htmlentities($menu->getShrotName()); ?></span><i
                                    class="toggle-accordion"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach($menus as $child): if($child->getParentId() == $menu->getId()): ?>

                                        <li <?php echo htmlentities($child->checkPathActive()); if($child->checkPathActive()): ?> class="active" <?php endif; ?>><a
                                                href="<?php echo htmlentities($child->getUrl()); ?>"><span><?php echo htmlentities($child->getShrotName()); ?></span></a>
                                        </li>
                                    <?php endif; endforeach; ?>
                            </ul>
                        </li>
                    <?php endif; endforeach; ?>
            </ul>
        </nav>
    </div>
    <footer>
        <div class="footer-toolbar pull-left">
            <a href="javascript:;" class="toggle-sidebar pull-right hidden-xs">
                <i class="fa fa-angle-left"></i>
            </a>
        </div>
    </footer>
    <script>
        $(function () {
            $("#left-menu").find('.dropdown').each(function () {
                if ($(this).find('li').hasClass('active')) {
                    $(this).addClass('collapse-open open');
                }else{
                    $(this).removeClass('collapse-open open');
                }
            })
        })
    </script>
</aside>

        <section class="main-content" >

            <div class="content-wrap ">
                
<section class="panel">
    <header class="panel-heading">
        <h4>订单详细</h4>
    </header>
    <div class="panel-body" style="padding-bottom: 50px">
        <section class="panel">
            <header class="panel-heading">
                <h5>订单信息</h5>
            </header>
            <div class="panel-body" >
                <table class="table table-bordered table-striped no-margin">
                    <thead>
                        <tr>
                            <th class="text-center">订单number</th>
                            <th class="text-center">数量（魔石）</th>
                            <th class="text-center">交易单价（$）</th>
                            <th class="text-center">交易总额</th>
                            <th class="text-center">交易状态</th>
                            <th class="text-center">交易手续费(魔石)</th>
                            <th class="text-center">创建时间</th>
                            <?php if($order->status > 1): ?>
                            <th class="text-center">付款时间</th>
                            <?php endif; if($order->status > 2): ?>
                            <th class="text-center">收款时间</th>
                            <th class="text-center">交易凭据</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <?php echo htmlentities($order->order_number); ?>
                            </td>
                            <td class="text-center"> <?php echo htmlentities($order->number); ?></td>
                            <td class="text-center"><?php echo htmlentities($order->price); ?></td>
                            <td class="text-center">
                                <?php echo htmlentities($order->total_price); ?> $ <br>
                                <?php echo htmlentities($order->total_price_china); ?> CNY
                            </td>
                            <td class="text-center">
                                <?php echo htmlentities($order->getStatus()); ?>
                            </td>
                            <td class="text-center">
                                <?php echo htmlentities($order->charge_number); ?>
                            </td>
                            <td class="text-center">
                                <?php echo htmlentities($order->create_time); ?>
                            </td>
                            <?php if($order->status > 1): ?>
                            <td class="text-center"><?php echo date('Y-m-d H:i:s',$order->pay_time); ?></td>
                            <?php endif; if($order->status > 2): ?>
                            <td class="text-center"><?php echo date('Y-m-d H:i:s',$order->finish_time); ?></td>
                            <td class="text-center">
                                <a data-url="<?php echo htmlentities($order->image); ?>" class="btn btn-xs btn-primary look">查看</a>
                            </td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                <h5>
                    <?php if($order->types == 1): ?>求购会员信息<?php endif; if($order->types == 2): ?>出售会员信息<?php endif; ?>
                </h5>
            </header>
            <div class="panel-body" >
                <table class="table table-bordered table-striped no-margin">
                    <thead>
                        <tr>
                            <th class="text-center">昵称</th>
                            <th class="text-center">mobile</th>
                            <th class="text-center">微信</th>
                            <th class="text-center">支付宝</th>
                            <th class="text-center">真实姓名</th>
                            <th class="text-center">开户行</th>
                            <th class="text-center">银行卡号</th>
                            <th class="text-center">交易好评</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><?php echo htmlentities($userInfo->nick_name); ?></td>
                            <td class="text-center"><?php echo htmlentities($userInfo->mobile); ?></td>
                            <td class="text-center"><?php echo htmlentities($userInfo->wx); ?></td>
                            <td class="text-center"><?php echo htmlentities($userInfo->zfb); ?></td>
                            <td class="text-center"><?php echo htmlentities($userInfo->real_name); ?></td>
                            <td class="text-center"><?php echo htmlentities($userInfo->card_name); ?></td>
                            <td class="text-center"><?php echo htmlentities($userInfo->card); ?></td>
                            <td class="text-center"><?php echo htmlentities($userInfo->comment_rate); ?> %</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <?php if($targetUser): ?>
        <section class="panel">
            <header class="panel-heading">
                <h5>
                    <?php if($order->types == 2): ?>求购会员信息<?php endif; if($order->types == 1): ?>出售会员信息<?php endif; ?>
                </h5>
            </header>
            <div class="panel-body" >
                <table class="table table-bordered table-striped no-margin">
                    <thead>
                    <tr>
                        <th class="text-center">昵称</th>
                        <th class="text-center">mobile</th>
                        <th class="text-center">微信</th>
                        <th class="text-center">支付宝</th>
                        <th class="text-center">真实姓名</th>
                        <th class="text-center">开户行</th>
                        <th class="text-center">银行卡号</th>
                        <th class="text-center">交易好评</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"><?php echo htmlentities($targetUser->nick_name); ?></td>
                        <td class="text-center"><?php echo htmlentities($targetUser->mobile); ?></td>
                        <td class="text-center"><?php echo htmlentities($targetUser->wx); ?></td>
                        <td class="text-center"><?php echo htmlentities($targetUser->zfb); ?></td>
                        <td class="text-center"><?php echo htmlentities($targetUser->real_name); ?></td>
                        <td class="text-center"><?php echo htmlentities($targetUser->card_name); ?></td>
                        <td class="text-center"><?php echo htmlentities($targetUser->card); ?></td>
                        <td class="text-center"><?php echo htmlentities($targetUser->comment_rate); ?> %</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <?php endif; ?>
    </div>
</section>

            </div>

            <div class="site-overlay"></div>
        </section>

    </section>
</div>

<script src="/admin/bootstrap/js/bootstrap.js"></script>
<script src="/admin/vendor/jquery.easing.min.js"></script>
<script src="/admin/vendor/jquery.placeholder.js"></script>
<script src="/admin/vendor/fastclick.js"></script>
<script src="/admin/vendor/jquery.slimscroll.js"></script>
<script src="/admin/vendor/offline/offline.min.js"></script>
<script src="/admin/vendor/pace/pace.min.js"></script>
<script src="/admin/js/off-canvas.js"></script>
<script src="/admin/js/jquery.confirm.js"></script>
<script src="/admin/js/main.js"></script>
<script src="/admin/js/panel.js"></script>


    <script>
        $(function(){
            $(".look").click(function(){
                var image = $(this).attr('data-url');
                var content = "<img width='100%' src='"+image+"'>";
                $.dialog({
                    closeIcon: true,
                    title: '交易凭据',
                    content: content
                });
            })
        })
    </script>


</body>
</html>