<?php 
require_once 'connect.php';
require_once 'comment.class.php';
?>

<!DOCTYPE html>
<head>
<body>
<title>友链更新系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css 
<link rel="stylesheet" href="singlepage/css/bootstrap.min.css" >-->
<link href="http://lib.baomitu.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>

<!--font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="http://lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
<style>
.textareaggg {
    width: 100%;
    padding: 15px 0px 15px 15px;
    border: 1px solid #fff;
    outline: none;
    font-size: 14px;
    color: #fff;
    margin: 14px 0px;
    background: none;
}
.w3layouts-main input[type="reset"] {
    padding: 12px 38px;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: #f0bcb4;
    color: white;
    border: none;
    outline: none;
    display: table;
    cursor: pointer;
    margin: 45px auto 31px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
}




.comment {
    padding: 12px;
    width: 100%;
    position: relative;
    background-color: #fcfcfc;
    border: 1px solid white;
    color: #888;
    margin-bottom: 25px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    -moz-box-shadow: 2px 2px 0 #c2c2c2;
    -webkit-box-shadow: 2px 2px 0 #c2c2c2;
    box-shadow: 2px 2px 0 #c2c2c2;
}


.comment .date {
    font-size: 10px;
    padding: 6px 0;
    position: absolute;
    right: 15px;
    top: 10px;
    color: #bbb;
}

.comment p, #addCommentContainer p {
    font-size: 18px;
    line-height: 1.5;
	font-weight:600;
	color: #666;
}
.comment p span{
color: red;
}
.w3layouts-main span {
    font-size: 16px;
    width: 100%;
    margin-top: 2px;
}
</style>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>友链更新系统</h2>
	
	<!--<div id='addCommentContainer'>-->
			<form id="addCommentForm" method="post" action="">
    	<div>
		   <label for="dialog">类型</label>
            <div id='dialog'>
					<input type="radio" name="dialog" checked='checked' value="1" />新增&nbsp;&nbsp;
					<input type="radio" name="dialog"  value="2" />更新&nbsp;&nbsp;
			</div>
			<br>
			关键词:&nbsp;&nbsp;<label for="keyword"></label>
        	<input type="text" name="keyword" class="ggg" id="keyword" required='required' placeholder='请输入您的关键词'/>
			链接:&nbsp;&nbsp;<label for="link"></label>
        	<input type="text" name="link" class="ggg" id="link" required='required' placeholder='请输入您的链接'/>
			商户:&nbsp;&nbsp;<label for="bus"></label>
        	<input type="text" name="bus" class="ggg" id="bus" required='required' placeholder='请输入您的名称'/>
			联系QQ:&nbsp;&nbsp;<label for="serivce"></label>
        	<input type="text" name="serivce" class="ggg" id="serivce" required='required' placeholder='请输入您的QQ'/>
			
			备注（选填）:&nbsp;&nbsp;<label for="content"></label>
            <textarea name="content"  class="textareaggg" id="content" cols="20" rows="5"  placeholder='请输入您的备注...'></textarea>
           
             <input type="submit" id="submit" value="提交" />
        </div>
    </form>
		<!--</div>-->
		<div id='addCommentContainer'>
		</div>

		
</div>
</div>


 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>Copyright © 2017. <br><a target="_blank" href="http://www.jmmama.com.cn/">江门妈妈网</a>&nbsp;&nbsp;技术支持<br></p>
			  
			</div>
		  </div>
  <!-- / footer -->
</section>


<script src="http://lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script src="singlepage/js/bootstrap.js"></script>-->
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<script src="js/jquery.scrollTo.js"></script>

<script type="text/javascript" src="js/comment.js"></script>
</body>
</html>