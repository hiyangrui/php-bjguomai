<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"E:\Code\blog\public/../application/admin\view\index\index.html";i:1527491722;s:54:"E:\Code\blog\application\admin\view\common\header.html";i:1535716696;s:52:"E:\Code\blog\application\admin\view\common\menu.html";i:1530534551;s:54:"E:\Code\blog\application\admin\view\common\footer.html";i:1529459493;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>Echeverra</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin//style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin//style/font-awesome.css" rel="stylesheet">
    <link href="/static/admin//style/weather-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="/static/admin//images/ts.png" type="image/x-icon" />
    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin//style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin//style/demo.css" rel="stylesheet">
    <link href="/static/admin//style/typicons.css" rel="stylesheet">
    <link href="/static/admin//style/animate.css" rel="stylesheet">
    <style>
        .clear:after {
            content:"";
            display: block;
            clear:both;
        }
    </style>
</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="http://www.blog.com//admin" class="navbar-brand">
                    <small>
                        <img style="width: 150px;margin-left: 10px" src="/static/admin//images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <?php if(\think\Request::instance()->session('username') != ''): ?>
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" style="border-left: none" title="View your public profile">
                                    <!--<img src="/static/admin//images/contacts.png">-->
                                    <span class="fa fa-user" style="color: #fff;font-size: 26px"></span>
                                </div>
                                <section>
                                    <h2>
                                        <span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span>
                                    </h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a><?php echo \think\Request::instance()->session('username'); ?></a></li>
                                <li class="dropdown-footer" style="text-align: center">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <!--<li class="dropdown-footer" style="text-align: center">-->
                                    <!--<a href="<?php echo url('admin/edit', array('id'=>\think\Request::instance()->session('id'))); ?>">-->
                                        <!--修改密码-->
                                    <!--</a>-->
                                <!--</li>-->
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                    <?php else: ?>
                    <a style="font: 16px;color: #fff;line-height: 45px;margin-right: 40px" href="<?php echo url('login/login'); ?>">登录</a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->
<div class="main-container container-fluid">
    <div class="page-container">


        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input class="searchinput" type="text">
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--Dashboard-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text">管理员</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('admin/lis'); ?>">
                                    <span class="menu-text">
                                        管理员列表
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('auth_group/lis'); ?>">
                                    <span class="menu-text">
                                        用户组列表
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('auth_rule/lis'); ?>">
                                    <span class="menu-text">
                                        权限列表
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-folder"></i>
                        <span class="menu-text">栏目管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('cate/lis'); ?>">
                                    <span class="menu-text">
                                        栏目列表
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text">文章管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('article/lis'); ?>">
                                    <span class="menu-text">
                                        文章列表
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-chain"></i>
                        <span class="menu-text">友情链接</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('link/lis'); ?>">
                                    <span class="menu-text">
                                        链接管理
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">系统</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('conf/conf'); ?>">
                                    <span class="menu-text">
                                        配置项
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('conf/lis'); ?>">
                                    <span class="menu-text">
                                        配置列表
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->
            
            

<!-- Page Content -->
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li class="active">控制面板</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

    </div>
    <!-- /Page Body -->
</div>
<!-- /Page Content -->



</div>
</div>


<!--Basic Scripts-->
<script src="/static/admin//style/jquery_002.js"></script>
<script src="/static/admin//style/bootstrap.js"></script>
<script src="/static/admin//style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="/static/admin//style/beyond.js"></script>



</body>
</html>

