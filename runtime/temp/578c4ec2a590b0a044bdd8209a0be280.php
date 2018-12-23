<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"E:\GitHub\bjguomai\public/../application/admin\view\article\lis.html";i:1531811520;s:60:"E:\GitHub\bjguomai\application\admin\view\common\header.html";i:1545389103;s:58:"E:\GitHub\bjguomai\application\admin\view\common\menu.html";i:1545557490;s:60:"E:\GitHub\bjguomai\application\admin\view\common\footer.html";i:1529459493;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>后台管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin//style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin//style/font-awesome.css" rel="stylesheet">
    <link href="/static/admin//style/weather-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="___BLOG__/images/favicon.ico" type="image/x-icon" />
    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin//style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin//style/demo.css" rel="stylesheet">
    <link href="/static/admin//style/typicons.css" rel="stylesheet">
    <link href="/static/admin//style/animate.css" rel="stylesheet">
    <link rel="bookmark" type="image/x-icon" href="__BLOG__/images/favicon.ico"/>
    <link rel="shortcut icon" href="__BLOG__/images/favicon.ico">
    <link rel="icon" href="__BLOG__/images/favicon.ico">
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
                <a href="http://www.bjguomai.com//admin" class="navbar-brand">
                    <small>
                        <img style="width: 130px;margin-left: 10px" src="/static/admin//images/logo.png" alt="">
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
                <div class="searchhelper">请输入搜索关键词</div>
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
    </div>
</div>

<!-- Page Content -->
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li class="active">文章管理</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

        <button type="button" tooltip="添加文章" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('article/add'); ?>'"> <i class="fa fa-plus"></i> Add
        </button>
        <button style="float: right" type="button" tooltip="全部文章" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('article/lis'); ?>'"> 全部文章
        </button>
        <button style="float: right;margin-right: 15px" type="button" tooltip="筛选推荐位" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('article/filterLis'); ?>'"> 筛选推荐位
        </button>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="flip-scroll">
                            <form action="" method="post">
                            <table class="table table-bordered table-hover">
                                <thead class="">
                                <tr>
                                    <th class="text-center" width="3%">ID</th>
                                    <th class="text-center" width="3%">排序</th>
                                    <th class="text-center" width="5%">文章标题</th>
                                    <th class="text-center" width="3%">关键字</th>
                                    <th class="text-center" width="3%">缩略图</th>
                                    <th class="text-center" width="5%">描述</th>
                                    <!--<th class="text-center" width="10%">文章内容</th>-->
                                    <th class="text-center" width="3%">类别</th>
                                    <th class="text-center" width="3%">是否发布</th>
                                    <th class="text-center" width="3%">是否推荐</th>
                                    <th class="text-center" width="3%">文章发布时间</th>
                                    <th class="text-center" width="5%">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td align="center"><?php echo $article['id']; ?></td>
                                    <td align="center"><input style="width: 50px; text-align: center" type="text" name="<?php echo $article['id']; ?>" value="<?php echo $article['sort']; ?>" required="required" maxlength="3"></td>
                                    <td align="center"><?= mb_substr($article['title'], 0, 6, 'utf-8'); if(strlen($article['title'])>6) {echo '...';}; ?></td>
                                    <td align="center"><?php echo $article['keywords']; ?></td>
                                    <td align="center">
                                        <?php if($article['thumb'] == ''): ?>
                                        无缩略图
                                        <?php else: ?>
                                        <img src="http://www.bjguomai.com/<?php echo $article['thumb']; ?>" alt="" style="height: 30px">
                                        <?php endif; ?>
                                    </td>
                                    <!--<td align="center"><?= mb_substr($article['content'], 0, 20, 'utf-8'); if(strlen($article['content'])>20) {echo '...';}; ?></td>-->
                                    <td align="center"><?= mb_substr($article['desc'], 0, 10, 'utf-8'); if(strlen($article['desc'])>20) {echo '...';}; ?></td>
                                    <td align="center"><?php echo $article['catename']; ?></td>
                                    <td align="center">
                                        <?php if($article['status'] == 1): ?>
                                        是
                                        <?php else: ?>
                                        否
                                        <?php endif; ?>
                                    </td>
                                    <td align="center">
                                        <?php if($article['recommend'] == 1): ?>
                                        是
                                        <?php else: ?>
                                        否
                                        <?php endif; ?>
                                    </td>
                                    <td align="center"><?= date('Y-m-d H:m:s', $article['time']) ?></td>
                                    <td align="center">
                                        <a href="<?php echo url('article/edit', array('id'=>$article['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <a href="#" onClick="warning('确实要删除吗', '<?php echo url('article/del', array('id'=>$article['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                                <div style="margin-top: 10px;float: left"><input type="submit" class="btn btn-primary" value="排序"></div>
                                <div class="clear"></div>
                            </form>
                        </div>
                        <div style="margin-top: 10px; text-align: right">
                            <?php echo $articles->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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