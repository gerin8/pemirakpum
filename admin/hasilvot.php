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
             

            <div class="clearfix"></div>

            <div class="row">
                
                  <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hasil Votting untuk BEM<small>Badan Eksekutif Mahasiswa</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                  </div>
                </div>
              </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bar graph <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="hasilhimaTI"></canvas>
                  </div>
                </div>
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
             
    ?>

    <script>
      Chart.defaults.global.legend = {
        enabled: false
      };

      // Bar chart
      var ctx = document.getElementById("mybarChart");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Calon 1", "Calon 2", "Calon 3"];
          datasets: [{
            label: 'Total Suara ',
            backgroundColor: "#26B99A",
            data: [
                    <?php echo $total1. ""; ?>, 
                    <?php echo $total2. ""; ?>,
                    <?php echo $total3. ""; ?>,
                    
                  ]
          }]
        },

        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });


   </script>
  </body>
</html>

<?php  
  } else {
    header("location: ../index.php");
  }
?>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bar graph <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="hasilhimaAK"></canvas>
                  </div>
                </div>
              </div>
             
            </div>
            
            </div>
          </div>
        </div>