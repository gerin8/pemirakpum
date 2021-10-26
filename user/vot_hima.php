<?php 

	include "../koneksi.php";
	
	session_start();

	if (@$_SESSION['NPM']) 
	{
		header("location: Index.php");
	}

	if (@$_GET['namaCalon']) 
	{
		
		$namaCalon = $_GET['namaCalon'];

		$data = mysqli_query($conn,"select * from hasil_hima where NPM = '$_SESSION[NPM]' ");
		$cek = mysqli_fetch_array($data);

		if ($cek['status'] == "sudah" ) 
		{

			header("location: alert.php");

		} else 
		{

			$db = mysqli_query($conn,"insert into hasil_hima (NPM,namaCalon,status) VALUES ('$_SESSION[NPM]','$namaCalon','sudah') ");
			header("location: done.php");
		}

}

?>