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

 $sql="delete from user where Id={$id}";

 $res= mysql_query($sql);
 if(!$res){
 	echo "<script>alert('删除失败');
        window.location.href='user.php';
    	</script>";
 }else{
 	echo "<script>alert('删除成功');
        window.location.href='user.php';
    	</script>";
 }




?>