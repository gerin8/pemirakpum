           <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Jurusan Teknik</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $hmjt1 = mysqli_query($conn, "select * from hasil_hmjt where no_urut = '1' ");
		          $hmjt2 = mysqli_query($conn,"select * from hasil_hmjt where no_urut = '2' ");
		          $hmjt3 = mysqli_query($conn,"select * from hasil_hmjt where no_urut = '3' ");

		          $urut1 = mysqli_num_rows($hmjt1);
		          $urut2 = mysqli_num_rows($hmjt2);
		          $urut3 = mysqli_num_rows($hmjt3);
		        

		        $total1 = $urut1*936/936;
				$total2 = $urut2*936/936;
				$total3 = $urut3*936/936;
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjt where no_urut = '1'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="936" aria-valuemin="0" aria-valuemax="936" style="color: black; width:<?php echo  $total1."%"; ?>">
					<?php echo $total1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjt where no_urut = '2'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="936" aria-valuemin="0" aria-valuemax="936" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjt where no_urut = '3'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="936" aria-valuemin="0" aria-valuemax="936" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3. ""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>



<!--HIMAMETO-->
     <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Prodi Mesin Otomotif</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $himamet1 = mysqli_query($conn, "select * from hasil_hima where namaCalon = 'Fernanda Eka Prastya' ");
		          $himamet2 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Fonda Aditya Saputra' ");
		          $himamet3 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Hidayat' ");

		          $urut1 = mysqli_num_rows($himamet1);
		          $urut2 = mysqli_num_rows($himamet2);
		          $urut3 = mysqli_num_rows($himamet3);
		        

		        $tothimamet1 = $urut1*164/164;
				$tothimamet2 = $urut2*164/164;
				$tothimamet3 = $urut3*164/164;
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Fernanda Eka Prastya'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="164" style="color: black; width:<?php echo  $tothimamet1."%"; ?>">
					<?php echo $tothimamet1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Fonda Aditya Saputra'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="164" style="color: black; width:<?php echo $tothimamet2."%"; ?>">
					<?php echo $tothimamet2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Hidayat' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="164" style="color: black; width:<?php echo $tothimamet3."%"; ?>">
					<?php echo $tothimamet3. ""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>

<!--HIMATEKOM-->
     <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Prodi Teknik Komputer Kontrol</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $himatkk1 = mysqli_query($conn, "select * from hasil_hima where namaCalon = 'Hamim Fimala Dewa' ");
		          $himatkk2 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Moh. Iqbal Yusuf Aqiel' ");
		          $himatkk3 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Lizariani Hafsha Putri Wardhani' ");

		          $urut1 = mysqli_num_rows($himatkk1);
		          $urut2 = mysqli_num_rows($himatkk2);
		          $urut3 = mysqli_num_rows($himatkk3);
		        

		        $tothimatkk1 = $urut1*196/196;
				$tothimatkk2 = $urut2*196/196;
				$tothimatkk3 = $urut3*196/196;
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Hamim Fimala Dewa'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="196" style="color: black; width:<?php echo  $tothimatkk1."%"; ?>">
					<?php echo $tothimatkk1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Moh. Iqbal Yusuf Aqiel'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="196" style="color: black; width:<?php echo$tothimatkk2."%"; ?>">
					<?php echo$tothimatkk2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Lizariani Hafsha Putri Wardhani' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="196" style="color: black; width:<?php echo $tothimatkk3."%"; ?>">
					<?php echo $tothimatkk3. ""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>

<!--HIMATEKLIS-->
     <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Prodi Teknik Listrik</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $himatl1 = mysqli_query($conn, "select * from hasil_hima where namaCalon = 'Achmad Faradhiza Mahendra ' ");
		          $himatl2 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Muhamad Amar M.' ");
		          $himatl3 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Syahrul Wahyu H.' ");
		          $himatl4 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Brimi Fuad Azis' ");

		          $urut1 = mysqli_num_rows($himatl1);
		          $urut2 = mysqli_num_rows($himatl2);
		          $urut3 = mysqli_num_rows($himatl3);
		       	  $urut4 = mysqli_num_rows($himatl4);

		        $tothimatl1 = $urut1*172/172;
				$tothimatl2 = $urut2*172/172;
				$tothimatl3 = $urut3*172/172;
				$tothimatl4 = $urut4*172/172;
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Achmad Faradhiza Mahendra '") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="172" style="color: black; width:<?php echo  $tothimatl1."%"; ?>">
					<?php echo $tothimatl1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Muhamad Amar M.'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="172" style="color: black; width:<?php echo$tothimatl2."%"; ?>">
					<?php echo$tothimatl2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Syahrul Wahyu H.' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="172" style="color: black; width:<?php echo $tothimatl3."%"; ?>">
					<?php echo $tothimatl3. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Brimi Fuad Azis' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="172" style="color: black; width:<?php echo $tothimatl4."%"; ?>">
					<?php echo $tothimatl4. ""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>

