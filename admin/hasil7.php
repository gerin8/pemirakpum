<!-- Teknologi Informasi-->
 <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Anggota DPM Teknologi Informasi</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $sql36 = mysqli_query($conn,"select * from hasil_dpm where no='36' ");
		          $sql37 = mysqli_query($conn,"select * from hasil_dpm where no='37' ");
		          $sql38 = mysqli_query($conn,"select * from hasil_dpm where no='38' ");
		          $sql39 = mysqli_query($conn,"select * from hasil_dpm where no='39' ");
		          $sql40 = mysqli_query($conn,"select * from hasil_dpm where no='40' ");
		          $sql41 = mysqli_query($conn,"select * from hasil_dpm where no='41' ");
		          $sql42 = mysqli_query($conn,"select * from hasil_dpm where no='42' ");
		          $sql43 = mysqli_query($conn,"select * from hasil_dpm where no='43' ");
		          $sql44 = mysqli_query($conn,"select * from hasil_dpm where no='44' ");
		          
		          $urut36 = mysqli_num_rows($sql36);
		          $urut37 = mysqli_num_rows($sql37);
		          $urut38 = mysqli_num_rows($sql38);
		          $urut39 = mysqli_num_rows($sql39);
		          $urut40 = mysqli_num_rows($sql40);
		          $urut41 = mysqli_num_rows($sql41);
		          $urut42 = mysqli_num_rows($sql42);
		          $urut43 = mysqli_num_rows($sql43);
		          $urut44 = mysqli_num_rows($sql44);

		          $total36 = $urut36*199/199;
		          $total37 = $urut37*199/199;
		          $total38 = $urut38*199/199;
		          $total39 = $urut39*199/199;
		          $total40 = $urut40*199/199;
		          $total41= $urut41*199/199;
		          $total42 = $urut42*199/199;
		          $total43 = $urut43*199/199;
		          $total44 = $urut44*199/199;

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='36' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total36."%"; ?>">
					<?php echo $total36.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='37' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total37."%"; ?>">
					<?php echo $total37.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='38' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total38."%"; ?>">
					<?php echo $total38.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='39' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total39."%"; ?>">
					<?php echo $total39.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='40' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total40."%"; ?>">
					<?php echo $total40.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='41' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total41."%"; ?>">
					<?php echo $total41.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='42' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total42."%"; ?>">
					<?php echo $total42.""; ?>
				</div>
			</div>
			</div>

			
				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='43' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total43."%"; ?>">
					<?php echo $total43.""; ?>
				</div>
			</div>
			</div>

			
				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='44' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total44."%"; ?>">
					<?php echo $total44.""; ?>
				</div>
			</div>
			</div>

			
</div>
</div>
</div>