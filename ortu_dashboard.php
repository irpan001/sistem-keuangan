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
              <h6 class="h2 text-white d-inline-block mb-0">Dashboard <?php echo$_SESSION['nama']; ?></h6>
              
            </div>
            <div class="col-lg-6 col-5 text-right">
                  
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            
            <div class="col-xl-4">
              <div class="card card-stats">
                <!-- Card body -->
                      <?php 
                      $awal = query("SELECT sum(jumlah) as totalawal FROM pemasukanawal WHERE id_siswa = '$id_siswa'");
                      foreach ($awal as $row):
                      $queryrincianawal = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawal FROM rincianawal"); 
                      $rincianawal = mysqli_fetch_assoc($queryrincianawal);
                      $persen['persen'] = $row['totalawal'] / $rincianawal['totalrawal'] * 100;
                      ?> 
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h3 class="card-title text-uppercase text-muted mb-0">Pembayaran Semester Ganjil</h3>
                      <br>
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-original-title="tes">
                      </div>
                      <span class="h1 font-weight-bold mb-0">Rp <?=number_format($row['totalawal'],2,',','.');?></span>
                    </div>
                    <div class="col-auto">
                      <a href="ortu_awal_a.php">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                      </a>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <div class="progress">
                     <div class="progress-bar bg-gradient-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?=number_format($persen['persen'],1);?>%;"></div>
                    </div>
                    <?php endforeach; ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card card-stats">
                <!-- Card body -->
                      <?php 
                      $awal = query("SELECT sum(jumlah) as totalawalb FROM pemasukanawalb WHERE id_siswa = '$id_siswa'");
                      foreach ($awal as $row):
                      $queryrincianawalb = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawalb FROM rincianawalb"); 
                      $rincianawalb = mysqli_fetch_assoc($queryrincianawalb);
                      $persen1['persen1'] = $row['totalawalb'] / $rincianawalb['totalrawalb'] * 100;
                      ?> 
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h3 class="card-title text-uppercase text-muted mb-0">Pembayaran Semester Genap</h3>
                      <br>
                      <span class="h1 font-weight-bold mb-0">Rp <?=number_format($row['totalawalb'],2,',','.');?></span>
                    </div>
                    <div class="col-auto">
                      <a href="ortu_awal_b.php">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                      </a>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <div class="progress">
                     <div class="progress-bar bg-gradient-red" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?=number_format($persen1['persen1'],1);?>%;"></div>
                    </div>
                    <?php endforeach; ?>
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-4">
              <div class="card card-stats">
                <!-- Card body -->
                      <?php 
                      $awal = query("SELECT sum(jumlah) as totalspp FROM pemasukanspp WHERE id_siswa = '$id_siswa'");
                      foreach ($awal as $row):
                      $queryrincianspp = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrspp FROM rincianspp"); 
                      $rincianspp = mysqli_fetch_assoc($queryrincianspp);

                      
                      $rspp['rspp'] = $rincianspp['totalrspp'] * 12;
                
                      $persen2['persen2'] = $row['totalspp'] / $rspp['rspp'] * 100;
                      ?>                       
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h3 class="card-title text-uppercase text-muted mb-0">Pembayaran SPP</h3>
                      <br>
                      <span class="h1 font-weight-bold mb-0">Rp <?=number_format($row['totalspp'],2,',','.');?></span>
                    </div>
                    
                    <div class="col-auto">
                      <a href="ortu_spp.php">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </a>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <div class="progress">
                    <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?=number_format($persen2['persen2'],1);?>%;"></div>
                    </div>
                    <?php endforeach; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-light mt--6">
      
      <div class="row">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col" id="kelas">
                  <h2 class="mb-0">Yang belum dibayar</h2>
                </div>
                <div class="col text-right">
                  
                </div>
              </div>
            </div>


            
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
    
                  </tr>
                </thead>
                <tbody class="list">
                

                
                  <tr>
                   
                    
                    
                    <td>
                      <h3>Semester Ganjil</h3>
                    </td>
                    <td> 
                      <?php 
                      $awal = query("SELECT sum(jumlah) as totalawal FROM pemasukanawal WHERE id_siswa = '$id_siswa'");
                      foreach ($awal as $row):
                      $queryrincianawal = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawal FROM rincianawal"); 
                      $rincianawal = mysqli_fetch_assoc($queryrincianawal);
                      $sisa['sisa'] = $rincianawal['totalrawal'] - $row['totalawal'];
                    ?>
     
               
                      <h3>Rp <?=number_format($sisa['sisa'],2,',','.');?></h3>

        
                    </td> 
                    <?php endforeach; ?>
                  </tr>


                  
                  <tr>
                   
                    <td>
                      <h3>Semester Genap</h3>
                    </td>
                    <td> 
                      <?php 
                      $awalb = query("SELECT sum(jumlah) as totalawalb FROM pemasukanawalb WHERE id_siswa = '$id_siswa'");
                      foreach ($awalb as $row):
                      $queryrincianawal = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawalb FROM rincianawalb"); 
                      $rincianawal = mysqli_fetch_assoc($queryrincianawal);
                      $sisab['sisab'] = $rincianawal['totalrawalb'] - $row['totalawalb'];
                    ?>
     
               
                      <h3>Rp <?=number_format($sisab['sisab'],2,',','.');?></h3>

        
                    </td> 
                    <?php endforeach; ?>
                      
                  </tr>


                  <tr>
                   
                    
                    
                    <td>
                      <h3>SPP</h3>
                    </td>
                    <td> 
                      <?php 
                      $awals = query("SELECT sum(jumlah) as totalspp FROM pemasukanspp WHERE id_siswa = '$id_siswa'");
                      foreach ($awals as $row):
                      $queryrincianawal = mysqli_query($koneksi, "SELECT sum(jumlah) as totalspp FROM rincianspp"); 
                      $rincianawal = mysqli_fetch_assoc($queryrincianawal);
                      $rspp['rspp'] = $rincianspp['totalrspp'] * 12;
                      $sisas['sisas'] = $rspp['rspp'] - $row['totalspp'];
                    ?>
     
               
                      <h3>Rp <?=number_format($sisas['sisas'],2,',','.');?></h3>

        
                    </td> 
                    <?php endforeach; ?>
                  </tr>
                    
                    <td>
                      <h3>Jadi yang harus dibayar</h3>
                    </td>
                   <td> 
                      <?php 
    
                      $sisac['sisac'] = $sisa['sisa'] + $sisab['sisab'] + $sisas['sisas'];
                    ?>
     
               
                      <h3>Rp <?=number_format($sisac['sisac'],2,',','.');?></h3>

        
                    </td> 
          
                  </tr>        
                  
            
                </tbody>
              </table>
              
            </div>





            

               

  <!-- Argon Scripts -->
  <!-- Core -->
<?php include "script.php" ?>
 
