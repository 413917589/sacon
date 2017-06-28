<?php 
header("content-type:text/html;charset=utf-8");
if(isset($_POST['id']) && isset($_POST['xinghao'])){
	$id=$_POST['id'];
	$leixing=$_POST['leixing'];
	$xinghao=$_POST['xinghao'];
	$shoujia=$_POST['shoujia'];
	$chengben=$_POST['chengben'];
	$lirun=$_POST['lirun'];
    $pintai=$_POST['pintai'];
    $cuntao=$_POST['cuntao'];
    $jinglirun=$_POST['jinglirun'];
    $fandian=$_POST['fandian'];
    $lastlirun=$_POST['lastlirun'];


    include '../config/db_config.php';
$sql="update saconsalary set leixing='{$leixing}', xinghao='{$xinghao}', shoujia='{$shoujia}',chengben='{$chengben}',lirun='{$lirun}',pintai='{$pintai}',cuntao='{$cuntao}',jinglirun='{$jinglirun}',fandian='{$fandian}',lastlirun='{$lastlirun}' where id={$id}";
$res = mysql_query($sql);
if(!$res){
	echo "<script>alert('修改失败');
        window.location.href='adsalary.php';
      </script>";
      exit;

}else{
	echo "<script>alert('修改成功');
        window.location.href='adsalary.php';
      </script>";
      exit;
}







}else{

	echo "<script>alert('非法操作');
        window.location.href='editsalary.php';
    	</script>";
}


 ?>