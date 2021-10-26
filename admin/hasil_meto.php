
<!--HIMAMETO-->
 <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Ketua Himpunan Mahasiswa Mesin Otomotif</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
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
