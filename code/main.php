<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>项目详情</title>
</head>
<body style="background-color: #7de6c2">
    <table>
    <tr> <td>  <a href='zhuye1.php'><img src="shouye.jpg" width="30%"></a> </td>
       </tr>
    </table>

    <?php
 session_start();
 $username=$_SESSION['username'];
 if(Empty($username)){ // 用户名等于空时 ,非法登录
  echo "非法访问！";
 echo "
       <script>
             setTimeout(function(){window.location.href='zhuye.html';},1000);
       </script>";
 exit;
 }
?>

<?php
$project=$_GET['project'];
$founder=$_GET['founder'];

session_start();
$_SESSION['project']=$project;
$_SESSION['founder']=$founder;
 $username=$_SESSION['username'];
 echo"<table>";
    echo"<tr><td>欢迎$username</td><td><a href='outlog.php'>退出登录</td>";  
    echo"</tr>";
    echo"</table>";
include"connect.php";

$result=mysql_query("select * from project where project='$project' ");
echo"<table  align='center' border='1'>";
echo"<tr><td colspan='5' align='center'>详情</td></tr>";
echo"<tr><td>项目</td><td>发起人</td></tr>";
while($arr=mysql_fetch_array($result))
    {
      echo"<tr><td>$arr[project]</td><td>$arr[founder]</td>";
      echo"</tr>";
    }
    echo"</table>";  
$result=mysql_query("select * from dbtest.proinfo where project='$project'");//使用项目名称识别
echo"<table  align='center' border='1'>";
echo"<tr><td align='center'>当前加入名单</td></tr>";

while($arr=mysql_fetch_array($result))
    {
      echo"<tr><td>$arr[participant]</td>";
      echo"</tr>";
    } 
   echo"<tr><td align='center'><a href='del.php'>我要退出</td></tr>";
    echo"</table>"; 
    
    



  ?>
</form> 



<form method="post" action="infoaddok.php" align='center' >
<table border="1" align='center' >
    <tr> 
<td colspan="2" align='center'>
   </tr > 
   <tr>
<td>项目</td>
<td><input type="text" name="project"  ></td>
  </tr>
    <td colspan="2" align='center'>
        <input type="submit" name="submit" value="加入"></td>
 </tr>
</table>
</form>
</body>
</html>

