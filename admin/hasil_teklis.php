<div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Ketua Himpunan Mahasiswa Teknik Listrik</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
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