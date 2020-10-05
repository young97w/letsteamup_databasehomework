<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>检索</title>
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
    <form method="post" action="search.php" align='center' >
<table border="1" align='center' >
    <tr> 
<td colspan="2" align='center'>
   </tr > 
 
   <tr>
<td>项目名称</td>
<td><input type="text" name="project"  ></td>
  </tr>
    <tr>
    <td colspan="2" align='center'>
        <input type="submit" name="submit" value="搜索"></td>
 </tr>
</table>
</form> 
<?php
 if(!isset($_POST["submit"])){
    exit("错误执行");
}//检测是否有submit操作 
$stuff = $_POST['project'];
include"connect.php";
$result=mysql_query("select *  from project where project like '%$stuff%'");
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