<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//这是一个信息增、删和改操作的处理页

//（1）、 导入配置文件
	require("tdbconfig.php");
	
//（2）、连接MySQL、并选择数据库
	$alinksql = @mysql_connect(HOST,USER,PASS) or die("数据库连接失败！");
	mysql_select_db(DBNAME,$alinksql);
	
//（3）、根据需要action值，来判断所属操作，执行对应的代码
	switch($_GET["action"]){
		case "add": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
				$displayorder = $_GET["displayorder"];
				
				$keyword = $_GET["keyword"];
				$link = $_GET["link"];
				
				$type = $_GET["type"];
				
				


			//2. 做信息过滤（省略）
			//3. 拼装添加SQL语句，并执行添加操作
				$sql = "insert into pre_common_friendlink (`id`, `displayorder`, `name`, `url`, `type`) values(null,'{$displayorder}','{$keyword}','{$link}','{$type}')";
				//echo $sql;
				//echo $sql;
			    mysql_query($sql,$alinksql);
				
				
				//4. 判断是否成功
				$id = mysql_insert_id($alinksql);//获取刚刚添加信息的自增id号值
				if($id>0){
					echo "<h3>新闻信息添加成功！</h3>";
				}else{
					echo "<h3>新闻信息添加失败！</h3>";
				}
				
				echo '<br>.ok';
				
				break;
		
	
	
	}

//（4）、关闭数据连接
	mysql_close($alinksql);