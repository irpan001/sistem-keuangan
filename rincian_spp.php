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
              <h6 class="h2 text-white d-inline-block mb-0">Rincian Keuangan</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="rincian_awal.php">Awal Tahun A</a></li>
                  <li class="breadcrumb-item"><a href="rincian_awal_b.php">Awal Tahun B</a></li>
                  <li class="breadcrumb-item"><a href="rincian_spp.php">SPP</a></li>
                </ol>
              </nav>
            </div>
          
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid bg-light mt--6">
                          <?php $i=1; ?>

                               <?php 
                                 $query = mysqli_query($koneksi,"SELECT * FROM rincianspp");
                                 $no = 1;
                                 while ($data = mysqli_fetch_assoc($query)) 
                                 {
                          ?>
      
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0">Rincian SPP</h2>
                </div>
                <div class="col text-right">
                 <a href="cetak_rincianspp.php" class="btn btn-sm btn-primary" target="blank"> Cetak</a>
                 <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModalEditspp<?php echo $data['id_spp']; ?>"> Edit</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"><h3>NO</h3></th>
                    <th scope="col"><h3>BULAN</h3></th>
                    <th scope="col"><h3>JUMLAH</h3></th>    
                    <th scope="col"><h3></h3></th>              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <h3>1</h3>
                    </th>
                    <td>
                      <h3>Januari</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>2</h3>
                    </th>
                    <td>
                      <h3>Februari</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>3</h3>
                    </th>
                    <td>
                      <h3>Maret</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>4</h3>
                    </th>
                    <td>
                      <h3>April</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>5</h3>
                    </th>
                    <td>
                      <h3>Mei</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>6</h3>
                    </th>
                    <td>
                      <h3>Juni</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>7</h3>
                    </th>
                    <td>
                      <h3>Juli</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>8</h3>
                    </th>
                    <td>
                      <h3>Agustus</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>9</h3>
                    </th>
                    <td>
                      <h3>September</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>10</h3>
                    </th>
                    <td>
                      <h3>Oktober</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>11</h3>
                    </th>
                    <td>
                      <h3>November</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">
                      <h3>12</h3>
                    </th>
                    <td>
                      <h3>Desember</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                  </tr>

                   <?php include('modal_spp.php'); ?>


                              <?php $i++; ?>
                                 <?php
                                     }
                                 ?>

                  <tr>
                         <?php  
                            // fungsi query untuk menampilkan data dari tabel
                            $query = mysqli_query($koneksi, "SELECT sum(jumlah) as totalspp FROM rincianspp");  
                            // tampilkan data
                            $data = mysqli_fetch_assoc($query);
                          ?>
                    <th scope="row">

                    </th>
                    <td>
                      <h3>TOTAL</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data['totalspp'] * 12,2,',','.');?></h3>
                    </td>
                    <td>
                      <h3></h3>
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