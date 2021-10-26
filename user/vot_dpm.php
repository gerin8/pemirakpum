<?php 

	include "../koneksi.php";
	
	session_start();

	if (@$_SESSION['NPM']) 
	{
		header("location: Index.php");
	}

	if (@$_GET['no']) 
	{
		
		$no = $_GET['no'];

		$data = mysqli_query($conn,"select * from hasil_dpm where NPM = '$_SESSION[NPM]' ");
		$cek = mysqli_fetch_array($data);

		if ($cek['status'] == "sudah" ) 
		{

			header("location: alert.php");

		} else 
		{

			$db = mysqli_query($conn,"insert into hasil_dpm (NPM,no,status) VALUES ('$_SESSION[NPM]','$no','sudah') ");
			header("location: done.php");
		}

}

?>