<!--HIMATI-->
     <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Prodi Teknologi Informasi</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $himati1 = mysqli_query($conn, "select * from hasil_hima where namaCalon = 'Rianno Manunggal Putra' ");
		          $himati2 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Bima Andriansyah' ");
		          $himati3 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Dimas Aldi Candra Saputra' ");

		          $urut1 = mysqli_num_rows($himati1);
		          $urut2 = mysqli_num_rows($himati2);
		          $urut3 = mysqli_num_rows($himati3);
		        

		      	$tothimati1 = $urut1*199/199;
				$tothimati2 = $urut2*199/199;
				$tothimati3 = $urut3*199/199;
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Rianno Manunggal Putra'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="199" style="color: black; width:<?php echo  $tothimati1."%"; ?>">
					<?php echo $tothimati1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Bima Andriansyah'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="199" style="color: black; width:<?php echo$tothimati2."%"; ?>">
					<?php echo$tothimati2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Dimas Aldi Candra Saputra' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="199" style="color: black; width:<?php echo $tothimati3."%"; ?>">
					<?php echo $tothimati3. ""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>

<!--HIMATKA-->
     <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Prodi Teknik Perkeretaapian</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $himatka1 = mysqli_query($conn, "select * from hasil_hima where namaCalon = 'Muhammad Ihsanurroihan  ' ");
		          $himatka2 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Iqbal Saputro' ");
		          
		          $urut1 = mysqli_num_rows($himatka1);
		          $urut2 = mysqli_num_rows($himatka2);
		          
		        
		        $tothimatka1 = $urut1*205/205;
				$tothimatka2 = $urut2*205/205;
				
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Muhammad Ihsanurroihan '") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="205" style="color: black; width:<?php echo  $tothimatka1."%"; ?>">
					<?php echo $tothimatka1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Iqbal Saputro'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="205" style="color: black; width:<?php echo$tothimatka2."%"; ?>">
					<?php echo$tothimatka2.""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>

 <!--HMJAB-->
     <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Jurusan Administrasi Bisnis</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $hmjab1 = mysqli_query($conn, "select * from hasil_hmjab where no_urut = '1' ");
		          $hmjab2 = mysqli_query($conn,"select * from hasil_hmjab where no_urut = '2' ");
		          $hmjab3 = mysqli_query($conn,"select * from hasil_hmjab where no_urut = '3' ");

		          $urut1 = mysqli_num_rows($hmjab1);
		          $urut2 = mysqli_num_rows($hmjab2);
		          $urut3 = mysqli_num_rows($hmjab3);
		        

		        $total1 = $urut1*569/569;
				$total2 = $urut2*569/569;
				$total3 = $urut3*569/569;
											         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjab where no_urut = '1'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="569" style="color: black; width:<?php echo  $total1."%"; ?>">
					<?php echo $total1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjab where no_urut = '2'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="569" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjab where no_urut = '3'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="569" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3. ""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>

<!--HIMAAB-->
     <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Prodi Administrasi Bisnis</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $himaab1 = mysqli_query($conn, "select * from hasil_hima where namaCalon = 'Figar Asani Yogantara' ");
		          $himaab2 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Nabila Alya Safira' ");
		          $himaab3 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Alfi Kharisma Putri' ");

		          $urut1 = mysqli_num_rows($himaab1);
		          $urut2 = mysqli_num_rows($himaab2);
		          $urut3 = mysqli_num_rows($himaab3);
		        

		      	$tothimaab1 = $urut1*329/329;
				$tothimaab2 = $urut2*329/329;
				$tothimaab3 = $urut3*329/329;
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Figar Asani Yogantara'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="329" style="color: black; width:<?php echo $tothimaab1."%"; ?>">
					<?php echo $tothimaab1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Nabila Alya Safira'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="329" style="color: black; width:<?php echo $tothimaab2."%"; ?>">
					<?php echo $tothimaab2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Alfi Kharisma Putri'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="329" style="color: black; width:<?php echo $tothimaab3."%"; ?>">
					<?php echo $tothimaab3. ""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>



<!--HIMAGS-->
     <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Prodi Bahasa Inggris</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $himags1 = mysqli_query($conn, "select * from hasil_hima where namaCalon = 'Ardian Afandi ' ");
		          $himags2 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Mohammad Risky' ");
		          
		          $urut1 = mysqli_num_rows($himags1);
		          $urut2 = mysqli_num_rows($himags2);
		          
		        
		        $tothimags1 = $urut1*240/240;
				$tothimags2 = $urut2*240/240;
				
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Ardian Afandi'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="240" style="color: black; width:<?php echo  $tothimags1."%"; ?>">
					<?php echo $tothimags1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Mohammad Risky'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="240" style="color: black; width:<?php echo$tothimags2."%"; ?>">
					<?php echo$tothimags2.""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>

<!--HMJKA-->

 <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Jurusan Komputerisasi Akuntansi</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $hmjka1 = mysqli_query($conn, "select * from hasil_hmjka where no_urut = '1' ");
		          $hmjka2 = mysqli_query($conn,"select * from hasil_hmjka where no_urut = '2' ");


		          $urut1 = mysqli_num_rows($hmjka1);
		          $urut2 = mysqli_num_rows($hmjka2);

		        
		        $total1 = $urut1*458/458;
				$total2 = $urut2*458/458;

							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjka where no_urut = '1'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="458" style="color: black; width:<?php echo  $total1."%"; ?>">
					<?php echo $total1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjka where no_urut = '2'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="458" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

		

</div>
</div>
</div>
