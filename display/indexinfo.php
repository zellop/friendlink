<html>
<head>
    <style>
    .frlinks a {
    color: #444;
    text-decoration: none;
        font-size: 13px;
		word-wrap: break-word;
		text-overflow:ellipsis;
    }

    .frlinks td{
       
         width:10%;
        height: 1em;
        
		white-space:overflow;
        word-wrap: break-word;
        white-space:nowrap;
       
        overflow:hidden;
        
    }
    </style>
</head>

	<body>
		<center>
			

		<table  class="frlinks">
				
				<?php
					
					
					//1.导入配置文件
						require("dbconfig.php");
						
					//2.连接MySQL，选择数据库
						$link = @mysql_connect(HOST,USER,PASS) or die("数据库连接失败！");
						mysql_select_db(DBNAME,$link);
						
					//2. 获取最大数据条数
						@$sql = "select count(*) from linkdb {$where}";
						//$sql = "select * from jmfulian order by addtime desc";; 
						$res = mysql_query($sql,$link);
						$maxRows = mysql_result($res,0,0); //定位从结果集中获取总数据条数这个值。
						//3. 计算出共计最大页数
						//echo $maxRows;
					
					//3. 执行查询，并返回结果集
						//@$sql = "select * from news {$where} order by addtime asc {$limit}"; id keyword link
						@$sql = "select id,keyword,link  from linkdb  order by uptime asc ";
						@$result = mysql_query($sql,$link);
						
					//4. 解析结果集,并遍历输出
					
						$a=1;
						echo "<tr>";
while($row = mysql_fetch_assoc($result)){
	

echo "<td style='word-break:break-all' width='3%'><a target='_blank' href = '{$row['link']}'>{$row['keyword']}</a></td>";
							
				
							
if($a%11==0){
 echo "</tr>";
}
 $a++;
						}

						
						
					//5. 释放结果集
						mysql_free_result($result);
						mysql_close($link);
				?>
			</table>
				

		</center>
	</body>
</html>