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
              <h6 class="h2 text-white d-inline-block mb-0">Pemasukan</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="pemasukan_awal.php">Awal Tahun A</a></li>
                  <li class="breadcrumb-item"><a href="pemasukan_awal_b.php">Awal Tahun B</a></li>
                  <li class="breadcrumb-item"><a href="pemasukan_spp.php">SPP</a></li>
                  <li class="breadcrumb-item"><a href="pemasukan_lainnya.php">Lainnya</a></li>
                </ol>
              </nav> 
            </div>
               <div class="col-lg-6 col-5 text-right">
                 <a href="cetak_pemasukanspp.php" target="blank" class="btn btn-sm btn-neutral">Cetak Laporan</a>
                 <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#myModalresetspp">Reset Data</a>
               </div>
<!-- reset -->
<div id="myModalresetspp" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Perhatian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="reset_spp.php" method="get">
        <div class="text-left modal-body">
           <div class="form-group">
             <h3>Melakukan reset data akan menghapus seluruh data yang ada, saya harap anda telah melakukan rekap data atau mencetak data.
             Apakah anda yakin ingin melakukan reset data?</h3>
           </div>
         
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <button href="reset_spp.php" class="btn btn-success" >Ya</button>
    </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        </div>
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
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0">Pembayaran SPP</h2>
                </div>
                <div class="col text-right">
                  <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalTambahPemasukanspp"> Tambah Data</a>
<div id="myModalTambahPemasukanspp" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Pemasukan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="tambah_pemasukan_spp.php" method="get">
        <div class="text-left modal-body">
          <div class="form-group">
             <label>Nama</label>
             <select class="form-control" name="id_siswa"> 
                       <?php $i=1; ?>

                       <?php 
                         $query = mysqli_query($koneksi,"SELECT * FROM siswa");
                         $no = 1;
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                        ?>
             <option value="<?=$data['id_siswa']?>"><?php echo $i; ?>. <?=$data['nama']?></option>
                                 <?php $i++; ?>
                                 <?php
                                     }
                                 ?>
             </select>     
          </div>
          <div class="form-group">
            <label for="bulan">Bulan</label>
             <select name="bulan" class="form-control" id="bulan">
              <option>Pilih Bulan</option>
              <option value="Januari">Januari</option>
              <option value="Februari">Februari</option>
              <option value="Maret">Maret</option>
              <option value="April">April</option>
              <option value="Mei">Mei</option>
              <option value="Juni">Juni</option>
              <option value="Juli">Juli</option>
              <option value="Agustus">Agustus</option>
              <option value="September">September</option>
              <option value="Oktober">Oktober</option>
              <option value="November">November</option>
              <option value="Desember">Desember</option>
             </select>   
          </div>
          <div class="form-group">
             <label>Nama</label>
             <select class="form-control" name="jumlah"> 
                       <?php 
                         $query = mysqli_query($koneksi,"SELECT * FROM rincianspp");
                      
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                        ?>
             <option value="<?=$data['jumlah']?>">Rp. <?=number_format($data ['jumlah'],2,',','.');?></option>
                                 <?php
                                     }
                                 ?>
             </select>     
          </div>
          <div class="form-group">
             <label>Tanggal</label>
             <input type="date" name="tgl_pemasukan" class="form-control">      
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
            
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"><h3>NO</h3></th>
                    <th scope="col"><h3>NAMA</h3></th>
                    <th scope="col"><h3>BULAN</h3></th>
                    <th scope="col"><h3>TANGGAL BAYAR</h3></th>
                    <th scope="col"><h3>JUMLAH</h3></th>
                    <th scope="col"><h3>PILIHAN</h3></th>
                  </tr>
                </thead>
                <tbody class="list">
                       <?php $i=1; ?>
                        
                       <?php 

                        
                        $halaman = 20; /* page halaman*/
                        $page =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0;
        
                        $result =mysqli_query($koneksi, "SELECT * FROM pemasukanspp");
                        $total = mysqli_num_rows($result);
                        $pages = ceil($total/$halaman);
        

                         $query = mysqli_query($koneksi,"SELECT * FROM siswa INNER JOIN pemasukanspp ON siswa.id_siswa = pemasukanspp.id_siswa ORDER BY id_pemasukanspp DESC LIMIT $mulai, $halaman");
                         $no =$mulai+1;
                      
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                        ?>
                  <th scope="row">
                      <h3><?=$no++?></h3>
                    </th>
                    <td>
                      <h3><?=$data['nama']?></h3>
                    </td>
                    <td>
                      <h3><?=$data['bulan']?></h3>
                    </td>

                     <td>
                      <?php
                      $tgl_pemasukan= $data["tgl_pemasukan"];
                      ?>
                      <h3><?php echo date("d-m-Y", strtotime($tgl_pemasukan)); ?></h3>
                    </td>
                    
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                    
                    <td>
                      
                          <a href="detail_pemasukan_spp.php?id_siswa=<?php echo $data["id_siswa"]; ?>" class="btn btn-sm btn-primary">lihat</a>
                          <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModalEditPemasukanspp<?php echo $data['id_siswa']; ?>">EDIT</a>
                          <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModalHapusPemasukanspp<?php echo $data['id_pemasukanspp']; ?>">HAPUS</a>
       

                    </td>
                  </tr>

                  
                            
                             <?php include('modal_pemasukan_spp.php'); ?>
                              <?php $i++; ?>
                                 <?php
                               
                                     }
                                 ?>

                  <tr>    
                          <?php  
                            // fungsi query untuk menampilkan data dari tabel
                            $query = mysqli_query($koneksi, "SELECT sum(jumlah) as totalspp FROM pemasukanspp");  
                            // tampilkan data
                            $data = mysqli_fetch_assoc($query);
                          ?>
                         
                    <th scope="row">

                    </th>
                    <td>
                      <h3>Total</h3>
                    </td>
                    <td>
                      <h3></h3>
                    </td>
                    <td>
                      <h3></h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data['totalspp'],2,',','.');?></h3>
                    </td>
                    <td>
                      <h3></h3>
                    </td>
                  </tr>
                  
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
                    <a class="page-link" href="pemasukan_spp.php?halaman=<?php echo $i; ?>"><?php echo $i; ?></u></a>
                  </li>

                   <?php
                    }
                   ?>

                  
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
  <!-- Argon Scripts -->
  <!-- Core -->
<?php include "script.php" ?>
 
