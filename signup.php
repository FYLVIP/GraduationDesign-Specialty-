<?php
session_start();
require_once("config.php");

$anarr=array();
$num=$errno=0;
//$err=array("有值为空","验证码错误","用户名有特殊字符","用户名应在6-30个字符之间","密码就在6-30个字符之间");

if($_SERVER['REQUEST_METHOD']=='POST'){
	foreach($_POST as $key=>$val){
		if($val==""||$val==null){
			$errno=1;
			break;
		}
		if($key=='checkcode'){
			if($val!=$_SESSION['mycheckcode']){
				$errno=2;
				break;
			}
		}
		if($key=='name'){
			$namelen=strlen($val)+mb_strlen($val,'UTF8')/2;
			if(!preg_match("/^[a-zA-Z0-9_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]+$/",$val)){
				$errno=3;
				break;
			} elseif ( 31 < $namelen || $namelen < 5 ) {
				$errno=4;
				break;
			}
		}
		if($key=='password'){
			if(!preg_match("/^[a-zA-Z][a-zA-Z0-9!-]{5,30}$/",$val)){
				$errno=5;
				break;
			}
		}

		$anarr[$key]=text_input($val);
	}

	if($errno==0){ //验证成功
		//print_r($anarr);
		$pw=md5($anarr['password']);
		$sql="insert into USER (username,password) VALUES ('$anarr[name]','$pw')"; //插入数据库
		$res=mysql_query($sql,$con) or die(mysql_error());
		if($res){
			echo '<script>alert(\'注册成功！返回登录\');location.href=\'login.php\';</script>';
		}
	}
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="make/login.css" rel="stylesheet">

<script type="text/javascript">
            <!--
                var check=0;
                //检测非法字符
                var checkstring=function(str){
                    var re=/^[\u4e00-\u9fa5a-z0-9]+$/gi;
                    if(re.test(str)){
                        return str;
                    }else{
                        return false;
                    }
                }
                //检测密码
            var checklen=function(str){
                var re=/^[a-z0-9!_]+$/gi;
                if(re.test(str)){
                    if(str.charAt(0).match(/[a-z]/)){
                        return str;
                    }else{return false;}
                }else{
                    return false;
                }
            }
                //获取字符的字节数
                String.prototype.getbytes=function(){
                    var str=this.match(/[^\x00-\xff]/ig);
                    return this.length+(str==null?0:str.length);
                }
                var checkname = function(val){
                    var sleng=val.getbytes();
                    if(checkstring(val)&&sleng>=6&&sleng<16){
                        $.post("checkrepeatname.php",{name:val},function(data){
                            if(data){
                                $('#ck_name').children().eq(0).removeClass("glyphicon-remove ico-er");
                                $('#ck_name').children().eq(0).addClass("glyphicon glyphicon-ok ico-ok");
                                $('#ck_name').children().eq(1).text("用户名可用");
                                check+=1;
                            }else{
                                $('#ck_name').children().eq(0).removeClass("glyphicon-ok ico-ok");
                                $('#ck_name').children().eq(0).addClass("glyphicon glyphicon-remove ico-er");
                                $('#ck_name').children().eq(1).text("用户名已被占用!");
                                check=0;
                            }
                        })

                    }else{
                        $('#ck_name').children().eq(0).removeClass("glyphicon-ok ico-ok");
                        $('#ck_name').children().eq(0).addClass("glyphicon glyphicon-remove ico-er");
                        $('#ck_name').children().eq(1).text("有特殊字符或长度不对");
                        check=0;
                    }
                }
                var checkpw = function(val){
                    var sleng=val.getbytes();
                    if(checklen(val)&&sleng>=6&&sleng<16){
                        $('#ck_pw').children().eq(0).removeClass("glyphicon-remove ico-er");
                        $('#ck_pw').children().eq(0).addClass("glyphicon glyphicon-ok ico-ok");
                        $('#ck_pw').children().eq(1).text("");
                        check+=1;
                    }else{
                        $('#ck_pw').children().eq(0).removeClass("glyphicon-ok ico-ok");
                        $('#ck_pw').children().eq(0).addClass("glyphicon glyphicon-remove ico-er");
                        $('#ck_pw').children().eq(1).text("输入错误或长度不对");
                        check=0;
                    }
                    checkpw2($("#password2").val());
                }
                var checkpw2 = function(val){
                    var pw=$("#password").val();
                    if(pw===val){
                        $('#ck_pw2').children().eq(0).removeClass("glyphicon-remove ico-er");
                        $('#ck_pw2').children().eq(0).addClass("glyphicon glyphicon-ok ico-ok");
                        $('#ck_pw2').children().eq(1).text("");
                        check+=1;
                    }else{
                        $('#ck_pw2').children().eq(0).removeClass("glyphicon-ok ico-ok");
                        $('#ck_pw2').children().eq(0).addClass("glyphicon glyphicon-remove ico-er");
                        $('#ck_pw2').children().eq(1).text("两次密码输入不一样");
                        check=0;
                    }
                }

                var checkform = function(){
                    if(check){
                        $("#regform").submit();
                    }else{
                        alert("请确认各项填写正确!")
                    }
                }
        </script>

  </head>
<body>


<div class="container" style="margin-left: 500px">
	<h1 style="margin-left: 350px">用户注册</h1>
	<form class="form-horizontal" role="form" action="signup.php" method="post" id="regform">
		<div class="form-group">
			<label for="name" class="col-md-2 control-label">账户名</label>
			<div class="col-md-5">
				<input type="text" class="form-control" name="name" id="name"
					   placeholder="请输入账户" onchange="checkname(this.value)">
			</div>
			<div class="col-md-3" id="ck_name">
				<span></span> <span></span>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-md-2 control-label">密码</label>
			<div class="col-md-5">
				<input type="password" class="form-control" name="password" id="password"
					   placeholder="请输入密码" onchange="checkpw(this.value)">
			</div>
			<div class="col-md-3" id="ck_pw">
				<span></span> <span></span>
			</div>
		</div>
		<div class="form-group">
			<label for="password2" class="col-md-2 control-label">确认密码</label>
			<div class="col-md-5">
				<input type="password" class="form-control" name="password2" id="password2"
					   placeholder="请再次输入密码" onchange="checkpw2(this.value)">
			</div>
			<div class="col-md-3" id="ck_pw2">
				<span></span> <span></span>
			</div>
		</div>


		<input type="hidden">
		<div class="form-group">
			<div class="col-md-10 col-md-offset-2">
				<button type="button" class="btn btn-primary" onclick="checkform()">确认注册</button>
				<button type="reset" class="btn btn-default">重置</button>
				<button type="button" class="btn btn-default" onclick="window.location.href='login.php'">已有账号，返回登录</button>
			</div>

		</div>
	</form>




    <script src="make/jquery-2.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--  <script src="js/custom.js"></script>-->
  
</body>
</html>