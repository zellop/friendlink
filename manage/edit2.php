<html>
	<head>
		<title>新闻管理系统</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<style type="text/css">
.demo{width:620px; margin:30px auto}
.demo p{line-height:32px}
.btn{position: relative;overflow: hidden;margin-right: 4px;display:inline-block;*display:inline;padding:4px 10px 4px;font-size:14px;line-height:18px;*line-height:20px;color:#fff;text-align:center;vertical-align:middle;cursor:pointer;background-color:#5bb75b;border:1px solid #cccccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px; min-width: 140px;}
.btn input {position: absolute;top: 0; right: 0;margin: 0;border: solid transparent;opacity: 0;filter:alpha(opacity=0); cursor: pointer;}
.progress { position:relative; margin-left:100px; margin-top:-24px; width:200px;padding: 1px; border-radius:3px; display:none}
.bar {background-color: green; display:block; width:0%; height:20px; border-radius: 3px; }
.percent { position:absolute; height:20px; display:inline-block; top:3px; left:2%; color:#fff }
.files{height:22px; line-height:22px; margin:10px 0}
.delimg{margin-left:20px; color:#090; cursor:pointer}

@charset "utf-8";
/* CSS Document */
html,body,div,span,h1,h2,h3,h4,h5,h6,p,pre,a,code,em,img,small,strong,sub,sup,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}
a{color:#007bc4/*#424242*/; text-decoration:none;outline: none;}
a:hover{text-decoration:underline}
a:focus {outline:none; -moz-outline:none;}
ol,ul{list-style:none}
table{border-collapse:collapse;border-spacing:0}
body{height:100%; font:14px/18px "Microsoft Yahei", Tahoma, Helvetica, Arial, Verdana, "\5b8b\4f53", sans-serif; color:#51555C; }
img{border:none}


#header{width:980px; height:90px; margin:0px auto; position:relative;}
#logo{width:240px; height:90px; background:url(../images/logo_demo.gif) no-repeat}
#logo h1{text-indent:-999em}
#logo h1 a{display:block; width:240px; height:90px}


#main{width:720px; min-height:300px; margin:30px auto 0 auto; border:1px solid #d3d3d3; background:#fff; -moz-border-radius:5px;-khtml-border-radius: 5px;-webkit-border-radius: 5px; border-radius:5px;}
h2.top_title{margin:4px 20px; padding-top:15px; padding-left:20px; padding-bottom:10px; border-bottom:1px solid #d3d3d3; font-size:18px; color:#a84c10; background:url(../images/arrL.gif) no-repeat 2px 16px}

#footer{height:60px;}
#footer p{ padding:10px 2px; line-height:24px; text-align:center}
#footer p a:hover{color:#51555C}
#stat{display:none}


.demo_topad{position:absolute; top:15px; right:0px; width:472px; height:60px;}


@media screen and (min-width: 320px) and (max-width : 480px) {
 html{-webkit-text-size-adjust: none;}
 #header{width:100%}
 #main{width:100%; margin:10px auto;  -moz-border-radius:0px;-khtml-border-radius: 0px;-webkit-border-radius: 0px; border-radius:0px;}
 .demo_topad{display:none}
 .google_ad{width:100%; margin:40px auto; text-align:center}
.ad_76090,.ad_demo{width:100%; height:auto; margin:40px auto;text-align:center}
.demo{width:98%; margin:10px auto}
}
.none{display:none;}



.submit {
    color: #FFFFFF;
    background-color: #42A084;
    opacity: 1;
}
.reset {
    color: #FFFFFF;
    background-color: #68B3C8;
    opacity: 1;
    filter: alpha(opacity=100);
}

</style>
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
			
			<h3>编辑</h3>
			<form action="action2.php?action=update" method="post">
				<input type="hidden" name="id" value="<?php echo $news['id']; ?>"/>
				<table width="640" border="0">
					<tr>
						<td align="right">*增加时间:</td>
						<td><input type="text" name="uptime2" value="<?php echo date("Y-m-d",$news['uptime2']); ?>"/></td>
					</tr>
					<tr>
						<td align="right">*到期时间:</td>
						<td><input type="text" name="duetime2" value="<?php echo date("Y-m-d",$news['duetime2']); ?>"/></td>
					</tr>
					<tr>
						<td align="right">排序:</td>
						<td><input type="text" name="uptime" value="<?php echo $news['uptime']; ?>"/></td>
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
						<td><input type="text" name="status" autocomplete="on" value="<?php echo $news['status']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">位置:</td>
						<td><input type="text" name="linkout" value="<?php echo $news['linkout']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">上架图片:</td>
						<td><input style="width:500px" type="text" name="inimg" id="imgspan" value="<?php echo $news['inimg']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">交款图片:</td>
						<td><input type="text" name="outimg" value="<?php echo $news['outimg']; ?>"/></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center">
							<input class="submit btn" type="submit" value="编辑"/>&nbsp;&nbsp;
							<input class="reset btn" type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
			
			
			
<script src="http://lib.baomitu.com/jquery/1.12.4/jquery.js"></script>
<script type="text/javascript" src="upload/jquery.form.js"></script>



 <div id="main">
   <div class="demo">
   <span class="none">
   <input type="file"><br/>
   </span>
   		<p>说明：示例中只允许上传gif/jpg格式的图片，图片大小不能超过500k。</p>
   		<div class="btn">
            <span>添加图片</span>
            <input id="fileupload" type="file" name="mypic">
        </div>
        <div class="progress">
    		<span class="bar"></span><span class="percent">0%</span >
		</div>
        <div class="files"></div>
        <div id="showimg"></div>
   </div>
</div>

<script type="text/javascript">
$(function () {
	var bar = $('.bar');
	var percent = $('.percent');
	var showimg = $('#showimg');
	var progress = $(".progress");
	var files = $(".files");
	var btn = $(".btn span");
	function giveValue(img2){  //图片链接输入图片框
		document.getElementById("imgspan").value = img2;
	}
	
	$("#fileupload").wrap("<form id='myupload' action='upload/action.php' method='post' enctype='multipart/form-data'></form>");
    $("#fileupload").change(function(){
		$("#myupload").ajaxSubmit({
			dataType:  'json',
			beforeSend: function() {
        		showimg.empty();
				progress.show();
        		var percentVal = '0%';
        		bar.width(percentVal);
        		percent.html(percentVal);
				btn.html("上传中...");
    		},
    		uploadProgress: function(event, position, total, percentComplete) {
        		var percentVal = percentComplete + '%';
        		bar.width(percentVal);
        		percent.html(percentVal);
    		},
			success: function(data) {
				files.html("<b>上传图片："+data.name+"("+data.size+"k)</b> <span class='delimg' rel='"+data.pic+"'>删除</span><br><b style='color:red;'>图片地址：http://web.jmmama.com.cn/jmwebpage/link/manage/upload/files/"+data.pic+"<b>");
				//var img = "/jmwebpage/jmfulian/img/upload/files/"+data.pic;   图片地址：http://web.jmmama.com.cn/jmwebpage/jmfulian/img/upload/files/"+data.pic+"<b>"
				//http://127.0.0.1/jmfulian/20170921/img/upload/files/"+data.pic+"</b>"
				
				var img = "http://web.jmmama.com.cn/jmwebpage/link/manage/upload/files/"+data.pic;
				var img2= "http://web.jmmama.com.cn/jmwebpage/link/manage/upload/files/"+data.pic;
				showimg.html("<br><br><img width='350px' src='"+img+"'>");
				btn.html("添加附件");
				//$("#imgspan").html(img2);
				giveValue(img2);//图片链接输入图片框函数
				},
			error:function(xhr){
				btn.html("上传失败");
				bar.width('0')
				files.html(xhr.responseText);
			}
		});
	});
	
	$(".delimg").on('click',function(){
		var pic = $(this).attr("rel");
		$.post("action.php?act=delimg",{imagename:pic},function(msg){
			if(msg==1){
				files.html("删除成功.");
				showimg.empty();
				progress.hide();
			}else{
				alert(msg);
			}
		});
	});
});
</script>
			
			
			
		</center>
	</body>
</html>