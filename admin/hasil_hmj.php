           <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara</h3>
            
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Jurusan Teknik</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $hmjt1 = mysqli_query($conn, "select * from hasil_hmjt where no_urut = '1' ");
		          $hmjt2 = mysqli_query($conn,"select * from hasil_hmjt where no_urut = '2' ");
		          $hmjt3 = mysqli_query($conn,"select * from hasil_hmjt where no_urut = '3' ");

		          $urut1 = mysqli_num_rows($hmjt1);
		          $urut2 = mysqli_num_rows($hmjt2);
		          $urut3 = mysqli_num_rows($hmjt3);
		        

		        $total1 = $urut1*936/936;
				$total2 = $urut2*936/936;
				$total3 = $urut3*936/936;
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjt where no_urut = '1'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="936" aria-valuemin="0" aria-valuemax="936" style="color: black; width:<?php echo  $total1."%"; ?>">
					<?php echo $total1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjt where no_urut = '2'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="936" aria-valuemin="0" aria-valuemax="936" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjt where no_urut = '3'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="936" aria-valuemin="0" aria-valuemax="936" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3. ""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>
<?php
          $sql = "SELECT * FROM hasil_hmjt";
          $query = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($query);
          ?>
  <h5>Total Suara = <?php echo $count; ?></h5>

<!--HMJAB-->
     <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Jurusan Administrasi Bisnis</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $hmjab1 = mysqli_query($conn, "select * from hasil_hmjab where no_urut = '1' ");
		          $hmjab2 = mysqli_query($conn,"select * from hasil_hmjab where no_urut = '2' ");
		          $hmjab3 = mysqli_query($conn,"select * from hasil_hmjab where no_urut = '3' ");

		          $urut1 = mysqli_num_rows($hmjab1);
		          $urut2 = mysqli_num_rows($hmjab2);
		          $urut3 = mysqli_num_rows($hmjab3);
		        

		        $total1 = $urut1*569/569;
				$total2 = $urut2*569/569;
				$total3 = $urut3*569/569;
											         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjab where no_urut = '1'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="569" style="color: black; width:<?php echo  $total1."%"; ?>">
					<?php echo $total1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjab where no_urut = '2'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="569" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjab where no_urut = '3'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="569" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3. ""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>
<?php
          $sql = "SELECT * FROM hasil_hmjab";
          $query = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($query);
          ?>
  <h5>Total Suara = <?php echo $count; ?></h5>

<!--HMJKA-->

 <div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk Ketua Himpunan Mahasiswa Jurusan Komputerisasi Akuntansi</small></h2>
             	 <div class="clearfix"></div>
             </div>



		<?php 

		          include '../koneksi.php';
		          $hmjka1 = mysqli_query($conn, "select * from hasil_hmjka where no_urut = '1' ");
		          $hmjka2 = mysqli_query($conn,"select * from hasil_hmjka where no_urut = '2' ");


		          $urut1 = mysqli_num_rows($hmjka1);
		          $urut2 = mysqli_num_rows($hmjka2);

		        
		        $total1 = $urut1*458/458;
				$total2 = $urut2*458/458;

							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjka where no_urut = '1'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="458" style="color: black; width:<?php echo  $total1."%"; ?>">
					<?php echo $total1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hmjka where no_urut = '2'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="458" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

		

</div>
</div>
</div>
<?php
          $sql = "SELECT * FROM hasil_hmjka";
          $query = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($query);
          ?>
  <h5>Total Suara = <?php echo $count; ?></h5>
