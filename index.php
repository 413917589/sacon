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
<?php include 'left.php';?>
<div style="margin-left:230px;">
<?php include'top.php'; ?>
<?php
header("content-type:text/html;charset=utf-8");
$sysos = $_SERVER["SERVER_SOFTWARE"];      //获取服务器标识的字串
$sysversion = PHP_VERSION;                   //获取PHP服务器版本
//以下两条代码连接MySQL数据库并获取MySQL数据库版本信息
// $con = @mysql_connect('182.254.155.197','sacon','lpk19960926');
// $mysqlinfo = mysql_get_server_info();
//从服务器中获取GD库的信息
if(function_exists("gd_info")){                  
$gd = gd_info();
$gdinfo = $gd['GD Version'];
}else {
$gdinfo = "未知";
}
//从GD库中查看是否支持FreeType字体
$freetype = $gd["FreeType Support"] ? "支持" : "不支持";
//从PHP配置文件中获得是否可以远程文件获取
$allowurl= ini_get("allow_url_fopen") ? "支持" : "不支持";
//从PHP配置文件中获得最大上传限制
$max_upload = ini_get("file_uploads") ? ini_get("upload_max_filesize") : "Disabled";
//从PHP配置文件中获得脚本的最大执行时间
$max_ex_time= ini_get("max_execution_time")."秒";
//以下两条获取服务器时间，中国大陆采用的是东八区的时间,设置时区写成Etc/GMT-8
date_default_timezone_set("Etc/GMT-8");
$systemtime = date("Y-m-d H:i:s",time());

?>
   <div style="margin:37px auto;padding:10px;">
   <div class="jumbotron">
    <div class="container">
        <h1>欢迎sacon使用帅康后台管理系统！</h1>
        <p>有任何建议可以留言</p>
        <p><a href="show.php" class="btn btn-primary btn-lg" role="button">
         开始使用</a>
        </p>
    </div>
</div>

	<table class="table table-bordered">
		<tr><td>Web服务器：</td><td><?php echo "$sysos"; ?></td></tr>
		<tr><td>PHP版本：</td><td><?php echo "$sysversion"; ?></td></tr>
      <!-- <tr><td>MySQL版本：</td><td><?php echo "$mysqlinfo"; ?></td></tr> -->
      <tr><td>GD库版本：</td><td><?php echo "$gdinfo"; ?></td></tr>
      <tr><td>FreeType：</td><td><?php echo "$freetype"; ?></td></tr>
      <tr><td>远程文件获取：</td><td><?php echo "$allowurl"; ?></td></tr>
      <tr><td>最大上传限制：</td><td><?php echo "$max_upload"; ?></td></tr>
      <tr><td>最大执行时间：</td><td><?php echo "$max_ex_time"; ?></td></tr>
      <tr><td>服务器时间：</td><td><?php echo "$systemtime"; ?></td></tr>
	</table>
</div>
</div>
</body>
</html>