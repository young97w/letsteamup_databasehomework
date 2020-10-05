<?php
 include 'connect.php';
 if(isset($_POST['submit'])&&$_POST['submit']=='发起'){
    $project=$_POST['project'];

    session_start();

 $username=$_SESSION['username'];
   
    if( $project){
    $insert1=mysql_query("insert into project (id,project,founder) values(null,' $project',' $username')");
    if($insert1){

        echo"<script>alert('发起成功');window.location.href='zhuye1.php'</script>";

    }
    else{
        echo"<script>alert('发起失败');window.location.href='zhuye1.php'</script>";
    }
    }
    else echo"<script>alert('信息不能为空');window.location.href='zhuye1.php'</script>";
}

 
 ?>