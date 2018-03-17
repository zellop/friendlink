<?php
	require_once('connect.php');
	$sql = "select * from linkdb order by duetime asc";
	$query  = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row =mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}else{
		$data = array();
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>友情链接管理系统</title>
<style type="text/css">
body {
	margin: 0px;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>友情链接管理系统</strong><p><a href="index.php">首页</a></p></td>
  </tr>
  <tr>
    <td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99">
	<p><a href="ClasslistA1.add.php">友情链接_发布</a></p>
    <p><a href="index.php">友情链接_管理</a></p>  
<hr/><br/>

	

	</td>
    <td width="1600" valign="top" bgcolor="#FFFFFF"><table width="1500" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
      <tr>
        <td colspan="11" align="center" bgcolor="#FFFFFF">友情链接列表</td>
        </tr>
      <tr>
        <td width="37" bgcolor="#FFFFFF">编号</td>
        <td width="150" bgcolor="#FFFFFF">增加时间</td>
		<td width="150" bgcolor="#FFFFFF">到期时间</td>
        <td width="150" bgcolor="#FFFFFF">关键词</td>
		<td width="500" bgcolor="#FFFFFF">链接</td>
		<td width="150" bgcolor="#FFFFFF">商户</td>
		<td width="50" bgcolor="#FFFFFF">对话</td>
		<td width="150" bgcolor="#FFFFFF">客服</td>
		<td width="150" bgcolor="#FFFFFF">交易状态</td>
		<td width="150" bgcolor="#FFFFFF">掉链（正常）</td>
		<td width="150" bgcolor="#FFFFFF">操作</td>
      </tr>
	<?php 
		if(!empty($data)){
			foreach($data as $value){
	?>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['uptime']?></td>
		<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['duetime']?></td>
		<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['keyword']?></td>
		<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['link']?></td>
		<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['bus']?></td>
		<td bgcolor="#FFFFFF">&nbsp;<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $value['dialog']?>&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $value['dialog']?>:41" alt="QQ客服" title="点击这里给我发消息"><?php echo $value['dialog']?></a></td>
		<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['serivce']?></td>
		<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['status']?></td>
		<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['linkout']?></td>
        <td bgcolor="#FFFFFF"><a href="ClasslistA1.del.handle.php?id=<?php echo $value['id']?>">删除</a> <a href="ClasslistA1.modify.php?id=<?php echo $value['id']?>">修改</a></td>
      </tr>
        <?php
        		}
		}
        ?>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF99"><strong>版权所有：江门妈妈网</strong></td>
  </tr>
</table>
</body>
</html>
