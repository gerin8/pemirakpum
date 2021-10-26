<!-- Bahasa Inggris-->
 <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Anggota DPM Bahasa Inggris</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>

		<?php 

		          include '../koneksi.php';
		         $sql32 = mysqli_query($conn,"select * from hasil_dpm where no='32' ");
		          $sql33 = mysqli_query($conn,"select * from hasil_dpm where no='33' ");
		          $sql34 = mysqli_query($conn,"select * from hasil_dpm where no='34' ");
		          $sql35 = mysqli_query($conn,"select * from hasil_dpm where no='35' ");
		          
		          $urut32 = mysqli_num_rows($sql32);
		          $urut33 = mysqli_num_rows($sql33);
		          $urut34 = mysqli_num_rows($sql34);
		          $urut35 = mysqli_num_rows($sql35);

		          $total32 = $urut32*240/240;
		          $total33 = $urut33*240/240;
		          $total34 = $urut34*240/240;
		          $total35 = $urut35*240/240;

	

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='32' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total32."%"; ?>">
					<?php echo $total32.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='33' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total33."%"; ?>">
					<?php echo $total33.""; ?>
				</div>
			</div>
			</div>

			 <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='34' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total34."%"; ?>">
					<?php echo $total34.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='35' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total35."%"; ?>">
					<?php echo $total35.""; ?>
				</div>
			</div>
			</div>
</div>
</div>
</div>