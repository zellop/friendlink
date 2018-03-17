<html>
	<head>
	<title>问题类型 - 蓬江司法局</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
	
	<style>
.navbar-default .navbar-brand a{
    color: #777;
}
.card .title a{
    margin: 0;
    color: #252422;
    font-weight: 300;
}
.card .avatar {
	width: 60px;
    height: 60px;
	border-radius: 0%; 
}
.img-circle {
    border-radius: 0%;
}
</style>
	</head>
	<body>
		<center>
		<!-- 主体 -->
<div class='content'>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-lg-4 col-md-5'>
				<div class='card'>
					<div class='header'>
						<h4 class='title'>问题类型 - 蓬江司法局</h4>
					</div>
												
		<!-----搜索表单---------><br>
				<form action="page.php" method="get">
					咨询：<input type="text" name="content" size="20" value="<?php echo !empty($_GET['content'])?$_GET['content']:""; ?>" />&nbsp;
					<input type="submit" value="搜索"/>
					<input type="button" value="全部信息" onclick="window.location='fenlei.html'" />
					
				</form>
			<!-------------->
	
			<?php
			$pagefenlei = isset($_GET["id"])?$_GET['id']:1;  //当前页面分类；
			$arr=array("1","2","3","4","5","6","7","8","9","10","11","12");

			
			
					//=============================
					//封装搜索信息
					$wherelist = array();//定义一个封装搜索条件的数组变量
					$urllist = array(); //定义了一个封装搜索条件的url数组，语句放置到url后面做url参数使用
					//判断新闻标题是否有值，若有则封装此搜索条件
					/* $wherelist[]= "alinks = $pagefenlei";
					 if(!empty($_GET["content"])){
						$wherelist[]="content like '%{$_GET['content']}%'";
						$urllist[]="content={$_GET['content']}";
					}  */

					/* 		if(!empty($_GET["title"])){
						$wherelist[]="title like '%{$_GET['title']}%'";
						$urllist[]="title={$_GET['title']}";
					}
					//判断关键字是否有值，若有则封装此搜索条件
					if(!empty($_GET["phone"])){
						$wherelist[]="phone like '%{$_GET['phone']}%'";
						$urllist[]="phone={$_GET['phone']}";
					}
					*/
					$wherelist[]= "hot = 1 and done = 1";
				if(empty($_GET["content"])) {      //判断是否需要搜索
					if(is_numeric($pagefenlei)) {  //判断是否为数字
								if(in_array($pagefenlei,$arr)){    $wherelist[]= "alinks = $pagefenlei"; }  //判断分类ID数值是否在数组内
									else{return ''; } }
								}
			else{$wherelist[]="content like '%{$_GET['content']}%'";
						$urllist[]="content={$_GET['content']}"; }
					
					//组装搜索条件
					
					if(count($wherelist)>0){
						$where = " where ".implode(" and ",$wherelist);
						$url = "&".implode("&",$urllist);
					}
					//echo $where;
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
						@$sql = "select count(*) from pjsfxmdb {$where}";
						//SELECT * FROM pjsfxmdb where alinks = 2
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
						//@$sql = "select * from news {$where} order by addtime asc {$limit}";
						@$sql = "select * from pjsfxmdb {$where} order by addtime desc {$limit}";
						@$result = mysqli_query($link,$sql);
						
					//4. 解析结果集,并遍历输出
					
			
												
												
		while($row = mysqli_fetch_assoc($result)){
				echo "<div class='content'>
						<ul class='list-unstyled team-members'>
							<li>";
							echo "<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#52C277;'>问</span>&nbsp;{$row['content']}</span>";
							echo "<br /><hr />";
							echo "<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#1CB7FD;'>答</span>&nbsp;<span class='text-success' style='text-align:left;'><small>{$row['content2']}</small></span></span>";
						echo "<div style='clear:both'></div> </li>
						</ul>
					</div>";
										
						}
			echo " </div>
				</div>
			</div>
		</div>
	</div>";
			echo " <!--/*-- 主体 - */-->";
					//5. 释放结果集
						//mysql_free_result($result);
						//mysql_close($link);
						
						mysqli_free_result($result);
						mysqli_close($link);
				?>
				
				<?php
				 echo " 
		<footer class='footer'>
            <div class='container-fluid'>
                <div class='row'>
							<div class='col-md-3'>
							</div>
							<div class='col-md-6'>";
							$url = !empty($url)?$url:"";
					//输出分页信息，显示上一页和下一页的连接
					echo "<br/><br/>";
					echo "当前{$page}/{$maxPages}页 &nbsp;&nbsp; {$maxRows}条 <br/>";
					echo " <a href='page.php?id={$pagefenlei}&page=1{$url}'>首页</a> &nbsp;&nbsp;  ";
					echo " <a href='page.php?id={$pagefenlei}&page=".($page-1)."{$url}'>上一页</a>&nbsp;&nbsp;   ";
					echo " <a href='page.php?id={$pagefenlei}&page=".($page+1)."{$url}'>下一页</a> &nbsp; &nbsp; ";
					echo " <a href='page.php?id={$pagefenlei}&page={$maxPages}{$url}'>末页</a> ";

                              
							echo " </div>
							<div class='col-md-3'>
							</div>
                        </div>";
				
					
				?>
				</div>
			</footer>
			        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            版权所有 
                        </li>
                        <li>
                            <a href="#">
                                蓬江司法局
                            </a>
                        </li>
                        <li>
                            技术支持
                        </li>
                    </ul>
                </nav>
				
            </div>
        </footer>
		</center>
	</body>
	
	
    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!---<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>--->

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
</html>