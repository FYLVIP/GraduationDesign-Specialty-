<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>每日新闻速报</title>
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

          <li ><a href="course.php">课程</a></li>

          <li><a href="jobroad.php">职业路径</a></li>
          
          <li class="active"><a href="news.php">新闻</a></li>
          
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
       <div class="container"style="margin-top: 30px">
     <h1>ITMOOC - 新闻阅读</h1>
      <p>接受最新的IT新闻，开源速报，安全预警</p>
    </div>
  </header>
<!---->
<div class="container">
    <!--<hr class="featurette-divider">-->

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">每日开源速报。<span class="text-muted">最新的开源界信息.</span></h2>
          <p class="lead">
       <ul>
				<li>
                <a href="news/new1.php">    WebSocket浅析
                </a>
				</li>
				<li>
                    <a href="news/new2.php">   真爱还是作秀？开发者参与开源项目的理由

                    </a>
				</li>
				<li>
                    <a href="news/new3.php">  VirtualBox 5.1.16 发布，开源虚拟机
                    </a>
				</li>
				<li>
                    <a href="#">  微软开源 Unity 工具包，支持更加沉浸式的室内体验</a>
				</li>
				<li>
                    <a href="#">   IoT黑板报：WiFi或将退出历史舞台</a>
				</li>
				<li>
                    <a href="#">   腾讯云召开“云+视界”大会 直播圈大佬全部出席</a>
				</li>
				<li>
                    <a href="#">  苹果为什么要禁止 JSPatch 等热更新技术？</a>
				</li>

			</ul>

					</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="img/photo/ky.jpg" >
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">每日安全预警。 <span class="text-muted">信息安全的新闻速报</span></h2>
          <p class="lead">

			<ul>
				<li>
                    <a href="#">朝鲜使用先进工具监视公民的数字生活</a>
				</li>
				<li>
                    <a href="#">用Google破解Google的ReCaptchav2 验证码</a>
				</li>
				<li>
                    <a href="#">Burpsuite+SQLMAP双璧合一绕过Token保护的应用进行注入攻击</a>
				</li>
				<li>
                    <a href="#">看我如何发现Facebook注册用户手机号码</a>
				</li>
				<li>
                    <a href="#">无文件Powershell恶意程序使用DNS作为隐蔽信道</a>
				</li>
				<li>
                    <a href="#">OpenSSL心脏出血漏洞全回顾</a>
				</li>
				<li>
                    <a href="#">IoT发展及安全性现状</a>
				</li>

			</ul>

          </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="img/photo/aq.png" >
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">IT界新闻 <span class="text-muted">IT界的新鲜资讯</span></h2>
          <p class="lead">
       <ul>
				<li>
                    <a href="#">SDCC 2017之线上互联网应用架构实战峰会嘉宾、议题和日程大公开</a>
				</li>
				<li>
                    <a href="#">【AI每日播报】滴滴美研落户硅谷</a>
				</li>
				<li>
                    <a href="#">当生命科学遇到云计算：IBM Bluemix 医疗行业应用沙龙</a>
				</li>
				<li>
                    <a href="#">python 20个最热门python源码</a>
				</li>
				<li>
                    <a href="#">iPhone8发布在即</a>
				</li>
				<li>
                    <a href="#">诺基亚即将推出新款手机</a>
				</li>
				<li>
                    <a href="#">ipod touch将退出历史舞台？</a>
				</li>

			</ul>
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block"  alt="500x500" src="img/photo/it.jpg" >
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