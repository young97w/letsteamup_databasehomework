<?php 
include"connect.php";
$result=mysql_query("select * from project");
echo"<table  align='center' border='1'>";
echo"<tr><td colspan='5' align='center'>项目合作系统<a href='add.php'>添加</a> </td></tr>";
echo"<tr><td>项目</td><td>发起人</td><td>参与人</td><td>退出</td></tr>";
while($arr=mysql_fetch_array($result))
    {
      echo"<tr><td>$arr[project]</td><td>$arr[founder]</td><td>$arr[participant]</td>";
      echo"</tr>";
 
    }
    echo"</table>";
    ?>