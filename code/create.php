 <?php
  $dbhost='127.0.0.1';
  $dbuser='root';
  $dbpass='168168';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
  echo'连接成功';
   $sql="create table proinfo(
        id int(10) not null auto_increment,
        project varchar(40),
        founder   varchar(40),
        participant varchar(40),
        primary key(id))";
        mysql_select_db('dbtest');
       $retval=mysql_query($sql,$conn);
       if(!$retval)
       {die('failed'.mysql_error());}
       echo"su";
       mysql_close($conn);
 ?>
