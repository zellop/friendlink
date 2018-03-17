<?php
	require_once('connect.php');
	$id = intval($_GET['id']);
	$deletesql = "delete from linkdb where id=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除链接成功');window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('删除链接失败');window.location.href='index.php';</script>";
	}
?>