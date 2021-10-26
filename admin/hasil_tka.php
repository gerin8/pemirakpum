<div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Ketua Himpunan Mahasiswa Teknik Perkeretaapian</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
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
