<html>
	<head>
		<title>新闻管理系统</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<center>
			<?php 
				include("menu.php"); //导入导航栏 
				
				//1. 导入配置文件
					require("dbconfig.php");
					
				//2. 连接MySQL、选择数据库
					$alink = @mysql_connect(HOST,USER,PASS) or die("数据库连接失败！");
					mysql_select_db(DBNAME,$alink);
					
				//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
					$sql = "select * from linkdb where id={$_GET['id']}";
					$result = mysql_query($sql,$alink);
					
				//4. 判断是否获取到了要修改的信息
					if($result && mysql_num_rows($result)>0){
						$news = mysql_fetch_assoc($result);
					}else{
						die("没有找到要修改的信息！");
					}
			?>
			
			<h3>编辑新闻</h3>
			<form action="action.php?action=update" method="post">
				<input type="hidden" name="id" value="<?php echo $news['id']; ?>"/>
				<table width="640" border="0">
					<tr>
						<td align="right">*增加时间:</td>
						<td><input type="text" name="uptime" value="<?php echo $news['uptime']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">*到期时间:</td>
						<td><input type="text" name="duetime" value="<?php echo $news['duetime']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">*关键词:</td>
						<td><input type="text" name="keyword" value="<?php echo $news['keyword']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">*链接:</td>
						<td><input style="width:500px" type="text" name="link" value="<?php echo $news['link']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">*商户:</td>
						<td><input type="text" name="bus" value="<?php echo $news['bus']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">对话:</td>
						<td><input  type="text" name="dialog" value="<?php echo $news['dialog']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">客服:</td>
						<td><input type="text" name="serivce" value="<?php echo $news['serivce']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">状态:</td>
						<td><input type="text" name="status" value="<?php echo $news['status']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">位置:</td>
						<td><input type="text" name="linkout" value="<?php echo $news['linkout']; ?>"/></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="编辑"/>&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>