<?php 
	require_once('connect.php');
	$id = $_POST['id'];
	$uptime = $_POST['uptime'];
	$duetime = $_POST['duetime'];
	$keyword = $_POST['keyword'];
	$link = $_POST['link'];
	$bus = $_POST['bus'];
	$dialog = $_POST['dialog'];
	$serivce = $_POST['serivce'];
	$status = $_POST['status'];
	$linkout = $_POST['linkout'];
	$dateline =  time();
	$updatesql = "update linkdb set uptime='$uptime',duetime='$duetime', keyword='$keyword', link='$link', bus='$bus',dialog='$dialog', serivce='$serivce', status='$status', linkout='$linkout',dateline=$dateline where id=$id";
	
	if(mysql_query($updatesql)){
		
		echo "<script>alert('修改文章成功');window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('修改失败');window.location.href='index.php';</script>";
	}
?>