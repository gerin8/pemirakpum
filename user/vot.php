<?php 

	include "../koneksi.php";

	
	session_start();

	if (@$_SESSION['NPM']) 
	{
		header("location: Index.php");
	}

	if (@$_GET['no_urut']) 
	{
		
		$norut = $_GET['no_urut'];

		$data = mysqli_query($conn,"select * from hasil_bem where NPM = '$_SESSION[NPM]' ");
		$cek = mysqli_fetch_array($data);

		if ($cek['status'] == "sudah" ) 
		{

			header("location: alert.php");

		} else 
		{

			$db = mysqli_query($conn,"insert into hasil_bem (NPM,no_urut,status,id) values ('$_SESSION[NPM]','$norut','sudah','id') ");
			header("location: index.php?page=use");
			
		}
}

?>