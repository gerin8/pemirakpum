<?php 
  @session_start();
  include"../koneksi.php";

  if( @$_SESSION['NPM']){
$sql = mysqli_query($conn,"select * from user where NPM = '$_SESSION[NPM]'") or die(mysqli_error());
$id = mysqli_fetch_array($sql);
?>


<center><h1>Terima kasih sudah memilih<br>
Klik tulisan ini untuk memilih Ketua Himpunan Prodi <br><a href="?page=hima&id=<?php echo $id['id'];?>"/><font color="red"> Ketua Himpunan Prodi</font></a></h1>
<?php 
}
?>