<?php
 include 'connect.php';
 
 if(isset($_POST['submit'])&&$_POST['submit']=='加入'){
    session_start();
   // $project=$_SESSION['project'];
    $participant=$_SESSION['username'];
    $founder=$_SESSION['founder'];
  // $founder=$_POST['founder'];
    $project=$_POST['project'];
   // $participant=$_POST['participant'];
    if( $project){
    $insert1=mysql_query("insert into proinfo (id,project, founder,participant) values(null,' $project' ,' $founder','$participant')");
    if($insert1){

        echo"<script>alert('成功');window.location.href='zhuye1.php'</script>";

    }
    else{
        echo"<script>alert('失败');window.location.href='zhuye1.php'</script>";
    }
    }
    else echo"<script>alert('信息不能为空');window.location.href='zhuye1.php'</script>";
}

 
 ?>