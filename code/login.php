<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("错误执行");
    }//检测是否有submit操作 

    include('connect.php');//链接数据库
    $name = $_POST['name'];//post获得用户名表单值
    $passowrd = $_POST['password'];//post获得用户密码单值

    if ($name && $passowrd){//如果用户名和密码都不为空
             $sql = "select * from user where username = '$name' and password='$passowrd'";//检测数据库是否有对应的username和password的sql
             $result = mysql_query($sql);//执行sql
             $rows=mysql_num_rows($result);//返回一个数值
            /* if($rows){//0 false 1 true
                   header("refresh:0;url=zhuye.html");//如果成功跳转至welcome.html页面
                   exit;
             }else{
                echo "用户名或密码错误";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
             }*/




             if($rows) {  
                echo '<script type="text/javascript">alert("登录成功");</script>';
                echo "<script>location.href='zhuye1.php';</script>";   // 登录成功后跳转
 
                // 登陆后才能访问另外页面
 
                session_start();
              $_SESSION['username']=$name;//直接把用户名$user赋予user
            } else {
                echo '<script type="text/javascript">alert("登录失败，请重新登录");</script>'; 
 
                // 登陆后才能访问另外页面
 
                session_start();
              unset($_SESSION['username']);//注销（也就是删除session） 直接unset
            }


    }else{//如果用户名或密码有空
                echo "表单填写不完整";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='zhuye.html';},1000);
                      </script>";

                        //如果错误使用js 1秒后跳转到登录页面重试;
    }

    mysql_close();//关闭数据库
?>