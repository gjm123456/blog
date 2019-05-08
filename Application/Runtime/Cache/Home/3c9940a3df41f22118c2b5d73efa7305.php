<?php if (!defined('THINK_PATH')) exit();?><nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">
              Toggle navigation
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="<?php echo PUBLIC_HOME ?>assets/img/logo.png" class="logo"/>
            </a>
        </div>
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav header-menu">
                <li>
                    <a href="/blog/index.php/Home/Index/index">
                        首页
                    </a>
                </li>
                <li>
                    <a href="/blog/index.php/Home/Index/about.html">
                        关于
                    </a>
                </li>
                <li>
                    <a href="/blog/index.php/Home/Index/blog.html">
                        博客
                    </a>
                </li>
                <li>
                    <a href="/blog/index.php/Home/Index/works.html">
                        作品
                    </a>
                </li>
                <li>
                    <a href="/blog/index.php/Home/Index/links.html">
                        链接
                    </a>
                </li>
                <li>
                    <a href="/blog/index.php/Home/Index/contact.html">
                        联系
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!DOCTYPE html>
<html lang="cn" dir="ltr" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="maximum-scale=1.0,width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>异步 </title>
    <link href="<?php echo PUBLIC_HOME ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo PUBLIC_HOME ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo PUBLIC_HOME ?>assets/css/nprogress.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo PUBLIC_HOME ?>assets/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo PUBLIC_HOME ?>assets/css/default.css" type="text/css" media="screen" />
    <script src="<?php echo PUBLIC_HOME ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo PUBLIC_HOME ?>assets/js/jquery.nivo.slider.pack.js"></script>
    <script src="<?php echo PUBLIC_HOME ?>assets/js/nprogress.js"></script>
</head>

<body>
<!--Start banner img-->
<div class="container-filed" id="banner_container">
    <div class="row">
        <div class="col-md-12">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/owl.jpg" data-thumb="<?php echo PUBLIC_HOME ?>assets/img/owl.jpg" alt="" />
                    <a href="<?php echo PUBLIC_HOME ?>assets/img/owl2.jpg"><img src="<?php echo PUBLIC_HOME ?>assets/img/owl2.jpg" alt="" /></a>
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/owl.jpg" data-thumb="<?php echo PUBLIC_HOME ?>assets/img/owl.jpg" alt="" />
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/owl2.jpg" data-thumb="<?php echo PUBLIC_HOME ?>assets/img/owl2.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--End banner img-->
<div class="container-fluid main-container" id="main-container">
    <div class="row top-title">
        <div class="col-md-12">
            <h1 class="page-title">
                友情链接
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 post-container">
            <h2 class="post-title">
                <a href="links.php">
                    友情链接
                </a>
            </h2>
            <div class="post-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <img src="assets/img/Link.png" />
                            <div class="caption">
                                <h3>
                                    友情链接
                                </h3>
                                <p>
                                嘿,baby,这里是存放友情链接的地方,你可以在这里存储对您重要的友情链接，然后将其他友情链接存入一个单独的页面．
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group" id="site-link-list">
                    <a class="list-group-item" target="_blank" href="javascript:if(confirm('点击确定将跳转'))window.location='http://www.ybsat.com/'">
                        <h4 class="list-group-item-heading">
                            <i class="fa fa-link">
                            </i>
                            异步
                        </h4>
                        <p class="list-group-item-text">
                            异步
                        </p>
                    </a>
                </div>
                <div class="list-group" id="site-link-list">
                    <a class="list-group-item" target="_blank" href="javascript:if(confirm('点击确定将跳转'))window.location='http://www.ybsat.com/'">
                        <h4 class="list-group-item-heading">
                            <i class="fa fa-link">
                            </i>
                            异步
                        </h4>
                        <p class="list-group-item-text">
                            异步
                        </p>
                    </a>
                </div>
                <div class="list-group" id="site-link-list">
                    <a class="list-group-item" target="_blank" href="javascript:if(confirm('点击确定将跳转'))window.location='http://www.ybsat.com/'">
                        <h4 class="list-group-item-heading">
                            <i class="fa fa-link">
                            </i>
                            异步
                        </h4>
                        <p class="list-group-item-text">
                            异步
                        </p>
                    </a>
                </div>
                <div class="list-group" id="site-link-list">
                    <a class="list-group-item" target="_blank" href="javascript:if(confirm('点击确定将跳转'))window.location='http://www.ybsat.com/'">
                        <h4 class="list-group-item-heading">
                            <i class="fa fa-link">
                            </i>
                            异步
                        </h4>
                        <p class="list-group-item-text">
                            异步
                        </p>
                    </a>
                </div>
                <div class="list-group" id="site-link-list">
                    <a class="list-group-item" target="_blank" href="javascript:if(confirm('点击确定将跳转'))window.location='http://www.ybsat.com/'">
                        <h4 class="list-group-item-heading">
                            <i class="fa fa-link">
                            </i>
                            异步
                        </h4>
                        <p class="list-group-item-text">
                            异步
                        </p>
                    </a>
                </div>
            </div>
            <div class="meta-box">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
    </div>
    <footer>
        <!--版权信息-->
        <div class="copyright">
            Copyright Ybsat ©2016 All rights reserved <a href="http://www.mycodes.net/" target="_blank">源码之家</a>&nbsp;&nbsp;
            <a href="www.ybsat.com">
                Theme leaves by Ybsat
            </a>
        </div>
    </footer>
