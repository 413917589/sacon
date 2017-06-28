<?php 
session_start();
if( $_SESSION['username']==""){
  header("location:login.php");

}
?>


<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
}
else{
  echo "<script>alert('非法操作');
        window.location.href='index.php';
      </script>";
      exit;
}

include '../config/db_config.php';
$sql = "select * from user where Id={$id}";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
<title>sacon帅康后台管理系统</title>
<?php include 'head.php';?>
</head>
<body>
<?php
include 'left.php';
?>
<div style="margin-left:230px;">
<?php include'top.php'; ?>

<form method="post" action="userinfo.php">
<table class="table table-bordered" style="width:98%;margin:47px auto;">
       <tr>
       <td style="text-align:right">ID</td>
       <td><?php echo $row['Id']; ?><input type="hidden" name="id" value="<?php echo $row['Id']; ?>"></td>
       </tr>

       <tr>
       <td style="text-align:right">用户名</td>
       <td><input type="text" class="form-control" name="username" style="width:150px" disabled="disabled" value="<?php echo $row['username']; ?>"></td>
       </tr>

      

      <tr>
      <td style="text-align:right">所在公司</td>
      <td>

         <input type="text" class="form-control" name="company" placeholder="设置所在公司" style="width:200px;float:left;line-height:51px" value="<?php echo $row['company'];  ?>">
         0表示无；1表示步旗
      </td>
      </tr>

      <tr>
      <td style="text-align:right">修改密码</td>
      <td><input type="text" class="form-control" name="password" placeholder="不填则不修改密码" style="width:200px"></td>
      </tr>

      <tr>
      <td style="text-align:right">注册时间</td>
      <td><input type="text" class="form-control" style="width:200px" disabled="disabled" value="<?php echo $row['redtime']; ?>"></td>
      </tr>

      <tr>
      <td></td>
      <td><button type="submit" class="btn btn-success" style="margin-right:10px">提交修改</button><a href="user.php" class="btn btn-info">返回</a></td>
      </tr>

  
</table>
</form>


</div>


</body>
</html>