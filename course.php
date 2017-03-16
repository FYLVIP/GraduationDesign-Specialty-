<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>IT在线慕课学习</title>
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap/css/carousel.css" rel="stylesheet">

</head>
<body>
<div >
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    <!-- container 去掉则向左右分散-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-items" aria-expanded="true">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/photo/mooc.png" alt="IT慕课" style="width: 60px; height: 20px;"></a>
      </div>
      <div class="navbar-collapse collapse in" id="nav-items" aria-expanded="true"  style="font-size: large">
        <ul class="nav navbar-nav">
          
          <li ><a href="index.php">首页</a></li>

          <li class="active"><a href="course.php">课程</a></li>

          <li><a href="jobroad.php">职业路径</a></li>
          
          <li><a href="news.php">新闻</a></li>
          
          <li><a href="board.php">留言板</a></li>


        </li></ul>
        <ul class="nav navbar-nav navbar-right">



          <li>
              <?php
              if($_SESSION['username']){
                  echo  '<a  href="center.php">'.$_SESSION['username'].'</a>';
              }
              else{
                  echo  '<a  href="login.php">访客，你好！请登录</a>';
              }
              ?>
          </li>
          </ul>
             <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary">搜索</button>
        </form>
      </div>
    </div>
  </nav>
   <header class="jumbotron">
     <div class="container" style="margin-top: 30px">
      <h1>ITMOOC - 课程概要</h1>
      <p>海量课程任你挑选！</p>
    </div>
  </header>

    <div class="container bs-example bs-example-tabs" data-example-id="togglable-tabs">
        <ul id="myTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#qd" id="qd-tab" role="tab" data-toggle="tab" aria-controls="qd" aria-expanded="false">前端</a></li>
            <li role="presentation" class=""><a href="#hd" role="tab" id="hd-tab" data-toggle="tab" aria-controls="hd" aria-expanded="true">后端</a></li>
            <li role="presentation" class=""><a href="#aq" role="tab" id="aq-tab" data-toggle="tab" aria-controls="aq" aria-expanded="true">安全</a></li>
            <li role="presentation" class=""><a href="#yw" role="tab" id="yw-tab" data-toggle="tab" aria-controls="yw" aria-expanded="true">运维&测试</a></li>
            <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">移动开发</a></li>

        </ul>
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="qd" aria-labelledby="qd-tab">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="page-header">
                            <h1>
                               H5到JS，前端必修
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/qd1.jpg" />
                                    <div class="caption">
                                        <h3>
                                            HTML5特性
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/qd1.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/qd2.jpg" />
                                    <div class="caption">
                                        <h3>
                                            CSS3特性
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/qd2.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/qd3.jpg" />
                                    <div class="caption">
                                        <h3>
                                            面向对象的CSS
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/qd4.jpg" />
                                    <div class="caption">
                                        <h3>
                                            H5的各种API
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-info pull-right" style="margin-right: 15px">查看更多</button>
                        </div>
                    </div>
                </div>
            </div>


            <div role="tabpanel" class="tab-pane fade " id="hd" aria-labelledby="hd-tab">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="page-header">
                            <h1>
                                PHP&Python&JSP&NSP为主流的技术
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/hd1.jpg" />
                                    <div class="caption">
                                        <h3>
                                           PHP登录页面制作
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/cr1.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/hd2.jpg" />
                                    <div class="caption">
                                        <h3>
                                            JAVA web的使用环境
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/cr2.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/hd3.jpg" />
                                    <div class="caption">
                                        <h3>
                                            Python网络爬虫
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/hd4.jpg" />
                                    <div class="caption">
                                        <h3>
                                            java的设计模式
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade " id="aq" aria-labelledby="aq-tab">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="page-header">
                            <h1>
                                安全工程师必修
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/aq1.jpg" />
                                    <div class="caption">
                                        <h3>
                                           网站登录模块加固
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/aq1.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/aq2.jpg" />
                                    <div class="caption">
                                        <h3>
                                            安全协议认证服务
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/aq2.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/aq3.jpg" />
                                    <div class="caption">
                                        <h3>
                                            OpenStack云安全
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/aq4.jpg" />
                                    <div class="caption">
                                        <h3>
                                            Nrpe监控
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade " id="yw" aria-labelledby="yw-tab">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="page-header">
                            <h1>
                                运维工程师必修
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/yw1.jpg" />
                                    <div class="caption">
                                        <h3>
                                            Oracle初级
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/yw1.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/yw2.jpg" />
                                    <div class="caption">
                                        <h3>
                                            VPN的几种架构
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/yw2.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/yw3.jpg" />
                                    <div class="caption">
                                        <h3>
                                            FTP服务器部署
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/yw4.jpg" />
                                    <div class="caption">
                                        <h3>
                                            MongoDB简介
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade " id="profile" aria-labelledby="profile-tab">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="page-header">
                            <h1>
                                以安卓和ios为主的移动开发
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/az1.jpg" />
                                    <div class="caption">
                                        <h3>
                                            Android基本布局
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/yd1.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/az2.jpg" />
                                    <div class="caption">
                                        <h3>
                                            Android多点触摸
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="coursera/yd2.php">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/ios1.jpg" />
                                    <div class="caption">
                                        <h3>
                                            ios适配器
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/kcimg/ios2.jpg" />
                                    <div class="caption">
                                        <h3>
                                            ios开发者的自我修养
                                        </h3>
                                        <p>
                                            <a class="btn btn-primary" href="#">开始学习</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
<!--     方框课程   -->
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="page-header">
                    <h1>
                        精选课程
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img alt="300x200" src="img/kcimg/az3.jpg" />
                            <div class="caption">
                                <h3>
                                    HTTP技术简介
                                </h3>
                                <p>
                                    <a class="btn btn-primary" href="coursera/cr1.php">开始学习</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img alt="300x200" src="img/kcimg/az4.jpg" />
                            <div class="caption">
                                <h3>
                                   NFC技术探寻
                                </h3>
                                <p>
                                    <a class="btn btn-primary" href="coursera/cr2.php">开始学习</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img alt="300x200" src="img/kcimg/ios3.jpg" />
                            <div class="caption">
                                <h3>
                                   定位API简介
                                </h3>
                                <p>
                                    <a class="btn btn-primary" href="#">开始学习</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img alt="300x200" src="img/kcimg/ios4.jpg" />
                            <div class="caption">
                                <h3>
                                    ios的设计模式
                                </h3>
                                <p>
                                    <a class="btn btn-primary" href="#">开始学习</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
 
 
 
 <footer id="footer">
    <div class="container">

        Copyleft 2011-2017 14110510522傅彦霖 <a href="mailto:fuyanlin14@nou.com.cn"><span class="glyphicon glyphicon-envelope"></span>IT慕课网</a> All rights reversed.<br>
    </div>
</footer>


  <script src="make/jquery-2.1.1.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
