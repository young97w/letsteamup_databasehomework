<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>主页</title>
</head>
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
<body style="background-color: #7de6c2">
 <table>
    <tr> <td><a href='zhuye1.php'><img src="shouye.jpg" width="30%"></a> </td>      
       </tr>
    </table>
 <?php
  echo"<table>";
    echo"<tr><td>欢迎$username</td><td><a href='outlog.php'>退出登录</td>";
    echo"</tr>";
    echo"</table>";
    echo"<table align='center'>";
    echo"<a href='add.php'>我要发起项目&nbsp&nbsp&nbsp&nbsp&nbsp";
    echo"<a href='search.php'>检索";
    echo"</table>";
include"connect.php";
$result=mysql_query("select *  from project");
echo"<table  align='center' border='0'>";
while($arr=mysql_fetch_array($result))
    {
      echo"<tr><td><a href='main.php?project=$arr[project]&founder=$arr[founder]'>$arr[project]$arr[founder]</td>";
      echo"</tr>";
    }
    echo"</table>";
    ?>
</body>
</html>