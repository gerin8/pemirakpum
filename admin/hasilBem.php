      <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara Presiden dan Wakil Presiden BEM</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
            
             <div class="x_title">
             	
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $bem1 = mysqli_query($conn, "select * from hasil_bem where no_urut = '1' ");
		          $bem2 = mysqli_query($conn,"select * from hasil_bem where no_urut = '2' ");
		          $bem3 = mysqli_query($conn,"select * from hasil_bem where no_urut = '3' ");

		          $urut1 = mysqli_num_rows($bem1);
		          $urut2 = mysqli_num_rows($bem2);
		          $urut3 = mysqli_num_rows($bem3);
		        

		        $total1 = $urut1*1963/1963;
				$total2 = $urut2*1963/1963;
				$total3 = $urut3*1963/1963;
							         
		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_bem where no_urut = '1'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total1."%"; ?>">
					<?php echo $total1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_bem where no_urut = '2'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

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

	              $dta = mysqli_query ($conn,"select * from ca_bem where no_urut = '3'") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['capres']." & ".$kon['cawapres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3. ""; ?>
				</div>
			</div>
			</div>

			
        <!--Total Pemilih-->
  

			
</div>

</div>

</div>

<?php
          $sql = "SELECT * FROM hasil_bem";
          $query = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($query);
          ?>
  <h5>Total Suara = <?php echo $count; ?></h5>
