<?php 
session_start();
if( $_SESSION['username']==""){
  header("location:login.php");

}
?>

<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>sacon帅康后台管理系统</title>
<?php include 'head.php';?>
</head>
<body>
<?php
include 'left.php';
?>

<div style="margin-left:230px;">
<?php include 'top.php'; ?>
<div style="margin-top:42px;padding:10px;">

<table class="table table-bordered">
<tr>
<th>文件名</th>
<th>下载</th>
</tr>
<tr>
<td>帅营开户许可证.jpg</td>
<td><a href="http://file.setotoo.cn/%E5%B8%85%E8%90%A5%E5%BC%80%E6%88%B7%E8%AE%B8%E5%8F%AF%E8%AF%81.jpg" target="_blank">查看图片</a></td>
</tr>
<tr>
<td>营销营业执照（副）2015最新.jpg</td>
<td><a href="http://file.setotoo.cn/%E8%90%A5%E9%94%80%E8%90%A5%E4%B8%9A%E6%89%A7%E7%85%A7%EF%BC%88%E5%89%AF%EF%BC%892015%E6%9C%80%E6%96%B0.jpg" target="_blank">查看图片</a></td>
</tr>
<tr>
<td>灶具生产许可证.jpg</td>
<td><a href="http://file.setotoo.cn/%E7%81%B6%E5%85%B7%E7%94%9F%E4%BA%A7%E8%AE%B8%E5%8F%AF%E8%AF%81.jpg" target="_blank">查看图片</a></td>
</tr>

</table>

</div>
</div>
</body>
</html>