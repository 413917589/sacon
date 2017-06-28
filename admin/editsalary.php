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

  $id=$_GET['id'];

  include '../config/db_config.php';

	$sql = "select * from saconsalary where id={$id}";
    $res = mysql_query($sql);
    
    $row = mysql_fetch_assoc($res);

    echo "
    <form action='edsalary.php' method='post'>
    <table class='table table-bordered' style='width:99%'>
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
       <th>最终利润</th>
       
       </tr>
       <tr>
       <td>{$row['id']}<input type='hidden' name='id' value='{$row['id']}' ></td>
       <td><input type='text' class='form-control' style='width:200px' value='{$row['leixing']}' name='leixing'></td>
        <td><input type='text' class='form-control' style='width:200px' value='{$row['xinghao']}' name='xinghao'></td>
       <td><input type='text' class='form-control' style='width:80px' value='{$row['shoujia']}' name='shoujia'></td>
       <td><input type='text' class='form-control' style='width:80px' value='{$row['chengben']}' name='chengben'></td>
       <td><input type='text' class='form-control' style='width:80px' value='{$row['lirun']}' name='lirun'></td>
       <td><input type='text' class='form-control' style='width:80px' value='{$row['pintai']}' name='pintai'></td>
       <td><input type='text' class='form-control' style='width:80px' value='{$row['cuntao']}' name='cuntao'></td>
       <td><input type='text' class='form-control' style='width:80px' value='{$row['jinglirun']}' name='jinglirun'></td>
       <td><input type='text' class='form-control' style='width:80px' value='{$row['fandian']}' name='fandian'></td>
       <td><input type='text' class='form-control' style='width:80px' value='{$row['lastlirun']}' name='lastlirun'></td>
       </tr>

      </table>

      <button type='submit' class='btn btn-success'>提交修改</button>
      <a type='button' class='btn btn-info' href='adsalary.php'>返回</a>
      </form>

    ";



    

    ?>
   
   

</div>
</div>
</body>
</html>