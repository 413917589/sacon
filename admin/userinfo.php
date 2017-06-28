<?php 

$id=$_POST['id'];
$company=$_POST['company'];
$password=$_POST['password'];

include '../config/db_config.php';



if($password==""){


$sql="update user set company='{$company}' where Id={$id}";


}else{

$sql="update user set company='{$company}',password='{$password}' where Id={$id}";

}

$res = mysql_query($sql);
if(!$res){
	echo "<script>alert('修改失败');
        window.location.href='user.php';
      </script>";
      exit;

}else{
	echo "<script>alert('修改成功');
        window.location.href='user.php';
      </script>";
      exit;
}









 ?>