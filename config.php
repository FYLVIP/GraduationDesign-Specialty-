<?php
define('host','localhost');
define('user','root');
define('password','');
define('dbname','mooc');
define('path',dirname(__FILE__));

$con=@mysql_connect(host,user,password) or die(mysql_error()); //连接数据库


mysql_query("set names utf8",$con);
mysql_select_db(dbname,$con);



//检测登录
function checklogin(){
    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
        return $_SESSION['username'];
    }else{
        return null;
    }
}

//检测post数据
function text_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

