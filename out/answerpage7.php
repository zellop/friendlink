<html>
	<head>
	<title>友链更新系统</title>
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
.navbar-brand {
    float: left;
    height: 50px;
    padding: 15px 0px 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
.header .title {
	margin-left: -15px;
}
.text-center {
    text-align: center;
    margin-bottom: 10px;
}
.form-control {
	width: 80%;
}
.none{display:none;}
</style>
<style type="text/css">
.demo{width:620px; margin:30px auto}
.demo p{line-height:32px}
.btn{position: relative;overflow: hidden;margin-right: 4px;display:inline-block;*display:inline;padding:4px 10px 4px;font-size:14px;line-height:18px;*line-height:20px;color:#fff;text-align:center;vertical-align:middle;cursor:pointer;background-color:#5bb75b;border:1px solid #cccccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
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

.google_ad{width:728px; height:90px; margin:50px auto}
.ad_76090,.ad_demo{width:760px; height:90px; margin:40px auto}
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
				<!--<span class="navbar-brand"><a href="javascript:history.go(-1);"><small><span class="ti-angle-left"></span>返回</small></a></span><br>-->
					<div class='header'>
					<div class="text-center">
						<h4 class='title'>友链更新系统</h4>
						</div>
					</div>
												
	
			
			<!-----搜索表单---------><br>
				<form id="" method="post" action="">
					<label>咨询编号：</label>
					<input type="text" class="form-control border-input" name="swid" id="inputsw" size="20" value="<?php echo !empty($_GET['swid'])?$_GET['swid']:""; ?>" />&nbsp;
					<!--<input type="submit" value="搜索"/>--> 
					
				</form>
				<div class="text-center">
					<button class="btn btn-success btn-fill btn-wd" id="btn">搜索</button>
					<input type="button" class="btn btn-info btn-fill btn-wd" value="重置" onclick="window.location='answerpage6.php'" />
				</div>
			<!-------------->
		
			
				<br>
				</div>
				
				<br>
			<div class="card none" id="contentcard">
						
							
					<div id="swid">搜索编号是：</div>
					<div class='content'>
						<ul class='list-unstyled team-members'>
							<li>
								<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#52C277;'>关键词：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<span id="keyword"></span>
								</span>
							<br /><hr />
							<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#1CB7FD;'>链接</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='text-success' style='text-align:left;'><span id="link"></span></span></span><br /><hr />
							<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#f3bb45;'>上架时间：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='text-success' style='text-align:left;'><span id="uptime2"></span></span></span><br /><br />
							<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#1CB7FD;'>到期时间：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='text-success' style='text-align:left;'><span id="duetime2"></span></span></span>
						<div style='clear:both'></div> </li>
						</ul>
					</div>
										
	</div>
			
			
		
		<!--<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            版权所有 
                        </li>
                        <li>
                          
                        </li>
                        <li>
                            技术支持
                        </li>
                    </ul>
                </nav>
				
            </div>
        </footer>-->
		</center>
	</body>
	
	
    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	
	  <script>
$(function(){

 $("#btn").click(function(){
	   var swid=$("#inputsw").val();
		var data={swid:swid};  //z转换成JSON格式
    
	   
      
	  //alert(swida);
	   //var data = {'swid':'53'}
/* 	 $.post('answer/answerdoAction6.php',data,function(msg){
			$("#box").html(msg);
	}); */
	
	
	$.ajax({
		'url':'answerdoAction7.php',
		 data,
		 'success':function(msg){
			$("#swid").html(msg.swid);
			$("#keyword").html(msg.keyword);
			$("#link").html(msg.link);
			$("#uptime2").html(msg.uptime2);
			$("#duetime2").html(msg.duetime2);
			$('#contentcard').removeClass('none');
		},
		'dataType':'json',
		'type':'post',
	});
	
  });
  
/*    $("#btn").click(function(){
    
	 $.get('answer/answerdoAction3.php',{'swid':'33'},function(msg){
			$("#box").html(msg);
	});
  }); */
  
});
</script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	
	<script type="text/javascript" src="answer/answer.js"></script>
	
	
	
<script src="http://lib.baomitu.com/jquery/1.12.4/jquery.js"></script>
<script type="text/javascript" src="upload/jquery.form.js"></script>

<div class='container-fluid'>
		<div class='row'>
			<div class='col-lg-4 col-md-5'>
				<div class='card'>
				<!--<span class="navbar-brand"><a href="javascript:history.go(-1);"><small><span class="ti-angle-left"></span>返回</small></a></span><br>-->
					<div class='header'>
					<div class="text-center">
						<h4 class='title'>友链更新系统</h4>
						</div>
					</div>
												
	
			
			<!-----搜索表单---------><br>
				<form action="action.php?action=update&id=" method="post">
					<label>交款图片：</label>
					<input type="text" class="form-control border-input" name="img" id="imgspan" size="20"  />&nbsp;
					<!--<input type="submit" value="搜索"/>--> 
					
				</form>
				<div class="text-center">
					<button class="btn btn-success btn-fill btn-wd" id="btn">提交</button>
					
				</div>
			<!-------------->
		
			
				<br>
				</div></div></div></div>


 <div id="main">
   <div class="demo">
   <span class="none">
   <input type="file"><br/>
   </span>
   		<p>说明：示例中只允许上传gif/jpg格式的图片，图片大小不能超过500k。</p>
   		<div class="btn">
            <span>添加附件</span>
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
				files.html("<b>上传图片："+data.name+"("+data.size+"k)</b> <span class='delimg' rel='"+data.pic+"'>删除</span><br><b style='color:red;'>图片地址：http://127.0.0.1/link/201709223/out/upload/files/"+data.pic+"<b>");
				//var img = "/jmwebpage/jmfulian/img/upload/files/"+data.pic;   图片地址：http://web.jmmama.com.cn/jmwebpage/jmfulian/img/upload/files/"+data.pic+"<b>"
				//http://127.0.0.1/jmfulian/20170921/img/upload/files/"+data.pic+"</b>"
				
				var img = "http://127.0.0.1/link/201709223/out/upload/files/"+data.pic;
				var img2= "http://127.0.0.1/link/201709223/out/upload/files/"+data.pic;
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
	
	
	
</html>


<?php
	if($_GET["swid"]){
			$swid= $_GET["swid"];
			//echo $swid;
			
			if(is_numeric(($_GET["swid"]))) {
				$where = "where id = '{$_GET['swid']}'";} //判断是否为数字
				else{return ''; } 
				
					
					
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
						
						function mysqli_result($res,$n){    
								$arr = mysqli_fetch_array($res);    
								return $arr[$n]; 
							}
						
						$maxRows = mysqli_result($res,0) ;  //mysqli里没有和mysql_result()相对应的函数，因此自定义一个

							
						
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
												
				echo "<div class='card' id='contentcard'>";
					echo "<div id='swid' style='text-align: center'>搜索编号是：{$row['id']}</div>
					<div class='content'>
						<ul class='list-unstyled team-members'>
							<li>";
							echo "	<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#52C277;'>关键词：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row['keyword']}</span>";
							echo "<br /><hr />
							<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#1CB7FD;'>链接</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='text-success' style='text-align:left;'>{$row['link']}
							</span></span><br /><hr />";
							echo "<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#f3bb45;'>上架时间：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='text-success' style='text-align:left;'>".date("Y-m-d", $row['uptime2'])."</span></span><br /><br />";
							echo "<span style='float:left;'><span style='padding:1px;color:#ffffff;background-color:#1CB7FD;'>到期时间：</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='text-success' style='text-align:left;'>".date("Y-m-d", $row['duetime2'])."</span></span>";
						echo "	<div style='clear:both'></div> </li>
						</ul>
					</div>
										
				</div>";
												
			}							
												

						
						mysqli_free_result($result);
						mysqli_close($link);
						
						}
				?>