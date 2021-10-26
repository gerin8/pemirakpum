<!-- Teknik Listrik-->
 <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Anggota DPM Teknik Listrik</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>


			<?php 

		          include '../koneksi.php';
		          $sql25 = mysqli_query($conn,"select * from hasil_dpm where no='25' ");
		          $sql26 = mysqli_query($conn,"select * from hasil_dpm where no='26' ");
		          $sql27 = mysqli_query($conn,"select * from hasil_dpm where no='27' ");
		          $sql28 = mysqli_query($conn,"select * from hasil_dpm where no='28' ");
		          $sql29 = mysqli_query($conn,"select * from hasil_dpm where no='29' ");
		          $sql30 = mysqli_query($conn,"select * from hasil_dpm where no='30' ");
		          $sql31 = mysqli_query($conn,"select * from hasil_dpm where no='31' ");
		          
		          $urut25 = mysqli_num_rows($sql25);
		          $urut26 = mysqli_num_rows($sql26);
		          $urut27 = mysqli_num_rows($sql27);
		          $urut28 = mysqli_num_rows($sql28);
		          $urut29 = mysqli_num_rows($sql29);
		          $urut30 = mysqli_num_rows($sql30);
		          $urut31 = mysqli_num_rows($sql31);

		          $total25 = $urut25*172/172;
		          $total26 = $urut26*172/172;
		          $total27 = $urut27*172/172;
		          $total28 = $urut28*172/172;
		          $total29 = $urut29*172/172;
		          $total30 = $urut30*172/172;
		          $total31 = $urut31*172/172;

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='25' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total25."%"; ?>">
					<?php echo $total25.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='26' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total26."%"; ?>">
					<?php echo $total26.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='27' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total27."%"; ?>">
					<?php echo $total27.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='28' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total28."%"; ?>">
					<?php echo $total28.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='29' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total29."%"; ?>">
					<?php echo $total29.""; ?>
				</div>
			</div>
			</div>
			
			<div class="col-md-2">
				            <?php 

				             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='30' ") or die(mysqli_error()) ;
				              $kon = mysqli_fetch_array ($dta);
				             echo $kon['calon_dpm'];

				            ?>
			            </div>

			            <div class="col-md-9">
						<div class="progress">
							<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total30."%"; ?>">
								<?php echo $total30.""; ?>
							</div>
						</div>
						</div>

				<div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='31' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total31."%"; ?>">
					<?php echo $total31.""; ?>
				</div>
			</div>
			</div>


</div>
</div>
</div>