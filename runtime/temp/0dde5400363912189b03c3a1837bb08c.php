<?php /*a:4:{s:73:"/www/wwwroot/www.wscorps.cn/application/admin/view/user/magicboxlist.html";i:1529152136;s:67:"/www/wwwroot/www.wscorps.cn/application/admin/view/layout/main.html";i:1523246924;s:69:"/www/wwwroot/www.wscorps.cn/application/admin/view/layout/header.html";i:1523413308;s:67:"/www/wwwroot/www.wscorps.cn/application/admin/view/layout/left.html";i:1523246924;}*/ ?>
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
        <h4>会员工厂列表</h4>
    </header>
    <div class="panel-body" style="padding-bottom: 50px">
        <form class="form-horizontal" action="">
            <div class="form-group">
                <div class="col-xs-2 no-pd-2">
                <select name="product_id" class="form-control">
                    <option value="">工厂类型</option>
                    <?php foreach($productList as $productList): ?>
                    <option <?php if(app('request')->get('product_id') == $productList->id): ?> selected <?php endif; ?> value="<?php echo htmlentities($productList->id); ?>"><?php echo htmlentities($productList->product_name); ?></option>
                    <?php endforeach; ?>
                </select>
                </div>
                <div class="col-xs-1 no-pd-l">
                <select name="type" class="form-control">
                    <option value="">来源</option>
                    <option <?php if(app('request')->get('type') == 1): ?> selected <?php endif; ?> value="1">后台发放</option>
                    <option <?php if(app('request')->get('type') == 2): ?> selected <?php endif; ?> value="2">购买</option>
                    <option <?php if(app('request')->get('type') == 3): ?> selected <?php endif; ?> value="3">升级赠送</option>
                    <option <?php if(app('request')->get('type') == 4): ?> selected <?php endif; ?> value="4">注册赠送</option>
                </select>
                </div>
                <div class="col-xs-1 no-pd-l">
                <select name="status" class="form-control">
                    <option value="-1">全部状态</option>
                    <option <?php if(app('request')->get('status') == 1): ?> selected <?php endif; ?> value="1">运行中</option>
                    <option <?php if(app('request')->get('status') == 2): ?> selected <?php endif; ?> value="2">已过期</option>
                </select>
                </div>
                <div class="col-xs-3 no-pd-l">
                    <input type="text" value="<?php echo htmlentities(app('request')->get('keyword')); ?>" name="keyword" class="form-control" placeholder="请输入会员手机搜索">
                </div>
                <button type="submit" class="btn btn-color">搜索</button>
            </div>
        </form>

        <table class="table table-bordered table-striped no-margin">
            <thead>
            <tr>
                <th class="text-center">产品number</th>
                <th class="text-center">会员账号</th>
                <th class="text-center">工厂类型</th>
                <th class="text-center">购买时间</th>
                <th class="text-center">到期时间</th>
                <th class="text-center">开采率(kb/s)</th>
                <th class="text-center">日产量(糖果)</th>
                <th class="text-center">收益</th>
                <th class="text-center">收益天数</th>
                <th class="text-center">状态</th>
                <th class="text-center">来源</th>
                <!--<th class="text-center">操作</th>-->
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($list)): foreach($list as $entity): ?>
                <tr>
                <form class="form-horizontal" method="post" onsubmit="return false" role="form">
                    <td class="text-center"><?php echo htmlentities($entity->product_number); ?></td>
                    <td class="text-center"><?php echo htmlentities($entity->mobile); ?></td>
                    <td class="text-center"><?php echo htmlentities($entity->product_name); ?></td>
                    <td class="text-center"><?php echo htmlentities($entity->getBuyTime()); ?></td>
                    <td class="text-center"><?php echo htmlentities($entity->getEndTime()); ?></td>
                    <td class="text-center">
                        <?php echo htmlentities($entity->rate_min); ?>-<?php echo htmlentities($entity->rate_max); ?>
                    </td>
                    <td class="text-center">
                        <?php echo htmlentities($entity->yield_min); ?>-<?php echo htmlentities($entity->yield_max); ?>
                    </td>
                    <td class="text-center">
                        昨日收益：<?php echo !empty($entity->yestoday) ? htmlentities($entity->yestoday) :  0; ?><br>
                        总收益：<?php echo !empty($entity->total) ? htmlentities($entity->total) :  0; ?>
                    </td>
                    <td class="text-center">
                        已收益天数：<?php echo htmlentities($entity->balance_day); ?><br>
                        总天数：<?php echo htmlentities($entity->period); ?>
                    </td>
                    <td class="text-center"><?php if($entity->status == 1): ?>运行中<?php else: ?>已过期<?php endif; ?></td>
                    <td class="text-center"><?php if($entity->types == 1): ?>后台发放<?php elseif($entity->types == 2): ?>购买<?php elseif($entity->types == 3): ?>升级赠送<?php elseif($entity->types == 4): ?>注册赠送<?php endif; ?></td>
                    <!--<td class="text-center"><a class="btn btn-xs btn-info">计算收益</a></td>-->
                    </form>
                </tr>
                <?php endforeach; else: ?>
            <tr class="text-center">
                <td colspan="7">暂无数据</td>
            </tr>
            <?php endif; ?>
            </tbody>
        </table>
        <div class="page">
            <?php echo htmlspecialchars_decode($list->render()); ?>
        </div>
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




</body>
</html>