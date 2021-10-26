


 <?php
//mysql_connect("localhost","root","") or die(mysql_error());
//mysql_select_db("kpum) or die(mysql_error());

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'dbkpum';

  $conn = mysqli_connect( $host, $user, $password, $db ) or die( mysqli_error() );

?>