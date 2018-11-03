<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"E:\Code\blog\public/../application/index\view\index\index.html";i:1532160438;s:54:"E:\Code\blog\application\index\view\common\header.html";i:1532144193;s:52:"E:\Code\blog\application\index\view\common\menu.html";i:1531992882;s:54:"E:\Code\blog\application\index\view\common\footer.html";i:1535716816;}*/ ?>

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

<style>
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
    }
    .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
        bottom: 30px;
         left: auto;
        width: 25%;
        right: 0;
    }
    .swiper-container {
        width: 800px;
        height: 480px;
        float:left
    }
    .swiper-slide {
        width: 800px;
        height: 480px;
        position: relative;
    }
    .banner-title {
        position: absolute;
        width: 600px;
        height: 40px;
        padding-top: 10px;
        line-height: 1.5;
        overflow: hidden;
        left: 0;
        bottom: 0;
        text-align: left;
        padding-left: 50px;
        background: -webkit-linear-gradient(left, rgba(0,0,0,.4) , rgba(0,0,0,0)); /* Safari 5.1 - 6.0 */
        background: -o-linear-gradient(right, rgba(0,0,0,.4) , rgba(0,0,0,0)); /* Opera 11.1 - 12.0 */
        background: -moz-linear-gradient(right, rgba(0,0,0,.4) , rgba(0,0,0,0)); /* Firefox 3.6 - 15 */
        background: linear-gradient(to right, rgba(0,0,0,.4) , rgba(0,0,0,0)); /* 标准的语法 */
        color: #fff;
    }
    .swiper-slide img {
        width: 800px;
        height: 480px;
    }
    .swiper-button-next {
        background: url("/static/index/images/swiper_button.png") no-repeat;
        background-position: -84px 0;
        height: 55px;
    }
    .swiper-button-prev {
        background: url("/static/index/images/swiper_button.png") no-repeat;
        background-position: 0 0;
        height: 55px;
    }
    .swiper-container {
        z-index: 0;
    }
</style>

<body class="xh_body">

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

<div id="xh_wrapper">
       
