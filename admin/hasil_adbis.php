<div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Ketua Himpunan Mahasiswa Administrasi Bisnis</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
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
