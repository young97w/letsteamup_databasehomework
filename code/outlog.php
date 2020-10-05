<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #7de6c2">
<table>
    <tr> <td>  <img src="shouye.jpg" width="30%"></td>
        
       </tr>


    </table>
    <?php
session_start();
unset($_SESSION['username']);
echo "退出成功！";
echo "
      <script>
            setTimeout(function(){window.location.href='zhuye.html';},1000);
      </script>";
?>

</body>
</html>