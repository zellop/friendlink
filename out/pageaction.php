<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//这是一个信息增、删和改操作的处理页
	$code=$_GET["pageid"];
	$arr=array("1","2","3","4","5","6","7","8","9","10","11","12");

if(is_numeric($code)) {  //判断是否为数字
	if(in_array($code,$arr)){ 
}
else{return ''; }  }
	
//1、根据需要pageid值，来判断所属操作，执行对应的代码
	switch($code){
		case "1": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
				echo "跳转中";
				header("Location:page.php?id=1");
			break;
			
			case "2": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
				echo "跳转中";
				header("Location:page.php?id=2");
			break;
			
			case "3": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
				if ($_GET["pageid"] =="3") {
				echo "跳转中";
				header("Location:page.php?id=3");
				}
			break;
			
			case "4": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
			echo "跳转中";
				header("Location:page.php?id=4");
			break;
		
		case "5": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
			echo "跳转中";
				header("Location:page.php?id=5");
			break;
		case "6": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
			echo "跳转中";
				header("Location:page.php?id=6");
			break;
		case "7": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
			echo "跳转中";
				header("Location:page.php?id=7");
			break;

		case "8": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
			echo "跳转中";
				header("Location:page.php?id=8");
			break;
			
		case "9": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
			echo "跳转中";
				header("Location:page.php?id=9");
			break;
			
		case "10": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
			echo "跳转中";
				header("Location:page.php?id=10");
			break;
			
		case "11": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
			echo "跳转中";
				header("Location:page.php?id=11");
			break;
			
	
		case "12": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
			echo "跳转中";
				header("Location:page.php?id=12");
			break;
	}
