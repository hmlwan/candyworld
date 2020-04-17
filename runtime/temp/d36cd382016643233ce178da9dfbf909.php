<?php /*a:4:{s:60:"/www/wwwroot/mojing/application/admin/view/product/edit.html";i:1529209738;s:59:"/www/wwwroot/mojing/application/admin/view/layout/main.html";i:1523304526;s:61:"/www/wwwroot/mojing/application/admin/view/layout/header.html";i:1523470910;s:59:"/www/wwwroot/mojing/application/admin/view/layout/left.html";i:1523304526;}*/ ?>
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
        <h4>编辑工厂</h4>
    </header>
    <div class="panel-body" style="padding-bottom: 50px">
        <form class="form-horizontal" method="post" onsubmit="return false" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label">工厂名称</label>

                <div class="col-sm-5">
                    <input type="text" value="<?php echo htmlentities($info->product_name); ?>" name="product_name" class="form-control"
                           placeholder="请输入工厂名称">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">工厂logo</label>

                <div class="col-sm-5">
                    <img src="<?php echo htmlentities($info->image_url); ?>" id="img">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">开采率</label>

                <div class="col-sm-2">
                    <input type="text" name="rate_min" class="form-control" placeholder="最低开采率" value="<?php echo htmlentities($info->rate_min); ?>">
                </div>
                <label class="col-sm-1 control-label">-</label>
                <div class="col-sm-2">
                    <input type="text" name="rate_max" class="form-control" placeholder="最高开采率" value="<?php echo htmlentities($info->rate_max); ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">日产</label>

                <div class="col-sm-2">
                    <input type="text" name="yield_min" class="form-control" placeholder="最低日产" value="<?php echo htmlentities($info->yield_min); ?>">
                </div>
                <label class="col-sm-1 control-label">-</label>
                <div class="col-sm-2">
                    <input type="text" name="yield_max" class="form-control" placeholder="最高日产" value="<?php echo htmlentities($info->yield_max); ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">晶石价格</label>

                <div class="col-sm-2">
                    <input type="text" value="<?php echo htmlentities($info->price); ?>" name="price" class="form-control"
                           placeholder="请输入价格">
                </div>

                <!-- <label class="col-sm-1 control-label">宝石价格</label>

                <div class="col-sm-2">
                    <input type="text" value="<?php echo htmlentities($info->jewel_price); ?>" name="jewel_price" class="form-control"
                           placeholder="宝石价格">
                </div> -->
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">周期</label>

                <div class="col-sm-5">
                    <input type="text" value="<?php echo htmlentities($info->period); ?>" name="period" class="form-control"
                           placeholder="请输入周期">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" data-url="<?php echo url('admin/product/update',['id'=>$info->id]); ?>"
                            onclick="main.ajaxPosts(this)" class="btn btn-primary">确定修改
                    </button>
                </div>
            </div>
        </form>
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


    <script src="/admin/vendor/fuelux/checkbox.js"></script>

</body>
</html>