</div>
<script src="<?php echo PUBLIC_HOME ?>assets/js/bootstrap.min.js"></script>
<script>
        /*banner 初始化*/
        $(window).load(function() {
         $('#slider').nivoSlider({
            effect: 'random',        // 过渡效果
            controlNav: false,       // 是否显示图片导航控制按钮（,2,3... ）
            pauseOnHover: true,      // 鼠标县浮时是否停止动画
            manualAdvance: false,    // 是否手动切换 
            animSpeed: 100,          // 图片过渡时间   
            pauseTime: 2000,         // 图片显示时间
            pauseOnHover: false,
            manualAdvance: false,
        });
        });
    $(document).ready(function(){
        $('body').show();
        $('.version').text(NProgress.version);
        NProgress.start();
        setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
    })
    
</script>
</body>

</html>
<div class="leftbar">
    <!-- 左菜单 -->
    <div class="left_menu">
        <ul class="menu_link">
            <li>
                <a href="" class="simptip-position-right simptip-smooth simptip-movable"
                   data-toggle="tooltip" data-placement="right" title="登陆">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/login.png">
              <span>
                自定义链接
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
            <li data-toggle="tooltip" data-placement="right" title="博客">
                <a href="" class="simptip-position-right simptip-smooth simptip-movable"
                   target="_black">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/login.png">
              <span>
                注册
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="simptip-position-right simptip-smooth simptip-movable">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/login.png">
              <span>
                自定义链接
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="simptip-position-right simptip-smooth simptip-movable"
                   data-tooltip="自定义链接">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/login.png">
              <span>
                自定义链接
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="simptip-position-right simptip-smooth simptip-movable"
                   data-tooltip="自定义链接">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/login.png">
              <span>
                自定义链接
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="simptip-position-right simptip-smooth simptip-movable"
                   data-tooltip="自定义链接">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/login.png">
              <span>
                自定义链接
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="simptip-position-right simptip-smooth simptip-movable"
                   data-tooltip="自定义链接">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/login.png">
              <span>
                自定义链接
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="simptip-position-right simptip-smooth simptip-movable"
                   data-tooltip="自定义链接">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/login.png">
              <span>
                自定义链接
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="simptip-position-right simptip-smooth simptip-movable"
                   data-tooltip="自定义链接">
                    <img src="<?php echo PUBLIC_HOME ?>assets/img/login.png">
              <span>
                自定义链接
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>