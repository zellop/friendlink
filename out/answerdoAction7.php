<?php
header('content-type:text/html;charset=utf-8');
	
//echo "搜索编号是：".$_POST["swid"];
	
		$swid=	$_POST["swid"];
					//=============================
					//封装搜索信息
					//$wherelist = array();//定义一个封装搜索条件的数组变量
					//$urllist = array(); //定义了一个封装搜索条件的url数组，语句放置到url后面做url参数使用
					//判断新闻标题是否有值，若有则封装此搜索条件
					/* 
					 if(!empty($_POST["content"])){
						$wherelist[]="content like '%{$_POST['content']}%'";
						$urllist[]="content={$_POST['content']}";
					}  */

					/* 		if(!empty($_POST["title"])){
						$wherelist[]="title like '%{$_GET['title']}%'";
						$urllist[]="title={$_GET['title']}";
					}
					//判断关键字是否有值，若有则封装此搜索条件
					if(!empty($_GET["phone"])){
						$wherelist[]="phone like '%{$_GET['phone']}%'";
						$urllist[]="phone={$_GET['phone']}";
					}
					*/
			if(empty($_POST["swid"])) {      //判断是否需要搜索
				//$where = "where id = 1";
				return '';
				}
				
			else{if(is_numeric(($_POST["swid"]))) {
				$where = "where id = '{$_POST['swid']}'";} //判断是否为数字
								
				else{return ''; } 
				
				}
					
					
					//组装搜索条件
					
					
						/* $where = " where ".implode(" and ",$wherelist);
						$where ="&".implode("&",$urllist); */
					
					//echo $where.'<BR>';
					//echo $url;
					//=============================
					
					//1.导入配置文件
						require("idbconfig.php");
						
					//2.连接MySQL，选择数据库
					//	$link = @mysql_connect(HOST,USER,PASS) or die("数据库连接失败！");
					//	mysql_select_db(DBNAME,$link);
						
					//2.连接MySQLi，选择数据库
					$link = mysqli_connect(HOST,USER,PASS,DBNAME);
						// Check connection
						if (!$link) {
							die("连接失败: " . mysqli_connect_error());
						}
						
					//2.1 插入分页处理代码
					//======================================
						//1. 定义一些分页变量
						$page=isset($_GET["page"])?$_GET['page']:1;		//当前页号
						$pageSize=6;	//页大小
						$maxRows;		//最大数据条
						$maxPages;		//最大页数
						
						//2. 获取最大数据条数
						@$sql = "select count(*) from linkdb {$where}";
						//echo  $sql.'<BR>';
						//SELECT * FROM linkdb where alinks = 2
						//$sql = "select * from jmfulian order by addtime desc";; 
						$res = mysqli_query($link,$sql);
						//$maxRows = mysql_result($res,0,0); //定位从结果集中获取总数据条数这个值。
						
						$maxRows = mysqli_result($res,0) ;  //mysqli里没有和mysql_result()相对应的函数，因此自定义一个

							function mysqli_result($res,$n){    
								$arr = mysqli_fetch_array($res);    
								return $arr[$n]; 
							}
						
						//3. 计算出共计最大页数
						$maxPages = ceil($maxRows/$pageSize); //采用进一求整法算出最大页数 
						
						//4. 效验当前页数
						if($page>$maxPages){
							$page=$maxPages;
						}
						if($page<1){
							$page=1;
						}
						
						//5. 拼装分页sql语句片段
						$limit = " limit ".(($page-1)*$pageSize).",{$pageSize}";   //起始位置是当前页减一乘以页大小
					//======================================
					
					//3. 执行查询，并返回结果集
					//select * from linkdb  where id=112 order by addtime desc LIMIT 1
					
						//@$sql = "select * from news {$where} order by addtime asc {$limit}";
						@$sql = "select * from linkdb {$where}  {$limit}";
						//echo  $sql.'<BR>';
						@$result = mysqli_query($link,$sql);
						
					//4. 解析结果集,并遍历输出
					
			
												
												
		while($row = mysqli_fetch_assoc($result)){
			$msg['swid'] = "搜索编号是：$swid";
			$msg['keyword'] = "{$row['keyword']}";
			$msg['link'] = "{$row['link']}";
			$msg['uptime2'] = date("Y-m-d", $row['uptime2']);
			$msg['duetime2'] = date("Y-m-d", $row['duetime2']);
			$msg['inimg'] = "<img id='inimg' src='".$row['inimg']."' width='800px' />";
			echo json_encode($msg);
			}

			
					//5. 释放结果集
					
						
						mysqli_free_result($result);
						mysqli_close($link);
				?>