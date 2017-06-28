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
<?php include'top.php'; ?>


<div style="margin-top:42px;margin-left:5px">

<?php
  header("content-type=text/css;charset=utf-8");

  include '../config/db_config.php';

	$sql = "select * from saconsalary order by id asc";
    $res = mysql_query($sql);
    
    echo "<table class='table table-bordered' style='width:99%'>";
    echo "
       <tr>
       <th>id</th>
       <th>类型</th>
       <th>型号</th>
       <th>售价</th>
       <th>成本</th>
       <th>利润</th>
       <th>平台扣点+抽成</th>
       <th>村淘+淘宝客+分期</th>
       <th>净利润</th>
       <th>返点</th>
       <th class='danger'>最终利润</th>
       
       <th>操作</th>
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
       
       <td><a class='btn btn-success btn-xs' href='editsalary.php?id={$row['id']}'>修改</a>
       <a class='btn btn-danger btn-xs' href='deletesalary.php?id={$row['id']}' onclick='return confirm('您确定删除?')'>删除</a>

       </td>




       </tr>




     ";
    }
    echo "</table>";
  

    	?>
      </div>



<div style="margin-top:42px;margin-left:5px">
</div>
</body>
</html>