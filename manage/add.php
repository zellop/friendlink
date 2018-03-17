<html>
	<head>
		<title>友链管理系统</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<center>
			<?php include("menu.php"); //导入导航栏 ?>
			
			<h3>发布友链</h3>
			<form action="action.php?action=add" method="post">
				<table width="640" border="0">
					<tr>
						<td align="right">*增加时间:</td>
						<td><input type="text" name="uptime" id="uptime"/></td>
					</tr>
					<tr>
						<td align="right">*到期时间:</td>
						<td><input type="text" name="duetime" id="duetime"/></td>
					</tr>
					<tr>
						<td align="right">*关键词:</td>
						<td><input type="text" name="keyword"/></td>
					</tr>
					<tr>
						<td align="right">*链接:</td>
						<td><input style="width:500px" type="text" name="link"/></td>
					</tr>
					<tr>
						<td align="right">*商户:</td>
						<td><input list="bus" name="bus">
							<datalist id="bus">
							  <option value="金钱链">
							  <option value="努力努力">
							  <option value="A小丸子tell">
							  <option value="Rolle（风中百合）">
							  <option value="猎人">
							  <option value="晚晚(多轮多县长)">
							  <option value="网盾传媒-刘">
							</datalist></td>
					</tr>

					<tr>
						<td align="right">对话:</td>
						<td><input  type="text" name="dialog"/></td>
					</tr>
					<tr>
						<td align="right">客服:</td>
						<td><input type="text" name="serivce" value="江门妈妈网（瑞爵）谭"/></td>
					</tr>
					<tr>
						<td align="right">状态:</td>
						<td><input type="text" name="status" value="已付款"/></td>
					</tr>
					<tr>
						<td align="right" valign="top" value="正常">位置:</td>
						<td><input type="text" name="linkout"/></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="添加"/>&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
			<br/><hr/>
				<h4>
			1.	A13&nbsp;&nbsp;&nbsp;
			2.努力努力&nbsp;&nbsp;&nbsp;
			3.金钱链&nbsp;&nbsp;&nbsp;
			4.A小丸子tell&nbsp;&nbsp;&nbsp;
			5.Rolle（风中百合）&nbsp;&nbsp;&nbsp;
			6.猎人&nbsp;&nbsp;&nbsp;
			7.晚晚(多轮多县长)&nbsp;&nbsp;&nbsp;
			8.网盾传媒-刘&nbsp;&nbsp;&nbsp;</h4>
<br><strong>版权所有：江门妈妈网</strong>
		</center>
	</body>
</html>