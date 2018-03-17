<table>
 <tr>
<?php
for($a=1;$a<11;$a++){
  if($a%2==0){
   echo "<td bgcolor='green'>"."<font size=5>".$a."</font>";
   
  }
  else {
  echo "</td><td bgcolor='red'>"."<font size=4>".$a."</font></td>";
  }
//循环输出10个单元格，是奇数就显示红色，是偶数显示绿色。

//继续一个判断，当有5个单元格后，表格就换到下一行，代码如下：
if($a%5==0){
 echo "</tr>";
 }
}
?>
</table>