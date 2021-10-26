<!-- Teknik Komputer Kontrol-->
 <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Anggota DPM Teknik Komputer Kontrol</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>

	<?php 

		          include '../koneksi.php';
		          $sql18 = mysqli_query($conn,"select * from hasil_dpm where no='18' ");
		          $sql19 = mysqli_query($conn,"select * from hasil_dpm where no='19' ");
		          $sql20 = mysqli_query($conn,"select * from hasil_dpm where no='20' ");
		          $sql21 = mysqli_query($conn,"select * from hasil_dpm where no='21' ");
		          $sql22 = mysqli_query($conn,"select * from hasil_dpm where no='22' ");
		          $sql23 = mysqli_query($conn,"select * from hasil_dpm where no='23' ");
		          $sql24 = mysqli_query($conn,"select * from hasil_dpm where no='24' ");
		          
		          $urut18 = mysqli_num_rows($sql18);
		          $urut19 = mysqli_num_rows($sql19);
		          $urut20 = mysqli_num_rows($sql20);
		          $urut21 = mysqli_num_rows($sql21);
		          $urut22 = mysqli_num_rows($sql22);
		          $urut23 = mysqli_num_rows($sql23);
		          $urut24 = mysqli_num_rows($sql24);

		          $total18 = $urut18*196/196;
		          $total19 = $urut19*196/196;
		          $total20 = $urut20*196/196;
		          $total21 = $urut21*196/196;
		          $total22 = $urut22*196/196;
		          $total23 = $urut23*196/196;
		          $total24 = $urut24*196/196;

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='18' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total18."%"; ?>">
					<?php echo $total18.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='19' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total19."%"; ?>">
					<?php echo $total19.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='20' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total20."%"; ?>">
					<?php echo $total20.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='21' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total21."%"; ?>">
					<?php echo $total21.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='22' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total22."%"; ?>">
					<?php echo $total22.""; ?>
				</div>
			</div>
			</div>
			
			<div class="col-md-2">
				            <?php 

				             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='23' ") or die(mysqli_error()) ;
				              $kon = mysqli_fetch_array ($dta);
				             echo $kon['calon_dpm'];

				            ?>
			            </div>

			            <div class="col-md-9">
						<div class="progress">
							<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total23."%"; ?>">
								<?php echo $total23.""; ?>
							</div>
						</div>
						</div>

				<div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='24' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total24."%"; ?>">
					<?php echo $total24.""; ?>
				</div>
			</div>
			</div>


</div>
</div>
</div>