<?php
 include 'connect.php';


 session_start();
 $username=$_SESSION['username'];
 $project=$_SESSION['project'];
 $founder=$_SESSION['founder'];

    
   
 
    $insert1=mysql_query("delete from dbtest.proinfo where project='$project' and participant='$username'");
    if($insert1){

        echo"<script>alert('退出成功');window.location.href='zhuye1.php'</script>";

    }
    else{
        echo"<script>alert('退出失败');window.location.href='zhuye1.php'</script>";
    }
   
 
?>