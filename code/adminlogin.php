<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("错误执行");
    }//检测是否有submit操作 

  
    
    $passowrd = $_POST['password'];//post获得用户密码单值

    if($passowrd=='#300'){

        echo "<script>location.href='http://localhost:8080/mysqladmin/index.php';</script>";

    }else {echo '<script type="text/javascript">alert("登录失败，请重新登录");</script>'; 
        echo "
        <script>
              setTimeout(function(){window.location.href='adminlogin.html';});
        </script>";
  exit;
      

       
    }

?>