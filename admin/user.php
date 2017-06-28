<?php 
session_start();
if( $_SESSION['username']==""){
  header("location:login.php");

}
?>


<?php
  include '../config/db_config.php';

  $sql = "select * from user";
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
<div style="margin-top:47px;"></div>


<table class="table table-bordered" style="width:99%;margin:0 auto">
	
	<thead>
		<tr>
			<th>Id</th>
			<th>用户名</th>
			<th>公司</th>
			<th>注册时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($rows as $key => $value): ?>
		<tr>
			<td><?php echo $value['Id']; ?></td>
			<td><?php echo $value['username']; ?></td>
			<td><?php 
                if($value['company']==0){
                	echo '无';
                }else if($value['company']==1){
                	echo '南京歩旗商贸有限公司';
                }

			?></td>
			<td><?php echo $value['redtime']; ?></td>
			<td><a class="btn btn-success btn-xs" href="edpw.php?id=<?php echo $value['Id']; ?>">修改信息</a>
			<a class="btn btn-danger btn-xs" href="clearuser.php?id=<?php echo $value['Id']; ?>" onclick="return confirm('您确定删除?')">删除用户</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
 
</div>







</body>
</html>