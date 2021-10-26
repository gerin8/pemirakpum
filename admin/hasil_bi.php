<div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Ketua Himpunan Mahasiswa Bahasa Inggris</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>

<?php 

		          include '../koneksi.php';
		          $himags1 = mysqli_query($conn, "select * from hasil_hima where namaCalon = 'Ardian Afandi ' ");
		          $himags2 = mysqli_query($conn,"select * from hasil_hima where namaCalon = 'Mohammad Risky' ");
		          
		          $urut1 = mysqli_num_rows($himags1);
		          $urut2 = mysqli_num_rows($himags2);
		          
		        
		        $tothimags1 = $urut1*240/240;
				$tothimags2 = $urut2*240/240;
				
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Ardian Afandi'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="240" style="color: black; width:<?php echo  $tothimags1."%"; ?>">
					<?php echo $tothimags1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_hima where namaCalon = 'Mohammad Risky'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['namaCalon'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="240" style="color: black; width:<?php echo$tothimags2."%"; ?>">
					<?php echo$tothimags2.""; ?>
				</div>
			</div>
			</div>

</div>
</div>
</div>