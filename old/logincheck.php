<?php
  if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
        else  
        {  
           $link=@mysql_connect("localhost:3306","root","");
	//如果出错，输出错误信息
	if (!$link) {
		die("数据库链接失败！".mysql_errno().mysql_error());
	}
            mysql_select_db("web");  
//          mysql_query("set names 'gbk'");  
            $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中  
              	session_start();
              	$_SESSION['aname']=$_POST[username];
              	header("location:index.php");
            }  
            else  
            {  
                echo "<script>alert('don't sure！');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('not success！'); history.go(-1);</script>";  
    }  
?>