<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"E:\GitHub\bjguomai\public/../application/admin\view\article\edit.html";i:1531794304;s:60:"E:\GitHub\bjguomai\application\admin\view\common\header.html";i:1545389103;s:58:"E:\GitHub\bjguomai\application\admin\view\common\menu.html";i:1530534551;s:60:"E:\GitHub\bjguomai\application\admin\view\common\footer.html";i:1529459493;}*/ ?>
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
            <li>
                <a href="#">系统</a>
            </li>
            <li>
                <a href="<?php echo url('article/lis'); ?>">文章管理</a>
            </li>
            <li class="active">修改文章</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">修改文章</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form" action="" enctype="multipart/form-data" method="post">
                                <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label no-padding-right">文章标题</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="title" placeholder="" name="title" type="text" value="<?php echo $article['title']; ?>" required="" maxlength="60">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label no-padding-right">文章作者</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="author" placeholder="" name="author" type="text" value="<?php echo $article['author']; ?>" maxlength="30">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="keywords" class="col-sm-2 control-label no-padding-right">文章关键字</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="keywords" placeholder="" name="keywords" type="text" value="<?php echo $article['keywords']; ?>" required="" maxlength="100">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="desc" class="col-sm-2 control-label no-padding-right">文章描述</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" style="resize: none" id="desc" placeholder="" name="desc" type="text" required="" maxlength="255"><?php echo $article['desc']; ?></textarea>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label no-padding-right">推荐位</label>
                                    <div class="col-sm-6">
                                        <div class="control-group">
                                            <div class="radio" style="float: left;margin-right: 10px"><label><input <?php if($article['recommend'] == 1): ?>checked="checked"<?php endif; ?> name="recommend" value="1" type="radio"><span class="text">是</span></label></div>
                                            <div class="radio" style="float: left;margin-right: 10px"><label><input <?php if($article['recommend'] == 0): ?>checked="checked"<?php endif; ?> name="recommend" type="radio" value="0"><span class="text">否</span></label></div>
                                        </div>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label no-padding-right">是否发布</label>
                                    <div class="col-sm-6">
                                        <div class="control-group">
                                            <div class="radio" style="float: left;margin-right: 10px"><label><input <?php if($article['status'] == 1): ?>checked="checked"<?php endif; ?> name="status" value="1" type="radio"><span class="text">是</span></label></div>
                                            <div class="radio" style="float: left;margin-right: 10px"><label><input <?php if($article['status'] == 0): ?>checked="checked"<?php endif; ?> name="status" type="radio" value="0"><span class="text">否</span></label></div>
                                        </div>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="thumb" class="col-sm-2 control-label no-padding-right">文章缩略图</label>
                                    <div class="col-sm-6">
                                        <input class=""  id="thumb" placeholder="" name="thumb" type="file">
                                        <?php if($article['thumb'] != ''): ?>
                                        <img src="http://www.bjguomai.com/<?php echo $article['thumb']; ?>" style="height: 40px">
                                        <?php else: ?>
                                        暂无缩略图
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cateid" class="col-sm-2 control-label no-padding-right">文章栏目</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="cateid" placeholder="" name="cateid" type="file" required="">
                                            <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                            <option <?php if($article['cateid'] == $cate['id']): ?>selected<?php endif; ?> value="<?php echo $cate['id']; ?>"><?php if($cate['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('---', $cate['level']) ?><?php echo $cate['catename']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="content" class="col-sm-2 control-label no-padding-right">文章内容</label>
                                    <div class="col-sm-6">
                                        <textarea style="resize: none;height: 100px" id="content" placeholder="" name="content" type="text"><?php echo $article['content']; ?></textarea>
                                    </div>
                                    <p class="help-block col-sm-2 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">保存信息</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Body -->
</div>
<!-- /Page Content -->


<script src="/static/admin//UEditor/ueditor.config.js"></script>
<script src="/static/admin//UEditor/ueditor.all.min.js"></script>
<script src="/static/admin//UEditor/ueditor.parse.min.js"></script>

<script>

    var ue = UE.getEditor('content');

</script>



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