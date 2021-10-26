<div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Ketua Himpunan Mahasiswa Prodi Teknik Komputer Kontrol</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
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