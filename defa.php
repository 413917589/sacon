<?php 
session_start();
if( $_SESSION['username']==""){
  header("location:login.php");

}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=gb2312">
<title>获取服务器信息</title>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{ background:#EEEEEE;margin:0; padding:0; font-family:"微软雅黑", Arial, Helvetica, sans-serif; }
  </style>
</head>

<body bgcolor="#EEEEEE">


<?php
header("content-type:text/html;charset=utf-8");
$sysos = $_SERVER["SERVER_SOFTWARE"];      //获取服务器标识的字串
$sysversion = PHP_VERSION;                   //获取PHP服务器版本
//以下两条代码连接MySQL数据库并获取MySQL数据库版本信息
$con = @mysql_connect('localhost','sacon','lpk19960926');
$mysqlinfo = mysql_get_server_info();
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
/*  *******************************************************************  */
/*   以HTML表格的形式将以上获取到的服务器信息输出给客户端浏览器          */
/*  *******************************************************************  */
//echo "<table>";
//echo "<caption> <h2> 系统信息  </h2> </caption>";
//echo "<tr> <td> Web服务器：    </td> <td> $sysos        </td> </tr>";
//echo "<tr> <td> PHP版本：      </td> <td> $sysversion   </td> </tr>";
//echo "<tr> <td> MySQL版本：    </td> <td> $mysqlinfo    </td> </tr>";
//echo "<tr> <td> GD库版本：     </td> <td> $gdinfo       </td> </tr>";
//echo "<tr> <td> FreeType：     </td> <td> $freetype     </td> </tr>";
//echo "<tr> <td> 远程文件获取： </td> <td> $allowurl     </td> </tr>";
//echo "<tr> <td> 最大上传限制： </td> <td> $max_upload   </td> </tr>";
//echo "<tr> <td> 最大执行时间： </td> <td> $max_ex_time  </td> </tr>";
//echo "<tr> <td> 服务器时间：   </td> <td> $systemtime   </td> </tr>";
//echo "</table>";

?>
    <div class="panel panel-default" style="width:500px;margin:20px auto;">
	<div class="panel-heading">系统信息</div>
	<table class="table">
		<tr><td>Web服务器：</td><td><?php echo "$sysos"; ?></td></tr>
		<tr><td>PHP版本：</td><td><?php echo "$sysversion"; ?></td></tr>
      <tr><td>MySQL版本：</td><td><?php echo "$mysqlinfo"; ?></td></tr>
      <tr><td>GD库版本：</td><td><?php echo "$gdinfo"; ?></td></tr>
      <tr><td>FreeType：</td><td><?php echo "$freetype"; ?></td></tr>
      <tr><td>远程文件获取：</td><td><?php echo "$allowurl"; ?></td></tr>
      <tr><td>最大上传限制：</td><td><?php echo "$max_upload"; ?></td></tr>
      <tr><td>最大执行时间：</td><td><?php echo "$max_ex_time"; ?></td></tr>
      <tr><td>服务器时间：</td><td><?php echo "$systemtime"; ?></td></tr>
	</table>
</div>
<body>
</html>