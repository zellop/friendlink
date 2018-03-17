<?php 
if(is_file('./indexcache.html') && (time()-filemtime('./indexcache.html') < 5)) {
	require_once('./indexcache.html');
}else{

	ob_start();//开启php缓存区
	//引入模板文件
	//require_once('./indexyu.php');
	//file_get_contents("http://www.baidu.com");
	

	
$url='http://web.jmmama.com.cn/jmwebpage/link/display/indexinfo.php'; 
$html = file_get_contents($url); 
echo $html; 
	
	file_put_contents('indexcache.html',ob_get_contents());
}
?>