<input type="hidden" id="hdUrlFocus" />
    <div class="xh_h_show">
        <div class="xh_h_show_in">

            <!--swiper常规版-->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if(is_array($recommendArticles) || $recommendArticles instanceof \think\Collection || $recommendArticles instanceof \think\Paginator): $i = 0; $__LIST__ = $recommendArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recommendArticle): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide">
                        <a href="<?php echo url('article/article', array('artid'=>$recommendArticle['id'])); ?>">
                            <?php if($recommendArticle['thumb']) {?>
                            <img onclick="articleJump(<?php echo $recommendArticle['id']; ?>)" src="http://www.blog.com/<?php echo $recommendArticle['thumb']; ?>">
                            <?php }else {?>
                            <img onclick="articleJump(<?php echo $recommendArticle['id']; ?>)" src="/static/index//images/default.jpg">
                            <?php }?>
                        <span class="banner-title"><?php echo $recommendArticle['title']; ?></span>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

                <!--添加分页器-->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!--添加前后按钮-->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!--滚动条-->
                <!--<div class="swiper-scrollbar"></div>-->
            </div>

            <div id="picshow_right" style="width: 340px;height: 480px;background: #fff">
                <!--<h2>终极三问之:</h2>-->
                <!--<p>1.我是谁？</p>-->
                <!--<p>2.我在哪儿？</p>-->
                <!--<p>3.我在干什么</p>-->
                <img style="width: 340px;height: 480px" src="/static/index//images/mi.jpg" alt="">
      <!--<a href="/life/416.html" target="_blank">-->
    <!--<img src="/static/index//images/1-140206160415Y6.jpg" alt="COACH再度携手王力宏 踩单车演" width="255px" height="420px"></a>-->
   <!---->
            <!--<div id="picshow_right_cover" onclick="goanewurl()" style="cursor:pointer;position:absolute;top:495px;font-size:14px;width:213px;height:45px;line-height:45px;padding-left:42px;color:#ffffff;zoom:1;background-image:url(/static/index//images/focus-left-bg.png); background-repeat:no-repeat; background-color:#01A1ED;"></div>-->
            <!--</div>-->
        </div>
    <div class="clear"></div>
    </div>
    </div>
    <div id="xh_container">
    <a name="new"></a>
        <div id="xh_content" style="padding-right:10px;">
            <div class="xh_area_h_3">
                <div class="xh_area_title">
                    <a href="javascript:" class="t"></a>
                    <span class="r">
                        <?php if(is_array($navCates) || $navCates instanceof \think\Collection || $navCates instanceof \think\Paginator): $i = 0; $__LIST__ = $navCates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navCate): $mod = ($i % 2 );++$i;?>
                            <a href="http://www.blog.com/index/<?php if($navCate['type'] == 1): ?>artlist/lis/cateid/<?php echo $navCate['id']; elseif($navCate['type'] == 2): ?>article/article/cateid/<?php echo $navCate['id']; elseif($navCate['type'] == 3): ?>imglist/lis/cateid/<?php echo $navCate['id']; endif; ?>">
                                <?php echo $navCate['catename']; ?>
                            </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                     </span>
                </div>
                <br>

                <?php if(is_array($newArticles) || $newArticles instanceof \think\Collection || $newArticles instanceof \think\Paginator): $i = 0; $__LIST__ = $newArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newArticle): $mod = ($i % 2 );++$i;?>
                <div class="xh_post_h_3 ofh">
                    <div class="xh_265x265">
                        <a target="_blank" href="<?php echo url('article/article', array('artid'=>$newArticle['id'])); ?>">
                            <?php if($newArticle['thumb']) {?>
                            <img src="http://www.blog.com/<?php echo $newArticle['thumb']; ?>" alt="" height="240" width="400">
                            <?php }else {?>
                            <img src="/static/index//images/default.jpg" alt="" height="240" width="400">
                            <?php }?>
                        </a>
                    </div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh">
                            <a target="_blank" class="index-title" href="<?php echo url('article/article', array('artid'=>$newArticle['id'])); ?>" title=""><?php echo $newArticle['title']; ?></a>
                        </h2>
                        <span class="time"><?= date('Y-m-d H:m:s', $newArticle['time']) ?></span>
                        <div class="xh_post_h_3_entry ofh" style="height: 80px"><?php echo $newArticle['desc']; ?></div>
                        <div class="b">
                            <a href="<?php echo url('article/article', array('artid'=>$newArticle['id'])); ?>" class="xh_readmore" rel="nofollow">read more</a>
                            <span class="xh_love">
                                <span class="textcontainer">
                                    <span style="margin-right: 15px"><?php echo $newArticle['like']; ?></span>
                                </span>
                                <span class="bartext"></span>
                            </span>
                            <span class="xh_views"><?php echo $newArticle['click']; ?></span>
                        </div>
                    </div>
                    <span class="cat">
                        <a href="http://www.blog.com/index/<?php if($newArticle['type'] == 1): ?>artlist/lis/cateid/<?php echo $newArticle['cateid']; elseif($newArticle['type'] == 2): ?>article/article/cateid/<?php echo $newArticle['cateid']; elseif($newArticle['type'] == 3): ?>imglist/lis/cateid/<?php echo $newArticle['cateid']; endif; ?>"
                           title="查看<?php echo $newArticle['catename']; ?>中的全部文章" rel="category tag"><?php echo $newArticle['catename']; ?>
                        </a>
                    </span>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div id="xh_sidebar">

         <div class="widget">

             <div style="background: url('/static/index//images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
             </div>
             <ul id="ulHot">
                 <?php if(is_array($hotIndexArticles) || $hotIndexArticles instanceof \think\Collection || $hotIndexArticles instanceof \think\Paginator): $i = 0; $__LIST__ = $hotIndexArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotIndexArticle): $mod = ($i % 2 );++$i;?>
                 <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                     <div style="float:left;width:85px;height:55px; overflow:hidden;">
                         <a href="<?php echo url('article/article', array('artid'=>$hotIndexArticle['id'])); ?>" target="_blank">
                             <?php if($hotIndexArticle['thumb']) {?>
                             <img src="http://www.blog.com/<?php echo $hotIndexArticle['thumb']; ?>" style="width: 84px;height: 55px"/>
                             <?php }else {?>
                             <img src="/static/index//images/default.jpg" style="width: 84px;height: 55px"/>
                             <?php }?>
                         </a>
                     </div>
                     <div style="float:right;width:145px;height:52px; overflow:hidden;">
                         <a href="<?php echo url('article/article', array('artid'=>$hotIndexArticle['id'])); ?>" target="_blank">
                             <?php echo $hotIndexArticle['title']; ?>
                         </a>
                     </div>
                 </li>
                 <?php endforeach; endif; else: echo "" ;endif; ?>
             </ul>
                </div>

            <div class="widget links">
                <h3></h3>
                <ul>
                    <?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
                    <li><a href='<?php echo $link['url']; ?>' style="display: block" target='_blank'><?php echo $link['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
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


<script type="text/javascript">

    function articleJump(artid) {
        window.open('http://www.blog.com//index/article/article/artid/'+artid);
    }

    $(function () {

        // cutWords($('.index-title'), 2);
        // cutWords($('.index-desc'), 3);

        //swiper常规版
        var mySwiperHorizontal = new Swiper('.swiper-container', {
            direction: 'horizontal', //横版竖版
            autoplay: 3000, //设置自动轮播时间
            speed: 600, //设置速度
            loop: true,  //循环轮播
            pagination: '.swiper-pagination', //分页器
            prevButton: '.swiper-button-prev', //前按钮
            nextButton: '.swiper-button-next', //后按钮
            paginationClickable: 'swiper-pagination', //可点击导航器
            keyboardControl: false, //键盘控制
            mousewheelControl: false, //鼠标控制


//        slidesPerView : 3, //显示图片数量,图片宽度不一致设置auto时自动分组
//        spaceBetween: 30, //slider之间距离,可与slidesPerView配合使用
//        centeredSlides: true, //多个slidesPerView时居中
//        slidesPerColumn: 2, //设置多行
//        scrollbar: '.swiper-scrollbar', //显示滚动条
//        scrollbarHide: true,//隐藏滚动条
//        grabCursor: true, //鼠标手状
//        direction: 'vertical', //横版竖版
//        freeMode: true, //不整块翻动
//        paginationType: 'progress', //显示进度条
//        autoHeight: true, //自适应图片高度


//        paginationBulletRender: function (index, className) { //更改导航显示1
//            return '<span class="' + className + '">' + (index + 1) + '</span>';
//        },
//        paginationType: 'fraction', //更改导航显示2


//        动画效果
//                 effect: 'fade', //1.渐变效果

            effect: 'cube', //2.3D方块效果
            cube: {
                shadow: false,  //3D方块显示阴影
                slideShadows: false,
                shadowOffset: 20, //3D方块阴影距底部距离
                shadowScale: 0.9
            },

            // effect: 'flip', //3.3D翻转效果
            //
            // effect: 'coverflow', //4.3D覆盖流,设置centeredSlides显示第一个
            // coverflow: {
            //     rotate: 50,
            //     stretch: 0,
            //     depth: 100,
            //     modifier: 1,
            //     slideShadows : true
            // },

        });
    });


</script>

