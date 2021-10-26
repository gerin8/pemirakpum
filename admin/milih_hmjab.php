 <div class="title-left">
      <h3>Data Mahasiswa yang sudah memilih </h3>
  </div>
<div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">

                      <!--SEARCH-->
                       <form action="" method="POST">
                      <input  placeholder="NPM" type="text" name="cari">
                      <input type="submit" value="Search">
                    </form>

        <!--Total Pemilih-->
  <?php
          $sql = "SELECT * FROM hasil_hmjab";
          $query = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($query);
          ?>
  <h5>Total Pemilih = <?php echo $count; ?></h5>

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NPM</th>
                          <th>Status</th>
                          
                        </tr>
                      </thead>
<?php
if (isset($_POST['cari'])) {
            $carine = $_POST['cari'];

        $query = "SELECT * FROM hasil_hmjab where NPM like '%".$carine."%' ";
        } else {
          $query = "SELECT * FROM hasil_hmjab ";
        }

$result = mysqli_query($conn, $query);
//mengecek apakah ada error ketika menjalankan query
if(!$result){
  die ("Query Error: ".mysqli_errno($conn). " - ". mysqli_error($conn));
}
$no=0;
while ($cek=mysqli_fetch_array($result))
{
?>
                      <tr>


                      <tbody>
                        <tr>
                          <td><?php echo $no=$no+1;?></td>
                          <td><?php echo $cek['NPM']; ?></td>
                          <td><?php echo $cek['status']; ?> </td>
                        
                          
                          </td>
                        </tr>
                      </tbody>
                      <?php
                        }
                        ?>

                      </table>
</div>