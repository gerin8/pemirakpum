<?php 

	include "../koneksi.php";
	
	session_start();

	if (@$_SESSION['NPM']) 
	{
		header("location: Index.php");
	}

	if (@$_GET['no_urut']) 
	{
		
		$no = $_GET['no_urut'];

		$data = mysqli_query($conn,"select * from hasil_hmjab where NPM = '$_SESSION[NPM]' ");
		$cek = mysqli_fetch_array($data);

		if ($cek['status'] == "sudah" ) 
		{

			header("location: alert.php");

		} else 
		{

			$db = mysqli_query($conn,"insert into hasil_hmjab (NPM,no_urut,status) VALUES ('$_SESSION[NPM]','$no','sudah') ");
			header("location: index.php?page=use");
		}

}

?>