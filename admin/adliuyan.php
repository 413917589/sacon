<?php 
session_start();
if( $_SESSION['username']==""){
  header("location:login.php");

}
?>


<?php
  include '../config/db_config.php';

  $sql = "select * from liuyan order by id desc";
  $res = mysql_query($sql);
  $rows = array();
  while($row = mysql_fetch_assoc($res)){
  	$rows[] = $row;
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
<div style="width:98%;margin:47px auto">


  <form role="form" action="insert.php" method="post">
  <div class="form-group">
  </div>
</form>
<?php foreach ($rows as $key => $value): ?>
<div class="panel panel-default" style="margin-top:20px;">
    <div class="panel-heading">
        <h3 class="panel-title">
           时间： <?php echo $value['addtime']; ?>
        </h3>

    </div>
    <div class="panel-body">
        <?php echo $value['content']; ?><br>
        <a href="delete.php?Id=<?php echo $value['Id']; ?>" onclick="return confirm('您确定删除?')">删除</a>
        <a href="updata.php?Id=<?php echo $value['Id']; ?>">修改</a>
         
    </div>
</div>
<?php endforeach; ?>

   
</div></div>




</body>
</html>

