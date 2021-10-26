<div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Ketua Himpunan Mahasiswa Teknologi Informasi</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
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

