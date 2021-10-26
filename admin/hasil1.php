      <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Anggota DPM Administrasi Bisnis</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>

<!--Administrasi Bisnis-->

		<?php 

		          include '../koneksi.php';
		          $sql1 = mysqli_query($conn,"select * from hasil_dpm where no='1' ");
		          $sql2 = mysqli_query($conn,"select * from hasil_dpm where no='2' ");
		          $sql3 = mysqli_query($conn,"select * from hasil_dpm where no='3' ");
		          $sql4 = mysqli_query($conn,"select * from hasil_dpm where no='4' ");
		          $sql5 = mysqli_query($conn,"select * from hasil_dpm where no='5' ");
		          $sql6 = mysqli_query($conn,"select * from hasil_dpm where no='6' ");
		          $sql7 = mysqli_query($conn,"select * from hasil_dpm where no='7' ");
		          
		          $urut1 = mysqli_num_rows($sql1);
		          $urut2 = mysqli_num_rows($sql2);
		          $urut3 = mysqli_num_rows($sql3);
		          $urut4 = mysqli_num_rows($sql4);
		          $urut5 = mysqli_num_rows($sql5);
		          $urut6 = mysqli_num_rows($sql6);
		          $urut7 = mysqli_num_rows($sql6);
		          

		        $total1 = $urut1*329/329;
				$total2 = $urut2*329/329;
				$total3 = $urut3*329/329;
				$total4 = $urut4*329/329;
				$total5 = $urut5*329/329;
				$total6 = $urut6*329/329;
				$total7 = $urut7*329/329;
		          

		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where no='1' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total1."%"; ?>">
					<?php echo $total1.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='2' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where no='3' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where no='4' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total4."%"; ?>">
					<?php echo $total4.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where no='5' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total5."%"; ?>">
					<?php echo $total5.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where no='6' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total6."%"; ?>">
					<?php echo $total6.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where no='7' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total7."%"; ?>">
					<?php echo $total7.""; ?>
				</div>
			</div>
			</div>
			
</div>
</div>
</div>

