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
<?php include 'head.php';?>
</head>
<body>
<?php include 'left.php';?>
<div style="margin-left:230px;">
<?php include'top.php'; ?>
<div style="margin-top:47px;">
		<form action="" method="post">
		<table class="cx" style="width:30%;margin:0 auto;margin-bottom:10px">
			<tr>
              <td>
				<select class="form-control" name="leixing" style="width:120px;height:50px;margin-right:5px;">
			       <option value="yanji">烟机</option>
				<option value="zaoju">灶具</option>
	        	</select>
			    </td>
				<td>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入型号（如MD01、5502）" name="xinghao" style="width:300px;height:50px;margin-right:5px">
				</td>
				<td><button type="submit" value="查询" class="btn btn-success btn-lg"/>查询</button>
          </td>
				</tr>
		</table>
<?php
if(isset($_POST['leixing'])){
	
$xinghao = $_POST['xinghao'];
$leixing = $_POST['leixing'];

  include 'config/db_config.php';
if($leixing == 'yanji'){
	
	$sql = "select * from $leixing where xinghao like '%$xinghao%'";

    $res = mysql_query($sql);
    
 
    while($row = mysql_fetch_assoc($res)){
	echo "
	<table style='text-align:center;width:98%;margin:0 auto;' class='table table-bordered'>
<tr class='success'>
<td colspan='7'><h2>型号:{$row['xinghao']}</h1></td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>外形尺寸</th>
<td style='width:14%'>{$row['chicun']}</td>
<th style='width:14%;text-align:center'>毛重/净重</th>
<td style='width:14%'>{$row['maozhong']}/{$row['jingzhong']}</td>
<th style='width:14%;text-align:center'>风压</th>
<td style='width:14%'>{$row['fengya']}</td>
<td rowspan='4'>图片</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>噪音</th>
<td>{$row['zaoyin']}</td>
<th style='width:14%;text-align:center'>风量</th>
<td>{$row['fengliang']}</td>
<th style='width:14%;text-align:center'>油网</th>
<td>{$row['youwang']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>电机</th>
<td>{$row['dianji']}</td>
<th style='width:14%;text-align:center'>面板</th>
<td>{$row['mianban']}</td>
<th style='width:14%;text-align:center'>延时</th>
<td>{$row['yanshi']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>风挡</th>
<td>{$row['fengdang']}</td>
<th style='width:14%;text-align:center'>照明</th>
<td>{$row['zhaoming']}</td>
<th style='width:14%;text-align:center'>换气</th>
<td>{$row['huanqi']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>进风口尺寸</th>
<td>{$row['jinfeng']}</td>
<th style='width:14%;text-align:center'>出风管直径</th>
<td>{$row['chufeng']}</td>
<td colspan='3' rowspan='4'>{$row['maidian']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>控制面板尺寸</th>
<td>{$row['kongzhi']}</td>
<th style='width:14%;text-align:center'>功率</th>
<td>{$row['shuchu']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>电源</th>
<td>{$row['dianyuan']}</td>
<th style='width:14%;text-align:center'>能效等级</th>
<td>{$row['nengxiao']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>360加速器</th>
<td colspan='3'>{$row['jiasu']}</td>

</tr>

</table><br>";
    }

  
	
}else if($leixing == 'zaoju'){
	//echo '<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:20px;color:red;">灶具查询功能开发中，会尽快上线</span>';
	$sql = "select * from $leixing where xinghao like '%$xinghao%'";

    $res = mysql_query($sql);
    
    
    while($row = mysql_fetch_assoc($res)){
	echo "
	<table style='text-align:center;width:98%;margin:0 auto;' class='table table-bordered'>
<tr class='success'>
<td colspan='7'><h2>型号:{$row['xinghao']}</h1></td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>火环数</th>
<td style='width:14%'>{$row['huohuan']}</td>
<th style='width:14%;text-align:center'>外形尺寸</th>
<td style='width:14%'>{$row['waixing']}</td>
<th style='width:14%;text-align:center'>开孔尺寸</th>
<td style='width:14%'>{$row['kaikong']}</td>
<td rowspan='4'><img src='{$row['img']}' width='200px' alt='暂无图片'></td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>毛重/净重</th>
<td>{$row['maozhong']}/{$row['jingzhong']}</td>
<th style='width:14%;text-align:center'>面板厚度</th>
<td>{$row['mianban']}</td>
<th style='width:14%;text-align:center'>联动机型</th>
<td>{$row['liandong']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>进气孔位置</th>
<td>{$row['jinqi']}</td>
<th style='width:14%;text-align:center'>自动熄火保护</th>
<td>{$row['zidong']}</td>
<th style='width:14%;text-align:center'>点火方式</th>
<td>{$row['dianhuo']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>热效率</th>
<td>{$row['rexiao']}</td>
<th style='width:14%;text-align:center'>功率</th>
<td>{$row['gonglv']}</td>
<th style='width:14%;text-align:center'>炉头材质</th>
<td>{$row['lutou']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>面板材料</th>
<td>{$row['mianbancl']}</td>
<th style='width:14%;text-align:center'>旋钮材质</th>
<td>{$row['xuanniu']}</td>
<td colspan='3' rowspan='4'>{$row['maidian']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>炉架材质</th>
<td>{$row['lujia']}</td>
<th style='width:14%;text-align:center'>燃烧室材质</th>
<td>{$row['ranshao']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>进气口材质</th>
<td>{$row['jinqicz']}</td>
<th style='width:14%;text-align:center'>炉架工艺</th>
<td>{$row['lujiabm']}</td>
</tr>

<tr class='warning'>
<th style='width:14%;text-align:center'>能效等级</th>
<td colspan='3'>{$row['nengxiao']}</td>

</tr>

</table><br>";
    }
}	
}
?>
		</form>
</div>
		</div>
	</body>
</html>
