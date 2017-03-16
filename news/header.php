<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>每日新闻速报</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/carousel.css" rel="stylesheet">
  <style>
    .box{
      margin:20px 0;
      text-indent: 2em;
    }
  </style>


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
        <a class="navbar-brand" href="#"><img src="../img/photo/mooc.png" alt="IT慕课" style="width: 60px; height: 20px;"></a>
      </div>
      <div class="navbar-collapse collapse in" id="nav-items" aria-expanded="true"  style="font-size: large">
        <ul class="nav navbar-nav">
          
          <li ><a href="../index.php">首页</a></li>

          <li ><a href="../course.php">课程</a></li>

          <li><a href="../jobroad.php">职业路径</a></li>
          
          <li class="active"><a href="../news.php">新闻</a></li>
          
          <li><a href="../board.php">留言板</a></li>


        </li></ul>
        <ul class="nav navbar-nav navbar-right">



          <li>
            <?php
            if($_SESSION['username']){
              echo  '<a  href="../center.php">'.$_SESSION['username'].'</a>';
            }
            else{
              echo  '<a  href="../login.php">访客，你好！请登录</a>';
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