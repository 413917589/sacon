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
<link rel="stylesheet" type="text/css" href="css/showwd.css">
<?php include 'head.php';?>
</head>
<body>
<?php include 'left.php';?>
<div style="margin-left:230px;">
<?php include'top.php'; ?>
<div style="margin-top:47px;">
<form action="" method="post">	
<div class="info">
	<table>
	<tr>
	<td><select id="s_province" name="s_province" class="form-control"></select>  </td>
    <td><select id="s_city" name="s_city" class="form-control"></select>  </td>
    <td><select id="s_county" name="s_county" class="form-control"></select></td>
    <td><button type="submit" value="查询" class="btn btn-success btn-lg" />查询</button></td>
    </tr>
    <script class="resources library" src="http://file.setotoo.cn/area.js" type="text/javascript"></script>
    <script type="text/javascript">_init_area();</script>
     
    <div id="show"></div>

    </table>
</div>
<script type="text/javascript">
var Gid  = document.getElementById ;
var showArea = function(){
	Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + 	
	Gid('s_city').value + " - 县/区" + 
	Gid('s_county').value + "</h3>"
Gid('s_county').setAttribute('onchange','showArea()');
</script>


<?php 
if(isset($_POST['s_province'])){
$s_province = $_POST['s_province'];
$s_city = $_POST['s_city'];
$s_county = $_POST['s_county'];

if($s_province == '省份'){
        echo '
              <script>
              alert("省份必须选择");
              </script>
			 ';
        exit;
}

  include 'config/db_config.php';

if($s_city != "地级市" && $s_county != "市、县级市"){

        $sql = "SELECT * FROM wangdian WHERE s_province like '%$s_province%' and s_city like '%$s_city%' and s_county like '%$s_county%'";

        $res = mysql_query($sql);
	
}else if($s_city == "地级市" && $s_county == "市、县级市"){
	
	    $sql = "SELECT * FROM wangdian WHERE s_province like '%$s_province%'";

        $res = mysql_query($sql);
	
}else if($s_county == "市、县级市"){
	
     	$sql = "SELECT * FROM wangdian WHERE s_province like '%$s_province%' and s_city like '%$s_city%'";

        $res = mysql_query($sql);
	
}


echo "<table class='table table-bordered' style='text-align:center;width:98%;margin:10px auto;'>";
echo "
    <thead>
		<tr class='success'>
			<th style='text-align:center;width:20%'>省份</th>
			<th style='text-align:center;width:20%'>市</th>
			<th style='text-align:center;width:20%'>区/县</th>
            <th style='text-align:center;width:20%'>是否支持</th>
            <th style='text-align:center;width:20%'>备注</th>
		</tr>
	</thead>
    ";
while($row = mysql_fetch_assoc($res)){
	echo "
	<tbody><tr class=''>
		<td>{$row['s_province']}</td>
		<td>{$row['s_city']}</td>
		<td>{$row['s_county']}</td>
		<td>{$row['zhichi']}</td>
		<td>{$row['beizhu']}</td>
	</tr>
    	</tbody>
	";
}

echo "</table><br>";
	

}
else{
	echo "
	<table class='table table-bordered' style='text-align:center;width:98%;margin:10px auto;'>
    <thead>
		<tr class='success'>
			<th style='text-align:center;width:20%'>省份</th>
			<th style='text-align:center;width:20%'>市</th>
			<th style='text-align:center;width:20%'>区/县</th>
            <th style='text-align:center;width:20%'>是否支持</th>
            <th style='text-align:center;width:20%'>备注</th>
		</tr>
		<tr>
		<td colspan='5'>请选择地址查询</td>
		</tr>
	</thead>
	</table>

	";


}
?>
</form>

</div>
</div>
</body>
</html>
