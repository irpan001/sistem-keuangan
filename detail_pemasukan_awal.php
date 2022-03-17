<?php include "koneksi.php" ?>
<?php include "navbar.php" ?>
  <!-- Main content -->

    <!-- Header -->
    <!-- Header -->


    <!-- konten judul-->

    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <?php
                if(isset($_GET['id_siswa']) && $_GET['id_siswa']!=''){
                $sqlSiswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$_GET[id_siswa]'");
                $data=mysqli_fetch_array($sqlSiswa);
                $id_siswa = $data['id_siswa'];
              ?>
              <h6 class="h2 text-white d-inline-block mb-0">Data Keuangan Awal Tahun <?php echo $data['nama']; ?></h6>
            </div>

            <div class="col-lg-6 col-5 text-right">
              <a href="cetak_d_p_awal.php?id_siswa=<?php echo $data["id_siswa"]; ?>" target="blank" class="btn btn-sm btn-neutral">Cetak</a>
            </div>
          
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
      <div class="container-fluid bg-light mt--6">
      <div class="row">

        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">

           

                <h2 class="mb-0"><a href="pemasukan_awal.php"><i class="ni ni-bold-left"></i></a> Riwayat Pembayaran</h2>
                </div>

                
              </div>
            </div>
            
            <!-- Light table -->
             <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"><h3>NO</h3></th>
                    <th scope="col"><h3>TANGGAL PEMBAYARAN</h3></th>
                    <th scope="col"><h3>JUMLAH</h3></th>
                  </tr>
                </thead>
                
                <tbody class="list">
                  <?php $i=1; ?>
                     <?php
                  $sql = mysqli_query($koneksi, "SELECT * FROM pemasukanawal WHERE id_siswa='$data[id_siswa]'");
                 
                  while($d=mysqli_fetch_array($sql)){
                    ?>
                 
                  <tr>
                    <th>
                      <h3><?php echo $i; ?></h3>
                    </th>
                    <td>
                      <?php
                      $tgl_pemasukan= $d["tgl_pemasukan"];
                      ?>
                      <h3><?php echo date("d-m-Y", strtotime($tgl_pemasukan)); ?></h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($d ['jumlah'],2,',','.');?></h3>
                    </td>
                    
                   
                  </tr>
                  <?php $i++; ?>
                  <?php
                  }
                  ?>

                 
                                 
                  
                </tbody>
                <tbody class="list">
                <?php
                   $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawal FROM pemasukanawal WHERE id_siswa='$data[id_siswa]'"); 
                   $masuk = mysqli_fetch_assoc($querymasuk);                  
                ?>
                  
                  <tr>
                    <th>
                      <h3></h3>
                    </th>
                    <td>
                      <h3>Total Pembayaran</h3>
                    </td>
                    <td> 
                      <h3>Rp <?=number_format($masuk['totalawal'],2,',','.');?></h3>
                    </td>  
                  </tr>

                               
                  
                </tbody>
              </table>
              <?php
                 }
              ?>

            </div>            
          </div>
        </div>

        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0">Rincian</h2>
                </div>
                
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                  $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawal FROM pemasukanawal WHERE id_siswa='$data[id_siswa]'"); 
                  $masuk = mysqli_fetch_assoc($querymasuk);
                
                  $queryrincianawal = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawal FROM rincianawal"); 
                  $rincianawal = mysqli_fetch_assoc($queryrincianawal);


                   $sisa['sisa'] = $rincianawal['totalrawal'] - $masuk['totalawal'];
                ?>


                  <tr>
                    
                    <td>
                      <h3>Total Biaya</h3>
                    </td>
                    <td> 
                      <h3>Rp <?=number_format($rincianawal['totalrawal'],2,',','.');?></h3>
                    </td> 
                  </tr>

                  <tr>
                  
                  <tr>
                   
                    <td>
                      <h3>Total Pembayaran</h3>
                    </td>
                    <td> 
                      <h3>Rp <?=number_format($masuk['totalawal'],2,',','.');?></h3>
                    </td>  
                  </tr>
                    
                    <td>
                      <h3>Tunggakan</h3>
                    </td>
                    <td>
                      <h3>Rp <?=number_format($sisa['sisa'],2,',','.');?></h3>
                    </td>  
                  </tr>                    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
<?php include "script.php" ?>
 