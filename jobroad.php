<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>职业路径图</title>
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap/css/carousel.css" rel="stylesheet">
</head>
<body>
<div>
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

          <li class="active"><a href="jobroad.php">职业路径</a></li>
          
          <li><a href="news.php">新闻</a></li>
          
          <li ><a href="board.php">留言板</a></li>



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
      <h1>ITMOOC - 职业路径图</h1>
      <p>学习目标不再盲目！</p>
    </div>
  </header>

<!--  -->
<div class="container ">

      <div class="row">
        <div class="col-lg-4">
          <a href="jobboard/qianduan.php"> <img class="img-circle" src="img/photo/1.png" alt="Generic placeholder image" width="140" height="140">
          </a>
            <h2><a style='color:#777777'href="jobboard/qianduan.php">前端工程师</a></h2>
          <p>比较新流行的技术，目前市场需求高的职业之一</p>

        </div>
        <div class="col-lg-4">
          <a href="jobboard/php.php"><img class="img-circle" src="img/photo/2.png" alt="Generic placeholder image" width="140" height="140">
        </a>
          <h2><a style='color:#777777'href="jobboard/php.php">PHP工程师</a></h2>
          <p>最好的开发语言，没有之一！需求量最大的职业选择，多快好省，网站必备！</p>
        </div>
        <div class="col-lg-4">
          <a href="jobboard/java.php"><img class="img-circle" src="img/photo/3.png" alt="Generic placeholder image" width="140" height="140">
          </a>
            <h2><a style='color:#777777'href="jobboard/java.php">Java工程师</a></h2>
          <p>Java语言在Web开发领域的实现，作为Java工程师的你，再也不用劳烦PHP的兄弟了。</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <a href="jobboard/android.php"><img class="img-circle" src="img/photo/4.png" alt="Generic placeholder image" width="140" height="140">
          </a>
          <h2><a style='color:#777777'href="jobboard/android.php">Android工程师</a></h2>
          <p>需求最大的移动开发方向，从Java基础开始学习，分阶段逐步掌握Android开发的各项技能，月薪3万不是梦。</p>
        </div>
        <div class="col-lg-4">
          <a href="jobboard/ios.php"><img class="img-circle" src="img/photo/5.png" alt="Generic placeholder image" width="140" height="140">
          </a>
            <h2><a style='color:#777777'href="jobboard/ios.php">iOS开发工程师</a></h2>
          <p>从事iOS移动应用开发、游戏开发等工作，或成为iOS平台应用开发和测试的专业技术人员，月薪3万向你招手。</p>
        </div>
        <div class="col-lg-4">
        <a href="jobboard/asp.php"> <img class="img-circle" src="img/photo/6.png" alt="Generic placeholder image" width="140" height="140"></a>
          <h2><a style='color:#777777'href="jobboard/asp.php">ASP.NET工程师</a></h2>
          <p>如果掌握了“职业路径图”中的所有技术需求，你将成为一名合格的.net工程师</p>
        </div>
      </div>

        <div class="row">
        <div class="col-lg-4">
          <a href="jobboard/safe.php"><img class="img-circle" src="img/photo/7.png" alt="Generic placeholder image" width="140" height="140">
          </a>
            <h2><a style='color:#777777'href="jobboard/safe.php">安全工程师</a></h2>
          <p>在当今网络安全变得日趋重要的年代，你能否胜任维护公司网络安全的重任？？</p>
        </div>
        <div class="col-lg-4">
          <a href="jobboard/yunwei.php"><img class="img-circle" src="img/photo/8.png" alt="Generic placeholder image" width="140" height="140">
          </a>
            <h2><a style='color:#777777'href="jobboard/yunwei.php">运维工程师</a></h2>
          <p>运维工程师下分：DBA,网络工程师，系统工程师等业务运营的维护者</p>
        </div>
        <div class="col-lg-4">
          <a href="jobboard/bigdata.php"><img class="img-circle" src="img/photo/9.png" alt="Generic placeholder image" width="140" height="140">
          </a>
            <h2><a style='color:#777777'href="jobboard/bigdata.php">大数据工程师</a></h2>
          <p>你将成为一名合格的大数据工程师，可以从事大数据的相关工作</p>
        </div>
      </div>
<!--  -->


<footer id="footer">
    <div class="container">

        Copyleft 2011-2017 14110510522傅彦霖 <a href="mailto:fuyanlin14@nou.com.cn"><span class="glyphicon glyphicon-envelope"></span>IT慕课网</a> All rights reversed.<br>
    </div>
</footer>


  <script src="make/jquery-2.1.1.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>

</body>
</html>