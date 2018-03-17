<?php
header('content-type:text/html;charset=utf-8');
require_once 'connect.php';
require_once 'comment.class.php';
$arr=array();
$res=Comment::validate($arr);
if($res){
	$sql="INSERT linkdb(dialog,keyword,link,bus,serivce,content,uptime, uptime2, duetime2) VALUES(?,?,?,?,?,?,?,?,?);";
	$mysqli_stmt=$mysqli->prepare($sql);
	$uptimeback =$arr['uptime2']=$arr['uptime']=time();
	$duetimeback =$arr['duetime2']=strtotime("+1 month 1 day");
	$mysqli_stmt->bind_param('ssssssiii',$arr['dialog'],$arr['keyword'],$arr['link'],$arr['bus'],$arr['serivce'],$arr['content'],$arr['uptime'],$arr['uptime2'],$arr['duetime2']);
	$mysqli_stmt->execute();
	
	//JSON返回数据
	$pid = mysqli_insert_id($mysqli);
	$uptimejson =date("Y-m-d", $uptimeback);
	$duetimejson =date("Y-m-d", $duetimeback);
	
	$comment=new Comment($arr);
	echo json_encode(array('status'=>1,'html'=>$comment->output($pid,$uptimejson,$duetimejson)));
}else{
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}