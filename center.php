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
    <script type="text/javascript">
        function imgsd1(){
            var imgval=$(":radio[name='img01']:checked").val();
            if(imgval){
                $.get("checkrepeatname.php?name=login",function(data){
                    if(data!=''&&data!=null){
                        $.post("checkrepeatname.php",{imgid:imgval},function(data2){
                            if(data2){
                                window.location.reload();
                            }else{
                                alert("修改失败");
                            }
                        });
                    }else{
                        alert("您还没有登录！");
                    }
                });
            }else{
                alert("您还没有选择");
            }
        }

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
    <style type="text/css">
        <!--
        .mt16 {margin-top: 16px;}
        .userimg { width: 100px; height: 100px; margin: 10px 0;}
        .imglistwp { width: 18%; display: inline-block; text-align: center;}
        .imglistwp img {width: 90%; display: block;}

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
        <div class="container"style="margin-top: 30px">
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
                <li class="list-group-item  active">修改头像</li>
                <li class="list-group-item"><a href="center2.php">我的收藏</a></li>
<!--                <li class="list-group-item">修改资料</li>-->
                <li class="list-group-item"><a href='javascript:void(0);' onclick='out()'>用户退出</a></li>

            </ul>
        </div>
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    修改头像
                </div>
                <div class="panel-body">
                    <div class="label label-warning">您当前头像：</div>
                    <?php echo "<div><img src='$userimg' class='img-circle userimg'></div>" ?>
                    <div class="label label-warning">从下列头像中重新选择：</div>
                    <form role="form">
                            <div class="form-group mt16">
                                <div class="row">
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/01.jpg"><input type="radio" name="img01" value="1" > 头像 1</label>
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/02.jpg"><input type="radio" name="img01" value="2" > 头像 2</label>
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/03.jpg"><input type="radio" name="img01" value="3" > 头像 3</label>
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/04.jpg"><input type="radio" name="img01" value="4" > 头像 4</label>
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/05.jpg"><input type="radio" name="img01" value="5" > 头像 5</label>
                                </div>
                                <div class="row">
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/06.jpg"><input type="radio" name="img01" value="6" > 头像 6</label>
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/07.jpg"><input type="radio" name="img01" value="7" > 头像 7</label>
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/08.jpg"><input type="radio" name="img01" value="8" > 头像 8</label>
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/09.jpg"><input type="radio" name="img01" value="9" > 头像 9</label>
                                    <label class="checkbox-inline imglistwp"><img src="img/userimg/01.jpg"><input type="radio" name="img01" value="1" > 头像 10</label>
                                </div>
                            </div>
                        <div class="form-group"><button type="button" class="btn btn-default" onclick="imgsd1();">确认选择</button></div>
                    </form>

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