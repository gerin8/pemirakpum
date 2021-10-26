<!-- Mesin Otomotif-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Mesin Otomotif</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Mesin Otomotif</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		         $sql13 = mysqli_query($conn,"select * from hasil_dpm where no='13' ");
		          $sql14 = mysqli_query($conn,"select * from hasil_dpm where no='14' ");
		          $sql15 = mysqli_query($conn,"select * from hasil_dpm where no='15' ");
		          $sql16 = mysqli_query($conn,"select * from hasil_dpm where no='16' ");
		          $sql17 = mysqli_query($conn,"select * from hasil_dpm where no='17' ");
		          
		          $urut13 = mysqli_num_rows($sql13);
		          $urut14 = mysqli_num_rows($sql14);
		          $urut15 = mysqli_num_rows($sql15);
		          $urut16 = mysqli_num_rows($sql16);
		          $urut17 = mysqli_num_rows($sql17);
		          

		          $total13 = $urut13*164/164;
		          $total14 = $urut14*164/164;
		          $total15 = $urut15*164/164;
		          $total16 = $urut16*164/164;
		          $total17 = $urut17*164/164;

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='13' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total13."%"; ?>">
					<?php echo $total13.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='14' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total14."%"; ?>">
					<?php echo $total14.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='15' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total15."%"; ?>">
					<?php echo $total15.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='16' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total16."%"; ?>">
					<?php echo $total16.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='17' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total17."%"; ?>">
					<?php echo $total17.""; ?>
				</div>
			</div>
			</div>
			



</div>
</div>
</div>