<?php 
  session_start();
  require 'function.php';
  $id_siswa = $_SESSION['id_siswa'];
 ?>
<?php include "ortu_navbar.php" ?>
  <!-- Main content -->

    <!-- Header -->
    <!-- Header -->


    <!-- konten judul-->

    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0"><?php echo$_SESSION['nama']; ?></h6>  
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

           

                <h2 class="mb-0">Riwayat Pembayaran Awal Tahun A</h2>
                </div>

                
              </div>
            </div>
            
            <!-- Light table -->
             <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"><h3>NO</h3></th>
                    <th scope="col"><h3>BULAN</h3></th>
                    <th scope="col"><h3>TANGGAL PEMBAYARAN</h3></th>
                    <th scope="col"><h3>JUMLAH</h3></th>
                  </tr>
                </thead>
                
                <tbody class="list">
                  <?php $i=1; ?>
                      
                      <?php 
                      $awal = query("SELECT * FROM pemasukanspp WHERE id_siswa = '$id_siswa'");
                      ?>  
                      <?php foreach ($awal as $row): ?>
                 
                  <tr>
                    <th>
                      <h3><?php echo $i; ?></h3>
                    </th>

                    <td>
                      <h3><?php echo $row["bulan"] ?></h3>
                    </td>

                    <td>
                      <?php
                      $tgl_pemasukan= $row["tgl_pemasukan"];
                      ?>
                      <h3><?php echo date("d-m-Y", strtotime($tgl_pemasukan)); ?></h3>
                    </td>
                    
                    <td>
                      <h3>Rp. <?=number_format($row ['jumlah'],2,',','.');?></h3>
                    </td>
                    
                   
                  </tr>
                        <?php $i++; ?>
                      <?php endforeach; ?>

                 
                                 
                  
                </tbody>
                <tbody class="list">
                      <?php 
                      $awal = query("SELECT sum(jumlah) as totalspp FROM pemasukanspp WHERE id_siswa = '$id_siswa'");
                      ?>  
                      <?php foreach ($awal as $row): ?>
                  
                  <tr>
                    <th>
                      <h3></h3>
                    </th>
                    <td>
                      <h3>Total Pembayaran</h3>
                    </td>
                    <td>
                      <h3></h3>
                    </td>
                    <td> 
                      <h3>Rp <?=number_format($row['totalspp'],2,',','.');?></h3>
                    </td>  
                  </tr>

                               
                  
                </tbody>
              </table>
             <?php endforeach; ?>


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
                

                
                  <tr>

                    
                    <td>
                      <h3>Total Biaya</h3>
                    </td>
                    <td> 
                      <?php
                      $queryrincianspp = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrspp FROM rincianspp"); 
                      $rincianspp = mysqli_fetch_assoc($queryrincianspp);

                      $awal = query("SELECT sum(jumlah) as totalspp FROM pemasukanspp WHERE id_siswa = '$id_siswa'");
                      $rspp['rspp'] = $rincianspp['totalrspp'] * 12;
                      $sisa['sisa'] = $rspp['rspp'] - $row['totalspp'];

                      ?>
               
                      <h3>Rp <?=number_format($rspp['rspp'],2,',','.');?></h3>

        
                    </td> 
                  </tr>

                  <tr>
                  
                  <tr>
                   
                    <td>
                      <h3>Total Pembayaran</h3>
                    </td>
                    <td> 
                      <h3>Rp <?=number_format($row['totalspp'],2,',','.');?></h3>
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
