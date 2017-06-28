<?php 
session_start();
if( $_SESSION['username']==""){
  header("location:login.php");

}
header("content-type=text/css;charset=utf-8");
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
<?php include'top.php'; ?>
<div style="margin-top:42px;margin-left:5px">
<form action="" method="post">
    <table class="cx" style="width:24%;margin:0 auto;margin-bottom:10px">
      <tr>   
        <td>
         <input type="text" class="form-control" id="exampleInputName2" placeholder="输入关键字" name="keywords" style="width:300px;height:50px;">
        </td>
        <td><button type="submit" value="查询" class="btn btn-success btn-lg"/>查询</button>
          </td>
        </tr>
    </table>
  </form>

<?php

if(!isset($_POST['keywords'])){


if($_SESSION['company']!="1"){

echo "<div class='jumbotron'>
    <div class='container'>
        <h1>您无权限访问此页面！</h1>
        <p>请联系管理员设置所在公司</p>
        
    </div>
</div>";
  }

  else{
  include 'config/db_config.php';

	$sql = "select * from saconsalary order by id asc";
    $res = mysql_query($sql);
    
    echo "<table class='table table-bordered' style='width:99%'>";
    echo "
       <tr>
       <th>id</th>
       <th>类型</th>
       <th>型号</th>
       <th>售价(元)</th>
       <th>成本(元)</th>
       <th>利润(元)</th>
       <th>平台扣点+抽成(元)</th>
       <th>村淘+淘宝客+分期(元)</th>
       <th>净利润(元)</th>
       <th>返点(元)</th>
       <th class='danger'>最终利润(元)</th>
       
       <th>利润率</th>
       </tr>
     ";
    while($row = mysql_fetch_assoc($res)){
     echo "
       <tr>
       <td>{$row['id']}</td>
       <td>{$row['leixing']}</td>
       <td>{$row['xinghao']}</td>
       <td>{$row['shoujia']}</td>
       <td>{$row['chengben']}</td>
       <td>{$row['lirun']}</td>
       <td>{$row['pintai']}</td>
       <td>{$row['cuntao']}</td>
       <td>{$row['jinglirun']}</td>
       <td>{$row['fandian']}</td>
       <td class='danger'>{$row['lastlirun']}【赠品没有算在内】</td>  
       <td>{$row['lirunlv']}</td>
       </tr>
     ";
    }
    echo "</table>";
  
}
}else{
  $keywords=$_POST['keywords'];

 include 'config/db_config.php';

  $sql = "select * from saconsalary where xinghao like '%$keywords%' order by id asc";
    $res = mysql_query($sql);
    
    echo "<table class='table table-bordered' style='width:99%'>";
    echo "
       <tr>
       <th>id</th>
       <th>类型</th>
       <th>型号</th>
       <th>售价(元)</th>
       <th>成本(元)</th>
       <th>利润(元)</th>
       <th>平台扣点+抽成(元)</th>
       <th>村淘+淘宝客+分期(元)</th>
       <th>净利润(元)</th>
       <th>返点(元)</th>
       <th class='danger'>最终利润(元)</th>
       
       <th>利润率</th>
       </tr>
     ";
    while($row = mysql_fetch_assoc($res)){
     echo "
       <tr>
       <td>{$row['id']}</td>
       <td>{$row['leixing']}</td>
       <td>{$row['xinghao']}</td>
       <td>{$row['shoujia']}</td>
       <td>{$row['chengben']}</td>
       <td>{$row['lirun']}</td>
       <td>{$row['pintai']}</td>
       <td>{$row['cuntao']}</td>
       <td>{$row['jinglirun']}</td>
       <td>{$row['fandian']}</td>
       <td class='danger'>{$row['lastlirun']}【赠品没有算在内】</td>  
       <td>{$row['lirunlv']}</td>
       </tr>
     ";
    }
    echo "</table>";
}
    	?>
      </div>


</div>
</body>
</html>