<?php
session_start();
require_once("config.php");

//检测登录
if(checklogin()){
  $name=checklogin();
}

if($_SERVER['REQUEST_METHOD']=='POST'){
  $text=text_input($_POST['text']);
  $sl=strlen($text);
  if($sl<9||$sl>600){
    echo "<script>alert('字符数应大于9');</script>";
  }else{
    $sql="insert into message (name,text) values('$name','$text')";
    $res=mysql_query($sql,$con);
    header("location:board.php");
  }
}

//分页
$list=8;//每页数量
$sql="SELECT COUNT(*) FROM message";
$resc=mysql_query($sql,$con);
$count=ceil(mysql_result($resc,0)/8);  //总页数
mysql_free_result($resc);
$num=1;  //第几页
if(isset($_GET['num'])){
  $num=text_input($_GET['num']);
  if($num<1){
    $num=1;
  }elseif($num>$count){
    $num=$count;
  }
}
$star=($num-1)*$list;


?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>IT在线慕课学习</title>
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap/css/carousel.css" rel="stylesheet">

  <style type="text/css">
    <!--
    .user {text-align: center;}
    .user img { width: 100px; height: 100px; margin-top: 6px;}
    .user p { line-height: 25px; margin-top: 8px;}
    .cont { position: relative;}
    .cont .info { position: absolute; left: 6px; bottom: 6px;}
    .cont .info button,.cont .info span{ margin-right: 8px;}
    .cont .info .sdtime { color: #999999; font-style: oblique;}
    .cont .float { position: absolute; right: 10px; bottom: 0;}
    .cont .float p { font-size: 2em; color:#ccc}
  </style>
  <script type="text/javascript">
    <!--
    var sendmeg = function(){
      $.get("checkrepeatname.php?name=login",function(data){
        if(data!=''&&data!=null){
          $("#sendmeg").submit();
        }else{
          alert("您还没有登录！");
        }
      });
    }

    var delmeg = function(id){
      $.post("checkrepeatname.php",{delmeg:id},function(data){
        if(data!='0'){
          alert("您无权限");
        }else{
          window.location.reload();
        }
      });
    }

  </script>

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
          
          <li><a href="news.php">新闻</a></li>
          
          <li class="active"><a href="board.php">留言板</a></li>


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
      <h1>ITMOOC - 留言板</h1>
      <p>发牢骚的地方！</p>
    </div>
  </header>


  <div class="container">
    <table class="table table-bordered">
      <thead>
      <tr>
        <th style="width: 14%">用户</th>
        <th>留言</th>
      </tr>
      </thead>
      <tbody>
      <?php


      $sql="select * from message ORDER BY id DESC limit $star,$list";
      $res=mysql_query($sql,$con);

      while($arr=mysql_fetch_assoc($res)){
        $userid=$arr['id'];
        $name=$arr['name'];
        $sql="select userimg from user where username='$name'";
        $rest=mysql_query($sql,$con);
        $userimg=urldecode(mysql_result($rest,0));
        mysql_free_result($rest);
        echo "<tr>
        <td class='user'><img src='$userimg' class='img-circle'><p>$arr[name]</p></td>
        <td class='cont'><div class='text'>$arr[text]</div>
            <div class='info'>

                <span class='sdtime'>$arr[time]</span>
                <span class='sdtime'><a href='javascript:void(0);' onclick='delmeg($userid);'>删除</a></span></div>
                <div class='float'><p class='text-muted text-right'>#$arr[id]</p></div></td>
    </tr>";
      }
      ?>

      </tbody>
    </table>

    <div class="container text-center">
      <?php
      $pages="<ul class='pagination'><li><a href='".$_SERVER['PHP_SELF']."'>&laquo;</a></li>";
      if($num-2>0){
        $pages.="<li><a href='".$_SERVER['PHP_SELF']."?num=".($num-2)."'>".($num-2)."</a></li>";
      }
      if($num-1>0){
        $pages.="<li><a href='".$_SERVER['PHP_SELF']."?num=".($num-1)."'>".($num-1)."</a></li>";
      }
      $pages.="<li class='active'><a href='".$_SERVER['PHP_SELF']."?num=$num'>$num</a></li>";
      if($num<$count-1){
        $pages.="<li><a href='".$_SERVER['PHP_SELF']."?num=".($num+1)."'>".($num+1)."</a></li><li><a href='".$_SERVER['PHP_SELF']."?num=".($num+2)."'>".($num+2)."</a></li>";
      }
      if($num==$count-1){
        $pages.="<li><a href='".$_SERVER['PHP_SELF']."?num=".($num+1)."'>".($num+1)."</a></li>";
      }
      $pages.="<li><a href='".$_SERVER['PHP_SELF']."?num=$count'>&raquo;</a></li></ul>";
      echo $pages;
      ?>
    </div>
    <form role="form" id="sendmeg" method="post" action="board.php">
      <div class="form-group">
        <label for="name">发表留言</label>
        <textarea class="form-control" rows="3" name="text"></textarea>
      </div>

      <button type="button" class="btn btn-default  pull-right" onclick="sendmeg()">发布</button>
    </form>

  </div>

 
 
 <footer id="footer">
    <div class="container" style="margin-top:100px ">

        Copyleft 2011-2017 14110510522傅彦霖 <a href="mailto:fuyanlin14@nou.com.cn"><span class="glyphicon glyphicon-envelope"></span>IT慕课网</a> All rights reversed.<br>
    </div>
</footer>


  <script src="make/jquery-2.1.1.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>

</body>
</html>