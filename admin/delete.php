<?php 
session_start();
if( $_SESSION['username']==""){
  header("location:login.php");

}
?>


<?php
header("content-type:text/html;charset=utf-8");
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
 $sql="delete from liuyan where Id={$id}";
 $res= mysql_query($sql);
 if(!$res){
 	echo "<script>alert('删除失败');
        window.location.href='adliuyan.php';
    	</script>";
 }else{
 	echo "<script>alert('删除成功');
        window.location.href='adliuyan.php';
    	</script>";
 }




?>
