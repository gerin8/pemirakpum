<!-- Teknik Perkeretaapian-->
 <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Anggota DPM Teknik Perkeretaapian</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>


	<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Teknik Perkeretaapian</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $sql45 = mysqli_query($conn,"select * from hasil_dpm where no='45' ");
		          $sql46 = mysqli_query($conn,"select * from hasil_dpm where no='46' ");
		          $sql47 = mysqli_query($conn,"select * from hasil_dpm where no='47' ");
		          $sql48 = mysqli_query($conn,"select * from hasil_dpm where no='48' ");
		          $sql49 = mysqli_query($conn,"select * from hasil_dpm where no='49' ");
		          $sql50 = mysqli_query($conn,"select * from hasil_dpm where no='50' ");
		          
		          
		          $urut45 = mysqli_num_rows($sql45);
		          $urut46 = mysqli_num_rows($sql46);
		          $urut47 = mysqli_num_rows($sql47);
		          $urut48 = mysqli_num_rows($sql48);
		          $urut49 = mysqli_num_rows($sql49);
		          $urut50 = mysqli_num_rows($sql50);
		          

		          $total45 = $urut45*205/205;
		          $total46 = $urut46*205/205;
		          $total47 = $urut47*205/205;
		          $total48 = $urut48*205/205;
		          $total49 = $urut49*205/205;
		          $total50 = $urut50*205/205;
		          

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='45' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total45."%"; ?>">
					<?php echo $total45.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='46' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total46."%"; ?>">
					<?php echo $total46.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='47' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total47."%"; ?>">
					<?php echo $total47.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='48' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total48."%"; ?>">
					<?php echo $total48.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='49' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total49."%"; ?>">
					<?php echo $total49.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='50' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total50."%"; ?>">
					<?php echo $total50.""; ?>
				</div>
			</div>
			</div>

					
</div>
</div>
</div>
