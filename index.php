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
      <div class="navbar-collapse collapse in" id="nav-items" style="font-size: large">
        <ul class="nav navbar-nav">
          
         <li class="active"><a href="index.php">首页</a></li>

          <li ><a href="course.php">课程</a></li>

          <li><a href="jobroad.php">职业路径</a></li>
          
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

<!---------------------------------->

  <div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarouse1" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <img class="first-slide" src="img/photo/in1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
<!--                        <h1><kbd>Docker实践</kbd></h1>-->
<!--                        <p><a class="btn btn-lg btn-primary" href="#" role="button">对，点我</a></p>-->
                    </div>
                </div>
            </div>
            <div class="item active">
                <img class="second-slide" src="img/photo/in2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
<!--                        <h1><a href="hunong.html"><kbd>Linux源镜像配置说明</kbd><a></h1>-->
<!--                        <p><a class="btn btn-lg btn-primary" href="#" role="button">对，点我</a></p>-->
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="img/photo/in3.jpg" alt="Third slide" >
                <div class="container">
                    <div class="carousel-caption">
<!--                        <h1>招商</h1>-->
<!--                        <p><a class="btn btn-lg btn-primary" href="#" role="button">招商</a></p>-->
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
  <!-- 首页课程-->
  <div class="container">
      <div class="page-header">
  	<h1>每日推荐</h1>
      </div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row">
				<div class="col-md-3">
					<div class="thumbnail">
						<img alt="300x200" src="img/kcimg/in1.jpg"/>
						<div class="caption">
							<h3>
								GOOGLE I/O 大会
							</h3>
							<p>
								 <a class="btn btn-primary" href="coursera/coursera1.php">开始学习</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img alt="300x200" src="img/kcimg/in2.jpg"  />
						<div class="caption">
							<h3>
								J2EE的开发实践
							</h3>

							<p>
								 <a class="btn btn-primary" href="#">开始学习</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img alt="300x200" src="img/kcimg/in3.jpg" />
						<div class="caption">
							<h3>
								HTML5本地数据库
							</h3>

							<p>
								 <a class="btn btn-primary" href="#">开始学习</a>
							</p>
						</div>
					</div>
				</div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img alt="300x200" src="img/kcimg/in4.jpg"/>
                        <div class="caption">
                            <h3>
                               Sass的应用
                            </h3>
                            <p>
                                <a class="btn btn-primary" href="coursera/coursera1.php">开始学习</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
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