<?php
session_start();
header("content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$regtime = date("Y-m-d H:i:s");
$checkcode= md5($_POST['checkcode']);



if($checkcode == "" || $checkcode != $_SESSION['verification'])
   {
     echo " <script>
              alert('验证码输入不正确');
              window.location.href='login.php';
              </script>";
              exit;
   }

include 'config/db_config.php';

$sql="select * from user where username='{$username}'";
$res=mysql_query($sql);
$row=mysql_fetch_assoc($res);
if($row){
echo " <script>
              alert('该用户名已存在');
              window.location.href='login.php';
              </script>";
              exit;
}

$sql2="insert into user (id,username,password,redtime,company) values ('','{$username}','{$password}','{$regtime}',0)";
$res2=mysql_query($sql2);
if(!$res2){
    	echo "<script>alert('注册失败');
        window.location.href='login.php';
    	</script>";
    	
    }else{
    	echo "<script>alert('注册成功');
        window.location.href='login.php';
    	</script>";
    }
 ?>