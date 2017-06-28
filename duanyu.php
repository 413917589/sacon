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

  include 'config/db_config.php';
	$sql = "select * from duanyu";
    $res = mysql_query($sql);
    
    echo "<table class='table table-bordered'>";
    echo "
       <tr>
       <th width='10%'>分组</th>
       <th width='20%'>编码</th>
       <th>内容</th>
       </tr>
     ";
    while($row = mysql_fetch_assoc($res)){
     echo "
       <tr>
       <td>{$row['fenzu']}</td>
       <td>{$row['bianma']}</td>
       <td>{$row['neirong']}</td>
       </tr>
     ";
    }
    echo "</table>";
   }else {
     $keywords=$_POST['keywords'];
     include 'config/db_config.php';
  $sql = "select * from duanyu where neirong like '%$keywords%'";
    $res = mysql_query($sql);
    echo "
       <table class='table table-bordered'>
       <tr>
       <th width='10%'>分组</th>
       <th width='20%'>编码</th>
       <th>内容</th>
       </tr>
     ";
    while($row = mysql_fetch_assoc($res)){
     echo "
       <tr>
       <td>{$row['fenzu']}</td>
       <td>{$row['bianma']}</td>
       <td>{$row['neirong']}</td>
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