<?php 
session_start();
header("content-type:text/html;charset=utf-8");
if( $_SESSION['username']==""){
  header("location:login.php");

}
if( $_SESSION['username']!="admin"){
   echo "<script>alert('您不是管理员，无权限进本页面');
        window.location.href='../index.php';
      </script>";
      exit;

}

?>


<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>后台管理</title>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">后台管理</h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
	<li class="list-group-item">产品信息管理</li>
	<li class="list-group-item">售后网点管理</li>
	<li class="list-group-item">快捷短语管理</li>
	<li class="list-group-item">售价管理</li>
	<li class="list-group-item"><a href="adliuyan.php">留言管理</a></li>
	<li class="list-group-item"><a href="user.php">用户管理</a></li>
</ul>
    </div>
</div>

</body>
</html>