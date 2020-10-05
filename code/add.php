<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>发起项目</title>
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
?>



</body>
</html>
<form method="post" action="addok.php">
    <table border="1" align='center' >
        <tr> 
    <td colspan="2" align='center'>
       </tr > 
        
       <tr>
    <td>项目</td>
    <td><input type="text" name="project" ></td>
      </tr> 

        <tr>
        <td colspan="2" align='center'>
            <input type="submit" name="submit" value="发起"></td>
     </tr>
</table>
</form>   