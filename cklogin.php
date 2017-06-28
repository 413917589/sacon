<?php
session_start();
header("content-type:text/html;charset=utf-8");

$username = $_POST['username'];
$password = $_POST['password'];

include 'config/db_config.php';



if($username == "" ||$password == "")
   {
     echo " <script>
              alert('用户名密码不得为空');
              window.location.href='login.php';
              </script>";
              exit;
   }




  $sql="select * from user where username='{$username}' and password='{$password}'";

$res=mysql_query($sql);
$row=mysql_fetch_assoc($res);
if(!$row){
	echo '<script>
              alert("用户名密码错误");
              window.location.href="login.php";
              </script>';
}
else{
    $_SESSION['username']=$row['username'];
    $_SESSION['company']=$row['company'];

  
	echo '<script>
              alert("登录成功");
              window.location.href="index.php";
              </script>';


}






?>