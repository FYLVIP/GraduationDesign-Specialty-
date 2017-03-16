<?php
session_start();
require_once("config.php");

//检测用户名重复
if(isset($_POST['name'])&&!empty($_POST['name'])){
    $name=text_input($_POST['name']);
    $sql="SELECT * from user where username='$name'";
    $result=mysql_query($sql,$con);
    $row=mysql_fetch_row($result);
    if($row){
       //用户名不可用
    }else{
        echo "1";//用户名可用
    }

}

//检测登录
if(isset($_GET['name']) && $_GET['name']=='login'){
    if(checklogin()){
        echo checklogin();
    }
}


//删除留言
if(isset($_POST['delmeg']) && !empty($_POST['delmeg'])){
    if(checklogin()){
        $uid=$_POST['delmeg'];
        $uname=checklogin();
        $sql="select name from message where id=$uid";
        $ress=mysql_query($sql,$con);
        $row=mysql_fetch_row($ress);
        if($uname==$row[0]){
            $sql="delete from message where id=$uid";
            $ress=mysql_query($sql,$con);
            if($ress){
                echo "0";//删除成功
            }else{
                echo "1";//删除失败
            }
        }else{
            echo "2";//无权限
        }
    }else{
        echo "3";//未登录
    }

}


//修改头像
if(isset($_POST['imgid']) && !empty($_POST['imgid'])) {
    if(checklogin()){
        $uname=checklogin();
        $imgid=text_input($_POST['imgid']);
        $imgval=urlencode("img\userimg\\0".$imgid.".jpg");
        $sql="update user set userimg='".$imgval."' where username='$uname'";
        $res=mysql_query($sql);
        echo $res?"1":null;
    }
}


//注销登录
if(isset($_GET['name']) && $_GET['name']=='out'){
    unset($_SESSION['username']);
    if(!$_SESSION['username']){
        echo "1";
    }
}




































