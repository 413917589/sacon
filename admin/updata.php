<?php 
session_start();
if( $_SESSION['username']==""){
  header("location:login.php");

}
?>


<?php
if(isset($_GET['Id'])){
  $id = $_GET['Id'];
}
else{
  echo "<script>alert('非法操作');
        window.location.href='index.php';
      </script>";
      exit;
}

include '../config/db_config.php';
$sql = "select * from liuyan where Id={$id}";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);


?>


<html>
<head><title>修改留言</title>
</head>
<?php include 'head.php';?>
<body>
<?php
include 'left.php';

?>

<div style="margin-left:230px;">
<div style="width:98%;margin:47px auto">
<?php include 'top.php'; ?>
  <form role="form" action="insertly.php" method="post">
  <div class="form-group">

    <!-- <label for="name">文本框</label> -->
     <input type="hidden" name='id' value="<?php echo $row['Id']; ?>">
        <textarea class="form-control" name="content"><?php echo $row['content'];?></textarea>
    <button type="submit" class="btn btn-primary" style="margin-top:10px;">修改</button>

  </div>
</form>

</div></div>




</body>
</html>