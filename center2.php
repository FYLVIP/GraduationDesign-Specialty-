<?php
session_start();
require_once("config.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        <!--
        .mt16 {margin-top: 16px;}
        .userimg { width: 100px; height: 100px; margin: 10px 0;}


    </style>
    <script type="text/javascript">


        var out = function(){
            $.get("checkrepeatname.php?name=out",function(data){
                if(data!=''&&data!=null){
                    window.location.reload();
                }else{
                    alert("注销失败");
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

                    <li><a href="course.php">课程</a></li>

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
                if(checklogin()){
                    $name=checklogin();;
                    //用户头像
                    $sql="select userimg from user where username='$name'";
                    $rest=mysql_query($sql,$con);
                    $userimg=urldecode(mysql_result($rest,0));
                    mysql_free_result($rest);
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
            <h1>ITMOOC - 个人中心</h1>
            <p>就是个人中心！</p>
        </div>
    </header>

<!---->
<?php
////检测登录
//if(checklogin()){
//    $name=checklogin();
//    echo "<div class='container text-right'>欢迎你，<a href='center.php'>$name</a>,&nbsp;&nbsp;<a href='javascript:void(0);' onclick='out()'>退出</a></div>";
//    //用户头像
//    $sql="select userimg from user where username='$name'";
//    $rest=mysql_query($sql,$con);
//    $userimg=urldecode(mysql_result($rest,0));
//    mysql_free_result($rest);
//}
//
//?>

<div class="container">
<!--    <h1>用户中心</h1>-->
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="center.php">修改头像</a></li>
                <li class="list-group-item active">我的收藏</li>
<!--                <li class="list-group-item">修改资料</li>-->
                <li class="list-group-item"><a href='javascript:void(0);' onclick='out()'>用户退出</a></li>


            </ul>
        </div>
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    收藏的课程
                </div>
                <div class="panel-body">
                    您收藏的课程：
                    <br>
                    <video width="500px" controls class="vid" style="display: none">
                        <source src="../video/google.mp4" type="video/mp4" id="v">
                        您的浏览器不支持 HTML5 video 标签。
                    </video>
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
    <script src="session.js"></script>
    <script>
        if($.session.get("video")){
            $(".vid").show();
        }
    </script>

</body>
</html>