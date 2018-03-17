<?php
	require_once('connect.php');
	//读取旧信息
	$id = intval($_GET['id']);
	$query = mysql_query("select * from linkdb where id=$id");
	$data = mysql_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>友情链接管理系统修改界面</title>
<style type="text/css">
body {
	margin: 0px;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统--友情链接管理系统修改界面</strong></td>
  </tr>
  <tr>
    <td width="213" height="287" align="left" valign="top" bgcolor="#FFFF99">
    <p><a href="ClasslistA1.add.php">友情链接_发布</a></p>
    <p><a href="index.php">友情链接_管理</a></p>  
<hr/><br/>

</td>
    <td width="1200" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="ClasslistA1.modify.handle.php">
    	<input type="hidden" name="id" value="<?php echo $data['id']?>" />
      <table width="1200" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td colspan="11" align="center">修改链接</td>
          </tr>
        
		 <td width="70">增加时间</td>
          <td width="625"><label for="uptime"></label>
            <input type="text" name="uptime" id="uptime" value="<?php echo $data['uptime']?>"/></td>
        </tr>
        <tr>
          <td>到期时间</td>
          <td><input type="text" name="duetime" id="duetime" value="<?php echo $data['duetime']?>"/></td>
        </tr>
		<tr>
          <td>关键词</td>
          <td><input type="text" name="keyword" id="keyword" style="width:300px;" value="<?php echo $data['keyword']?>"/></td>
        </tr>
		<tr>
          <td>链接</td>
          <td><input type="text" name="link" id="link" style="width:550px;" value="<?php echo $data['link']?>"/></td>
        </tr>
		 <tr>
          <td>商户</td>
          <td><input type="text" name="bus" id="bus" value="<?php echo $data['bus']?>"/></td>
        </tr>
		<tr>
          <td>对话</td>
          <td><input type="text" name="dialog" id="dialog" value="<?php echo $data['dialog']?>"/></td>
        </tr>
		
		
		<tr>
          <td>客服</td>
          <td><input type="text" name="serivce" id="serivce" value="<?php echo $data['serivce']?>"/></td>
        </tr>
	
		<tr>
          <td>交易状态</td>
          <td><input type="text" name="status" id="status" value="<?php echo $data['status']?>"/></td>
        </tr>
		
		<tr>
          <td>掉链</td>
           <td><input type="text" name="linkout" id="linkout" value="<?php echo $data['linkout']?>"/></td>
        </tr>
       
        <tr>
          <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF99"><strong>版权所有：江门妈妈网</strong></td>
  </tr>
</table>

</body>
</html>
