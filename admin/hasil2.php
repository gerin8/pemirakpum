      <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Anggota DPM Komputerisasi Akuntansi</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>
<!-- Komputerisasi Akuntansi -->

		<?php 

		          include '../koneksi.php';
		          $sql8 = mysqli_query($conn,"select * from hasil_dpm where no='8' ");
		          $sql9 = mysqli_query($conn,"select * from hasil_dpm where no='9' ");
		          $sql10 = mysqli_query($conn,"select * from hasil_dpm where no='10' ");
		          $sql11 = mysqli_query($conn,"select * from hasil_dpm where no='11' ");
		          $sql12 = mysqli_query($conn,"select * from hasil_dpm where no='12' ");
		          
		          $urut8 = mysqli_num_rows($sql8);
		          $urut9 = mysqli_num_rows($sql9);
		          $urut10 = mysqli_num_rows($sql10);
		          $urut11 = mysqli_num_rows($sql11);
		          $urut12 = mysqli_num_rows($sql12);
		          

		          $total8 = $urut8*250/250;
		          $total9 = $urut9*250/250;
		          $total10 = $urut10*250/250;
		          $total11 = $urut11*250/250;
		          $total12 = $urut12*250/250;
		          

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='8' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total8."%"; ?>">
					<?php echo $total8.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='9' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total9."%"; ?>">
					<?php echo $total9.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='10' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total10."%"; ?>">
					<?php echo $total10.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='11' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total11."%"; ?>">
					<?php echo $total11.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='12' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total12."%"; ?>">
					<?php echo $total12.""; ?>
				</div>
			</div>
			</div>
			



</div>
</div>
</div>