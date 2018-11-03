<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:62:"E:\Code\blog\public/../application/index\view\artlist\lis.html";i:1532154236;s:54:"E:\Code\blog\application\index\view\common\header.html";i:1532144193;s:52:"E:\Code\blog\application\index\view\common\menu.html";i:1531992882;s:56:"E:\Code\blog\application\index\view\common\position.html";i:1531551421;s:54:"E:\Code\blog\application\index\view\common\footer.html";i:1535716816;}*/ ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
    <title><?php echo $confs['site_name']; ?></title>
    <meta name="description" content="<?php echo $confs['site_name']; ?>" />
    <meta name="keywords" content="<?php echo $confs['site_name']; ?>" />
    <link href="/static/index//style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="/static/index//style/style.css?v=2" />
    <script type="text/javascript" src="/static/index//style/jquery.min.2.0.js"></script>
    <link rel="stylesheet" href="/static/index//style/swiper-3.3.1.min.css" type="text/css" />
    <link rel="stylesheet" href="/static/index//style/swiper.css" type="text/css" />
    <script src="/static/index//style/common.js" type="text/javascript"></script>
    <script src="/static/index//style/bootstrap.js"></script>
    <link rel="stylesheet" href="/static/index//style/list.css?v=1" type="text/css"/>
    <link rel="shortcut icon" href="/static/index//images/ts.png" type="image/x-icon" />
</head>
<style>
    body {
        height: auto;
        display: inline-block;
    }
</style>

<body id="list_style_2" class="list_style_2">
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="/" title=""></a>
                <div class="" id="logo-sub-class"></div>
            </h1>
        </div>
        <div id="navi">
            <ul id="jsddm">
                <li><a class="navi_home" href="http://www.blog.com/">首页</a></li>
                <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <li>
                    <a <?php if($cate['children'] != 0): ?>class="havechild" style="margin-right: 10px;" <?php endif; ?>
                        href="http://www.blog.com/index/<?php if($cate['type'] == 1): ?>artlist/lis/cateid/<?php echo $cate['id']; elseif($cate['type'] == 2): ?>page/index/cateid/<?php echo $cate['id']; elseif($cate['type'] == 3): ?>imglist/lis/cateid/<?php echo $cate['id']; endif; ?>">
                        <?php echo $cate['catename']; ?>
                    </a>
                    <?php if($cate['children'] != 0): ?>
                    <ul>
                        <?php foreach($cate['children'] as $k=>$v){ ?>
                        <li>
                            <a href="http://www.blog.com/index/<?php if($v['type'] == 1): ?>artlist/lis/cateid/<?php echo $v['id']; elseif($v['type'] == 2): ?>page/index/cateid/<?php echo $v['id']; else: ?>imglist/lis/cateid/<?php echo $v['id']; endif; ?>"><?php echo $v['catename']; ?>
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div style="clear: both;"></div>
        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
                    <form name="formsearch" action="<?php echo url('search/index'); ?>" method="get">
                        <input type="hidden" name="" value="0"/>
                        <input name="keywords" type="text" required="required" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" placeholder="输入搜索内容"/>
                    </form>
                </div>
                <div style="float: left;">
                    <img src="/static/index//images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"/></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function subForm() {
        formsearch.submit();
    }
</script>

<div id="wrapper">
    <div id="xh_container">
        <div id="xh_content">
            
<div class="path">
    <a href='http://www.blog.com/'>主页</a> >
    <?php if(is_array($parentsCates) || $parentsCates instanceof \think\Collection || $parentsCates instanceof \think\Paginator): $i = 0; $__LIST__ = $parentsCates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$parentsCate): $mod = ($i % 2 );++$i;?>
    <a href="http://www.blog.com/index/<?php if($parentsCate['type'] == 1): ?>artlist/lis/cateid/<?php echo $parentsCate['id']; elseif($parentsCate['type'] == 2): ?>article/article/cateid/<?php echo $parentsCate['id']; elseif($parentsCate['type'] == 3): ?>imglist/lis/cateid/<?php echo $parentsCate['id']; endif; ?>"><?php echo $parentsCate['catename']; ?></a> >
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">
                <?php  if(($articles->total()==0)) {?>
                <h3 style="text-align: center;line-height: 200px">暂无该栏目文章</h3>
                <?php }if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="<?php echo url('article/article', array('artid'=>$article['id'])); ?>">
                            <?php if($article['thumb']) {?>
                            <img src="http://www.blog.com/<?php echo $article['thumb']; ?>" alt="" height="240" width="400">
                            <?php }else {?>
                            <img src="/static/index//images/default.jpg" alt="" height="240" width="400">
                            <?php }?>
                        </a>
                    </div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="<?php echo url('article/article', array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
                        </h2>
                        <span class="time"><?= date('Y-m-d H:m:s', $article['time']) ?></span>
                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            <?php echo $article['desc']; ?>
                        </div>
                        <div class="b">
                            <a href="<?php echo url('article/article', array('artid'=>$article['id'])); ?>" class="xh_readmore" rel="nofollow">read more</a>
                            <span class="xh_love">
                                <span class="textcontainer">
                                    <span style="color: #999;margin-right: 20px"><?php echo $article['like']; ?></span>
                                </span>
                            </span>
                            <span style="color: #999;" class="xh_views"><?php echo $article['click']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                <div style="text-align: right">
                    <?php if($articles->total()>0) {?>
                    <div class="pages" style="float: right;line-height: 70px;margin-left: 15px">共
                        <?php echo $articles->lastPage(); ?> 页，<?php echo $articles->total(); ?> 条
                    </div>
                    <?php }?>
                    <div style="float: right">
                        <?php echo $articles->render();; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="xh_sidebar">
            <!-- 右侧 -->
            <div class="widget">
                <?php if(!empty($hotArticles)) {?>
                <div style="background: url('/static/index//images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
                    <?php }?>
                </div>
                <ul id="ulHot">
                    <?php if(is_array($hotArticles) || $hotArticles instanceof \think\Collection || $hotArticles instanceof \think\Paginator): $i = 0; $__LIST__ = $hotArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotArticle): $mod = ($i % 2 );++$i;?>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;">
                            <a href="<?php echo url('article/article', array('artid'=>$hotArticle['id'])); ?>" target="_blank">
                                <?php if($hotArticle['thumb']) {?>
                                <img src="http://www.blog.com/<?php echo $hotArticle['thumb']; ?>" style="width: 84px;height: 55px"/>
                                <?php }else {?>
                                <img src="/static/index//images/default.jpg" style="width: 84px;height: 55px"/>
                                <?php }?>
                            </a>
                        </div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;">
                            <a href="<?php echo url('article/article', array('artid'=>$hotArticle['id'])); ?>" target="_blank" title=""><?php echo $hotArticle['title']; ?></a>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>

        </div>
        <div class="clear"></div>
    </div>

</div>


<div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">
            <ul class="menu">
                <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                    <a href="http://www.blog.com//index/page/index/cateid/7">关于我</a>
                </li>
            </ul>
        </div>
        <div class="footer_info">
            <span class="legal" style="color: #555">Copyright &#169; 2018 Echeverra 津ICP备18006010号.
                <a href="#"></a>
            </span>
        </div>
    </div>
</div>

<script src="/static/index//style/main.js?v=1" type="text/javascript"></script>
<script src="/static/index//style/swiper-3.3.1.min.js" type="text/javascript"></script>

</body>
</html>

