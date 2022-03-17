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
              <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
              
            </div>
            <div class="col-lg-6 col-5 text-right">
                        <?php 
                      
                         $query = mysqli_query($koneksi,"SELECT * FROM user");
                       
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                        ?>
              <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#myModaledituser<?php echo $data['id']; ?>">PROFIL</a>
               <?php include('modal_user.php'); ?>
                                <?php
                                     }
                                 ?>

            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <?php  
            // fungsi pemasukan
            $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawal FROM pemasukanawal"); 
            $masuk = mysqli_fetch_assoc($querymasuk);
            $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawalb FROM pemasukanawalb"); 
            $masukb = mysqli_fetch_assoc($querymasuk);
            $querymasuk1 = mysqli_query($koneksi, "SELECT sum(jumlah) as totalspp FROM pemasukanspp"); 
            $masuk1 = mysqli_fetch_assoc($querymasuk1);
            $querymasukL = mysqli_query($koneksi, "SELECT sum(jumlah) as totallainnya FROM lainnya"); 
            $masukL = mysqli_fetch_assoc($querymasukL);

            $masuk2['totalmasuk'] = $masuk['totalawal'] + $masukb['totalawalb'] + $masuk1['totalspp']+ $masukL['totallainnya'];

            // fungsi pengeluaran
            $querykeluar = mysqli_query($koneksi, "SELECT sum(jumlah) as keluar FROM pengeluaran"); 
            $keluar = mysqli_fetch_assoc($querykeluar);

             // fungsi sisa
            $sisa['sisa'] = $masuk2['totalmasuk'] - $keluar['keluar'];

            $querysiswa = mysqli_query($koneksi, "SELECT count(id_siswa) as totalsiswa FROM siswa"); 
            $siswa = mysqli_fetch_assoc($querysiswa);

            ?>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Pemasukan</h5>
                      <span class="h3 font-weight-bold mb-0">Rp <?=number_format($masuk2['totalmasuk'],2,',','.');?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <div class="progress">
                     <div class="progress-bar bg-gradient-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Pengeluaran</h5>
                      <span class="h3 font-weight-bold mb-0">Rp <?=number_format($keluar['keluar'],2,',','.');?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-cart"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <div class="progress">
                     <div class="progress-bar bg-gradient-red" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Saldo</h5>
                      <span class="h3 font-weight-bold mb-0">Rp <?=number_format($sisa['sisa'],2,',','.');?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <div class="progress">
                     <div class="progress-bar bg-gradient-orange" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Siswa</h5>
                      <span class="h3 font-weight-bold mb-0"><?php echo $siswa['totalsiswa']; ?> 0rang</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <div class="progress">
                     <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </div>
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
                <div class="col" id="kelas">
                  <h2 class="mb-0">Data Keuangan Siswa </h2>
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
                    <th scope="col"><h3>NO</h3></th>
                    <th scope="col"><h3>NAMA</h3></th>
                    <th scope="col"><h3>AWAL TAHUN</h3></th>
                    <th scope="col"><h3>SPP</h3></th>
                  </tr>
                </thead>
                <tbody class="list">
                       <?php $i=1; ?>

                       <?php
                         $halaman = 5; /* page halaman*/
                         $page =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                         $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0;
        
                         $result =mysqli_query($koneksi, "SELECT * FROM siswa");
                         $total = mysqli_num_rows($result);
                         $pages = ceil($total/$halaman);

                         $query = mysqli_query($koneksi,"SELECT * FROM siswa LIMIT $mulai, $halaman");
                         $no =$mulai+1;
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                      ?>
                  <tr>
                      
                    <th scope="row">
                      <h3><?=$no++?></h3>
                    </th>
                    <td>
                      <h3><?=$data['nama']?></h3>
                    </td>
                    
                    <td>
                       <?php
                        $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawal FROM pemasukanawal WHERE id_siswa='$data[id_siswa]'"); 
                        $masuk = mysqli_fetch_assoc($querymasuk);  

                        $queryrincianawal = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawal FROM rincianawal"); 
                        $rincianawal = mysqli_fetch_assoc($queryrincianawal);
                        
                        $persen1['persen1'] = $masuk['totalawal'] / $rincianawal['totalrawal'] * 100;
                      ?>
                       
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-original-title="Rp <?=number_format($masuk['totalawal'],2,',','.');?>">
                        <span class="mr-2"><?=number_format($persen1['persen1'],1);?>%</span>
                        <div>
                          <a href="detail_pemasukan_awal.php?id_siswa=<?php echo $data["id_siswa"]; ?>">
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="<?=number_format($persen1['persen1'],1);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=number_format($persen1['persen1'],1);?>%;"></div>
                          </div>
                          </a>
                        </div>
                      </div>
                    </td>
                    </td>
                      
                    <td> 
                       <?php
                        $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalspp FROM pemasukanspp WHERE id_siswa='$data[id_siswa]'"); 
                        $masuk = mysqli_fetch_assoc($querymasuk);  

                        $queryrincianspp = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrspp FROM rincianspp"); 
                        $rincianspp = mysqli_fetch_assoc($queryrincianspp);
                        
                        $persen['persen'] = $masuk['totalspp'] / ($rincianspp['totalrspp']*12) * 100;
                      ?>  
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-original-title="Rp <?=number_format($masuk['totalspp'],2,',','.');?>">
                        <span class="mr-2"><?=number_format($persen['persen'],1);?>%</span>
                        <div>
                          <a href="detail_pemasukan_spp.php?id_siswa=<?php echo $data["id_siswa"]; ?>">
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="<?=number_format($persen['persen'],1);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=number_format($persen['persen'],1);?>%;"></div>
                          </div>
                          </a>
                        </div>
                      </div>
                    </td>                 
                  </tr>

                


                              <?php $i++; ?>
                                 <?php
                                     }
                                 ?>
                  
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
        <div class="card-footer py-4">

            
              <?php
              for ($i=1; $i<=$pages ; $i++){
              ?>

              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  
                  
                  <li class="page-item">
                    <a class="page-link" href="dashboard.php?halaman=<?php echo $i; ?>"><?php echo $i; ?></u></a>
                  </li>

                   <?php
                    }
                   ?>

                  
                </ul>
              </nav>
            </div>
          </div>
        </div>
     

        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <div class="col">
                  <form method="POST" action="">
                   <div class="form-inline">
                     <input type="text" class="form-control" name="keyword" placeholder="Cari data disini..." required="required"/>
                     <button class="btn btn-primary" name="search">Cari</button>

                     <br>
                     <?php include "cari.php" ?>
                   </div>
                   </form>
               

  <!-- Argon Scripts -->
  <!-- Core -->
<?php include "script.php" ?>
 
