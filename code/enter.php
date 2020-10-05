<?php
 include 'connect.php';

   
    session_start();
 $username=$_SESSION['username'];
 $project=$_SESSION['project'];
 $founder=$_SESSION['founder'];


 echo"$project $founder $username";

    
   
 
    $insert1=mysql_query("insert into dbtest.proinfo (id,project, founder,participant) values(null,' $project' ,' $founder','$username')");
    if($insert1){

      echo"<script>alert('成功');window.location.href='zhuye1.php'</script>";

   }
   else{
     echo"<script>alert('失败');window.location.href='zhuye1.php'</script>";
   }
   
 
?>