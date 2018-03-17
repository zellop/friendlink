<?php
$mysqli=new mysqli('jmmmwtest.mysql.rds.aliyuncs.com','tintest01','phaO31e8fJ2A','shiyong');
if($mysqli->errno){
	die('Connect Error:'.$mysqli->error);
}else{
	$mysqli->set_charset('UTF8');
}