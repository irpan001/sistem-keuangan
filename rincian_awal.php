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
      
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0">Rincian Awal Tahun Kelas A</h2>
                </div>
                <div class="col text-right">
                  <a href="cetak_rincianawal.php" class="btn btn-sm btn-primary" target="blank"> Cetak</a>
                  <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalTambahawal"> Tambah Data</a>
                  <!-- tambah -->
<div id="myModalTambahawal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Rincian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="tambah_awal.php" method="get">
        <div class="text-left modal-body">
          <div class="form-group">
             <label>keterangan</label>
             <input type="text" name="keterangan" class="form-control">      
          </div>
          <div class="form-group">
             <label>Jumlah</label>
             <input type="text" name="jumlah" class="form-control">      
          </div>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Tambah</button>
    </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        </div>
      </div>

    </div>
</div>

                    
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"><h3>NO</h3></th>
                    <th scope="col"><h3>KETERANGAN</h3></th>
                    <th scope="col"><h3>JUMLAH</h3></th>
                    <th scope="col"><h3>PILIHAN</h3></th>
                  </tr>
                </thead>
                 <tbody>

                       <?php $i=1; ?>

                       <?php 
                         $query = mysqli_query($koneksi,"SELECT * FROM rincianawal");
                         $no = 1;
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                        ?>
                  <tr>
                    <th scope="row">
                      <h3><?php echo $i; ?></h3>
                    </th>
                    <td>
                      <h3><?=$data['keterangan']?></h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                    <td>
                      
                     
                          <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModalEditawal<?php echo $data['id_awal']; ?>">EDIT</a>
                          <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModalHapusawal<?php echo $data['id_awal']; ?>">HAPUS</a>
       

                    </td>
                  </tr>
                              <?php include('modal_awal.php'); ?>


                              <?php $i++; ?>
                                 <?php
                                     }
                                 ?>
                  <tr>
                         <?php  
                            // fungsi query untuk menampilkan data dari tabel
                            $query = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawal FROM rincianawal");  
                            // tampilkan data
                            $data = mysqli_fetch_assoc($query);
                          ?>
                    <th scope="row">

                    </th>
                    <td>
                      <h3>Total</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data['totalawal'],2,',','.');?></h3>
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


  <!-- Argon Scripts -->
  <!-- Core -->
<?php include "script.php" ?>
 
