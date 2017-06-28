<?php 
session_start();
if( $_SESSION['username']==""){
  header("location:login.php");

}


if(isset($_POST['id'])){
	$id= $_POST['id'];
	$content=$_POST['content'];
}
if($content == ""){
	echo "<script>alert('修改的内容不得为空');
        window.location.href='index.php';
      </script>";
      exit;
}

include '../config/db_config.php';
$sql="update liuyan set content='{$content}' where Id={$id}";
$res = mysql_query($sql);
if(!$res){
	echo "<script>alert('修改失败');
        window.location.href='index.php';
      </script>";
      exit;

}else{
	echo "<script>alert('修改成功');
        window.location.href='adliuyan.php';
      </script>";
      exit;
}



?>