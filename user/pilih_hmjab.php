<!-- page content -->

            <div class="page-title">
              <div class="title_left">
                <h3>Pemilihan Himpunan Mahasiswa Jurusan Administrasi Bisnis</h3>
              </div>

              
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        
                          
                      </div>

                        <div class="clearfix"></div>

                        <?php

                          include "../koneksi.php";
                          if(empty($_SESSION['NPM'])){
                            header("location: index.php");
                          }

                          $sql = mysqli_query($conn,"select * from ca_hmjab") or die(mysql_error());
                          while ( $tmpl = mysqli_fetch_array($sql)) {
                         
                        ?>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><center>Calon Ketua HMJAB <?php echo $tmpl['no_urut']; ?></center></h4>
                            </div> <br>
                              <div class="panel-body">
                                <img src="../admin/images/<?php echo $tmpl['foto']; ?>" class="img-responsive avatar-view">
                                <h2><center><?php echo $tmpl['namaCalon']; ?></center></h2>
                              </div>

                              <div class="col-xs-7">
                              </div>
                                <div class="col-xs-12 bottom text-center">
                                  <div style="float: left;" class="col-xs-12 col-sm-6 emphasis">
                                    <button type="button" class="btn btn-success btn-xs"> 
                                    
                                      <?php echo "<a href='vot_hmjab.php?no_urut=$tmpl[no_urut]'> <i class='fa fa-check-square-o'> Pilih </i> </a>";?> 
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs">
                                      <a href="?page=profile_hmjab&no_urut=<?php echo $tmpl['no_urut'];?>"/> Profile <i class="fa fa-user"> 
                                      </i></a>
                                    </button>
                              </div>
                            </div>
                          </div>
                        </div>
                           <?php
                    }
                    ?>

                      </div>
                      </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- Script Tampil Presiden -->
