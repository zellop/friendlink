<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>友情链接管理系统添加界面</title>
<style type="text/css">
body {
	margin: 0px;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统--友情链接管理添加界面</strong><p><a href="index.php">首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ClasslistA1.manage.php">管理首页</a></p></td>
  </tr>
  <tr>
    <td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99">
   
	<p><a href="ClasslistA1.add.php">友情链接_发布</a></p>
    <p><a href="index.php">友情链接_管理</a></p>  
<hr/><br/>

	
	
	</td>
	
    <td width="837" valign="top" bgcolor="#FFFFFF">
    <form id="form1" name="form1" method="post" action="ClasslistA1.add.handle.php">
      <table width="1200" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td colspan="2" align="center">发布链接</td>
          </tr>
        <tr>
          <td width="70">增加时间</td>
          <td width="625"><label for="uptime"></label>
            <input type="text" name="uptime" id="uptime"/></td>
        </tr>
        <tr>
          <td>到期时间</td>
          <td><input type="text" name="duetime" id="duetime"/></td>
        </tr>
		<tr>
          <td>关键词</td>
          <td><input type="text" name="keyword" id="keyword" style="width:300px;"/></td>
        </tr>
		<tr>
          <td>链接</td>
          <td><input type="text" name="link" id="link" style="width:500px;"/></td>
        </tr>
		 <tr>
          <td>商户</td>
          <td><input type="text" name="bus" id="bus" value="金钱链"/></td>
        </tr>
		<tr>
          <td>对话</td>
          <td><input type="text" name="dialog" id="dialog" value="2459283870" /></td>
        </tr>
		
		
		<tr>
          <td>客服</td>
          <td><input type="text" name="serivce" id="serivce" value="江门妈妈网（瑞爵）谭"/></td>
        </tr>
	
		<tr>
          <td>交易状态</td>
          <td><input type="text" name="status" id="status" value="已付款"/></td>
        </tr>
		
		<tr>
          <td>掉链</td>
           <td><input type="text" name="linkout" id="linkout" value="正常"/></td>
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
