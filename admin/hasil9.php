<!-- Akuntansi-->
 <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Anggota DPM Akuntansi</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>


		
		<?php 

		          include '../koneksi.php';
		          $sql51 = mysqli_query($conn,"select * from hasil_dpm where no='51' ");
		          $sql52 = mysqli_query($conn,"select * from hasil_dpm where no='52' ");
		          $sql53 = mysqli_query($conn,"select * from hasil_dpm where no='53' ");
		          $sql54 = mysqli_query($conn,"select * from hasil_dpm where no='54' ");
		          $sql55 = mysqli_query($conn,"select * from hasil_dpm where no='55' ");
		          $sql56 = mysqli_query($conn,"select * from hasil_dpm where no='56' ");
		          $sql57 = mysqli_query($conn,"select * from hasil_dpm where no='57' ");
		          $sql58 = mysqli_query($conn,"select * from hasil_dpm where no='58' ");
		          $sql59 = mysqli_query($conn,"select * from hasil_dpm where no='59' ");
		          $sql60 = mysqli_query($conn,"select * from hasil_dpm where no='60' ");
		          $sql61 = mysqli_query($conn,"select * from hasil_dpm where no='61' ");
		          
		          $urut51 = mysqli_num_rows($sql51);
		          $urut52 = mysqli_num_rows($sql52);
		          $urut53 = mysqli_num_rows($sql53);
		          $urut54 = mysqli_num_rows($sql54);
		          $urut55 = mysqli_num_rows($sql55);
		          $urut56 = mysqli_num_rows($sql56);
		          $urut57 = mysqli_num_rows($sql57);
		          $urut58 = mysqli_num_rows($sql58);
		          $urut59 = mysqli_num_rows($sql59);
		          $urut60 = mysqli_num_rows($sql60);
		          $urut61 = mysqli_num_rows($sql61);
		          

		          $total51 = $urut51*208/208;
		          $total52 = $urut52*208/208;
		          $total53 = $urut53*208/208;
		          $total54 = $urut54*208/208;
		          $total55 = $urut55*208/208;
		          $total56 = $urut56*208/208;
		          $total57 = $urut57*208/208;
		          $total58 = $urut58*208/208;
		          $total59 = $urut59*208/208;
		          $total60 = $urut60*208/208;
		          $total61 = $urut61*208/208;
		          

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='51' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total51."%"; ?>">
					<?php echo $total51.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='52' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total52."%"; ?>">
					<?php echo $total52.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='53' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total53."%"; ?>">
					<?php echo $total53.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='54' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total54."%"; ?>">
					<?php echo $total54.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='55' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total55."%"; ?>">
					<?php echo $total55.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='56' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total56."%"; ?>">
					<?php echo $total56.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='57' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total57."%"; ?>">
					<?php echo $total57.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='58' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total58."%"; ?>">
					<?php echo $total58.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='59' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total59."%"; ?>">
					<?php echo $total59.""; ?>
				</div>
			</div>
			</div>

					<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='60' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total60."%"; ?>">
					<?php echo $total60.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='61' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total61."%"; ?>">
					<?php echo $total61.""; ?>
				</div>
			</div>
			</div>
</div>
</div>
</div>

