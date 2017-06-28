<?php
    header("content-type:text/html;charset=utf-8");
    date_default_timezone_set('PRC');
    include 'config/db_config.php';

    $content=$_POST['content'];
    $addtime=date('Y-m-d H:i:s');
    // echo "$addtime";
    if($content == '')
    {
    	echo "<script>alert('请输入留言内容');
        window.location.href='liuyan.php';
    	</script>";
    	exit;
    }
    $sql="insert into liuyan (id,content,addtime) values ('','{$content}','{$addtime}')";
    $row = mysql_query($sql);
    if(!$row){
    	echo "<script>alert('留言发表失败');
        window.location.href='liuyan.php';
    	</script>";
    	
    }else{
    	echo "<script>alert('留言发表成功');
        window.location.href='liuyan.php';
    	</script>";
    }



?>