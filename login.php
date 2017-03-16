<?php
session_start();
require_once("config.php");

//检测登录
if(checklogin()){
	header("location:index.php");
	exit();
}

$errno=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
	foreach($_POST as $key=>$val){
		if($val==""||$val==null){
			$errno=1;
			break;
		}else{
			$val=text_input($val);
		}
		if($key=='checkcode'){
			if($val!=$_SESSION['mycheckcode']){
				$errno=2;
				break;
			}
		}
	}
	if($errno==0){
		$name=$_POST['name'];
		$pw=md5($_POST['password']);
		$sql="select password from user where username='$name'";
		$res=mysql_query($sql,$con);
		$row=mysql_fetch_row($res);
		if($row){
			if($pw==$row[0]){//登录成功！
				$_SESSION['username']=$name;
				header("location:index.php");
			}else{
				echo '<script>alert(\'用户名或密码错误!\');</script>';
			}
		}else{
			echo '<script>alert(\'用户名或密码错误!\');</script>';
		}
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="make/login.css" rel="stylesheet">
	  <script type="text/javascript">
		  <!--
		  var checklogin=function(){
			  var name=$("#name").val();
			  var password=$("#password").val();

			  if(name!=''&&password!=''){
				  $("#loginform").submit();
			  }else{
				  alert("请填写完整");
			  }
		  }
	  </script>
  </head>
  <body>


  <div class="container">
	  <h1 class="text-center">用户登录</h1>
	  <form class="form-horizontal" role="form" method="post" action="login.php" id="loginform">
		  <div class="form-group">
			  <label for="name" class="col-md-2 control-label">账户名</label>
			  <div class="col-md-8">
				  <input type="text" class="form-control" name="name" id="name"
						 placeholder="请输入账户">
			  </div>
		  </div>
		  <div class="form-group">
			  <label for="password" class="col-md-2 control-label">密码</label>
			  <div class="col-md-8">
				  <input type="password" class="form-control" name="password" id="password"
						 placeholder="请输入密码">
			  </div>
		  </div>

		  <div class="form-group">
			  <div class="col-md-10 col-md-offset-2">
				  <button type="button" class="btn btn-primary" onclick="checklogin()">登录</button>
<!--				  <button type="button" class="btn btn-default">忘记密码</button>-->
				  <button type="button" class="btn btn-default" onclick="window.location.href='signup.php'">注册一个账号</button>
			  </div>

		  </div>
	  </form>

  </div>


    <script src="make/jquery-2.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>