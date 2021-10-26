           <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil untuk pemilihan Presiden BEM</small></h2>
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
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="1963" aria-valuemin="0" aria-valuemax="1963" style="color: black; width:<?php echo  $total1."%"; ?>">
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
				<div class=" progress-bar-success active" role="progressbar" aria-valuenow="1963" aria-valuemin="0" aria-valuemax="1963" style="color: black; width:<?php echo  $total2."%"; ?>">
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
				<div class="progress-bar-success active" role="progressbar" aria-valuenow="1963" aria-valuemin="0" aria-valuemax="1963" style="color: black; width:<?php echo  $total3."%"; ?>">
					<?php echo $total3. ""; ?>
				</div>
			</div>
			</div>

			

			
</div>
</div>
</div>


<!--Administrasi Bisnis-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Administrasi Bisnis</small></h2>
             	 <div class="clearfix"></div>
             </div>


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


<!-- Komputerisasi Akuntansi -->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Komputerisasi Akuntansi</small></h2>
             	 <div class="clearfix"></div>
             </div>


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


<!-- Mesin Otomotif-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Mesin Otomotif</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		         $sql13 = mysqli_query($conn,"select * from hasil_dpm where no='13' ");
		          $sql14 = mysqli_query($conn,"select * from hasil_dpm where no='14' ");
		          $sql15 = mysqli_query($conn,"select * from hasil_dpm where no='15' ");
		          $sql16 = mysqli_query($conn,"select * from hasil_dpm where no='16' ");
		          $sql17 = mysqli_query($conn,"select * from hasil_dpm where no='17' ");
		          
		          $urut13 = mysqli_num_rows($sql13);
		          $urut14 = mysqli_num_rows($sql14);
		          $urut15 = mysqli_num_rows($sql15);
		          $urut16 = mysqli_num_rows($sql16);
		          $urut17 = mysqli_num_rows($sql17);
		          

		          $total13 = $urut13*164/164;
		          $total14 = $urut14*164/164;
		          $total15 = $urut15*164/164;
		          $total16 = $urut16*164/164;
		          $total17 = $urut17*164/164;

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='13' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total13."%"; ?>">
					<?php echo $total13.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='14' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total14."%"; ?>">
					<?php echo $total14.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='15' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total15."%"; ?>">
					<?php echo $total15.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='16' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total16."%"; ?>">
					<?php echo $total16.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='17' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total17."%"; ?>">
					<?php echo $total17.""; ?>
				</div>
			</div>
			</div>
			



</div>
</div>
</div>


<!-- Teknik Komputer Kontrol-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Teknik Komputer Kontrol</small></h2>
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

<!-- Teknik Listrik-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Teknik Listrik</small></h2>
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

<!-- Bahasa Inggris-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Bahasa Inggris</small></h2>
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

<!-- Teknologi Informasi-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Teknologi Informasi</small></h2>
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

<!-- Teknik Perkeretaapian-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Teknik Perkeretaapian</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $sql45 = mysqli_query($conn,"select * from hasil_dpm where no='45' ");
		          $sql46 = mysqli_query($conn,"select * from hasil_dpm where no='46' ");
		          $sql47 = mysqli_query($conn,"select * from hasil_dpm where no='47' ");
		          $sql48 = mysqli_query($conn,"select * from hasil_dpm where no='48' ");
		          $sql49 = mysqli_query($conn,"select * from hasil_dpm where no='49' ");
		          $sql50 = mysqli_query($conn,"select * from hasil_dpm where no='50' ");
		          
		          
		          $urut45 = mysqli_num_rows($sql45);
		          $urut46 = mysqli_num_rows($sql46);
		          $urut47 = mysqli_num_rows($sql47);
		          $urut48 = mysqli_num_rows($sql48);
		          $urut49 = mysqli_num_rows($sql49);
		          $urut50 = mysqli_num_rows($sql50);
		          

		          $total45 = $urut45*205/205;
		          $total46 = $urut46*205/205;
		          $total47 = $urut47*205/205;
		          $total48 = $urut48*205/205;
		          $total49 = $urut49*205/205;
		          $total50 = $urut50*205/205;
		          

		?>

            <div class="col-md-2">
	            <?php 

	             $dta = mysqli_query ($conn,"select * from ca_dpm where  no='45' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total45."%"; ?>">
					<?php echo $total45.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='46' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	              echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total46."%"; ?>">
					<?php echo $total46.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='47' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total47."%"; ?>">
					<?php echo $total47.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='48' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total48."%"; ?>">
					<?php echo $total48.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='49' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total49."%"; ?>">
					<?php echo $total49.""; ?>
				</div>
			</div>
			</div>

				<div class="col-md-2">
	            <?php 

	              $dta = mysqli_query ($conn,"select * from ca_dpm where  no='50' ") or die(mysqli_error()) ;
	              $kon = mysqli_fetch_array ($dta);
	             echo $kon['calon_dpm'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total50."%"; ?>">
					<?php echo $total50.""; ?>
				</div>
			</div>
			</div>

					
</div>
</div>
</div>


<!-- Akuntansi-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil suara untuk anggota DPM Akuntansi</small></h2>
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

