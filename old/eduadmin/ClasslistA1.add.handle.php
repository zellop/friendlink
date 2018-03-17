<?php
	require_once('connect.php');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
	if(!(isset($_POST['keyword'])&&(!empty($_POST['keyword'])))){
		echo "<script>alert('关键词不能为空');window.location.href='index.php';</script>";
	}
	if(!(isset($_POST['link'])&&(!empty($_POST['link'])))){
		echo "<script>alert('链接不能为空');window.location.href='index.php';</script>";
	}
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
	$insertsql = "insert into linkdb(uptime, duetime, keyword, link, bus, dialog, serivce, status, linkout, dateline) values('$uptime', '$duetime', '$keyword','$link', '$bus', '$dialog', '$serivce', '$status', '$linkout', $dateline)";
	if(mysql_query($insertsql)){
		echo "<script>alert('链接发布成功');window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('链接发布失败');window.location.href='index.php';</script>";
	}
?>


		

		

		
	
		

		
