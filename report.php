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
<th>型号</th>
<th>下载</th>
</tr>
<tr>
<td>QA-019-B2</td>
<td><a href="http://pan.baidu.com/s/1i4Vr0G1" target="_blank">下载地址</a></td>
</tr>
<tr>
<td>QA-019-G2</td>
<td><a href="http://pan.baidu.com/s/1slvzAAL" target="_blank">下载地址</a></td>
</tr>
<tr>
<td>QA-68-BE51</td>
<td><a href="http://pan.baidu.com/s/1jIki6zW" target="_blank">下载地址</a></td>
</tr>
<tr>
<td>QA-68-GE51</td>
<td><a href="http://pan.baidu.com/s/1bpEOWFX" target="_blank">下载地址</a></td>
</tr>
<tr>
<td>QA-98-G9II</td>
<td><a href="http://pan.baidu.com/s/1eRBeQMu" target="_blank">下载地址</a></td>
</tr>
<tr>
<td>QA-98-K9</td>
<td><a href="http://pan.baidu.com/s/1hrVZvG4" target="_blank">下载地址</a></td>
</tr>
<tr>
<td>QA-E2-35B</td>
<td><a href="http://pan.baidu.com/s/1o7LDQXW" target="_blank">下载地址</a></td>
</tr>
<tr>
<td>QA-E2-35C</td>
<td><a href="http://pan.baidu.com/s/1pLa4N4f" target="_blank">下载地址</a></td>
</tr>
<tr>
<td>QA-E2-35G</td>
<td><a href="http://pan.baidu.com/s/1mhDAzWk" target="_blank">下载地址</a></td>
</tr>
<tr>
<td>QA-E5-68B</td>
<td><a href="http://pan.baidu.com/s/1pKOtDVX" target="_blank">下载地址</a></td>
</tr





</table>

</div>
</div>
</body>
</html>