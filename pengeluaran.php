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
              <h6 class="h2 text-white d-inline-block mb-0">Pengeluaran</h6>             
            </div>
               <div class="col-lg-6 col-5 text-right">
                 <a href="cetak_pengeluaran.php" target="blank" class="btn btn-sm btn-neutral">Cetak Laporan</a>
                 <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#myModalresetpengeluaran">Reset Data</a>
               </div>
                              <!-- reset -->
<div id="myModalresetpengeluaran" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Perhatian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="reset_pengeluaran.php" method="get">
        <div class="text-left modal-body">
           <div class="form-group">
             <h3>Melakukan reset data akan menghapus seluruh data yang ada, saya harap anda telah melakukan rekap data atau mencetak data.
             Apakah anda yakin ingin melakukan reset data?</h3>
           </div>
         
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <button href="reset_pengeluaran.php" class="btn btn-success" >Ya</button>
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
      <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0">Data Pengeluaran</h2>
                </div>
                <div class="col text-right">
                  <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalTambahPengeluaran"> Tambah Data</a>
                </div>

                <!-- tambah -->
<div id="myModalTambahPengeluaran" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Pengeluaran</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="tambah_pengeluaran.php" method="get">
        <div class="text-left modal-body">
          <div class="form-group">
             <label>Keterangan</label>
             <input type="text" name="keterangan" class="form-control">      
          </div>
          <div class="form-group">
             <label>Jumlah</label>
             <input type="text" name="jumlah" class="form-control">      
          </div>
          <div class="form-group">
             <label>Tanggal Pengeluaran</label>
             <input type="date" name="tgl_pengeluaran" class="form-control">      
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
            
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"><h3>NO</h3></th>
                    <th scope="col"><h3>KETERANGAN</h3></th>
                    <th scope="col"><h3>JUMLAH</h3></th>
                    <th scope="col"><h3>TANGGAL PENGELUARAN</h3></th>
                    <th scope="col"><h3>PILIHAN</h3></th>
                  </tr>
                </thead>
                <tbody class="list">
                       <?php $i=1; ?>

                       <?php 
                         $halaman = 10; /* page halaman*/
                         $page =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                         $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0; 

                         $result =mysqli_query($koneksi, "SELECT * FROM pengeluaran");
                         $total = mysqli_num_rows($result);
                         $pages = ceil($total/$halaman);

                         $query = mysqli_query($koneksi,"SELECT * FROM pengeluaran");
                         $no =$mulai+1;
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                        ?>
                  <tr>
                    <th scope="row">
                      <h3><?=$no++?></h3>
                    </th>
                    <td>
                      <h3><?=$data['keterangan']?></h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data ['jumlah'],2,',','.');?></h3>
                    </td>
                    <td>
                      <?php
                      $tgl_pengeluaran= $data["tgl_pengeluaran"];
                      ?>
                      <h3><?php echo date("d-m-Y", strtotime($tgl_pengeluaran)); ?></h3>
                    </td>
                    
                    <td>
                      
                     
                          <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModalEditPengeluaran<?php echo $data['id_pengeluaran']; ?>">EDIT</a>
                          <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModalHapusPengeluaran<?php echo $data['id_pengeluaran']; ?>">HAPUS</a>
       

                    </td>
                  </tr>

                  <?php include('modal_pengeluaran.php'); ?>


                              <?php $i++; ?>
                                 <?php
                                     }
                                 ?>
                  <tr>
                                        <?php  
            // fungsi query untuk menampilkan data dari tabel obat
            $query = mysqli_query($koneksi, "SELECT sum(jumlah) as totalkeluar FROM pengeluaran");  
            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
                    <th scope="row">

                    </th>
                    <td>
                      <h3>Jumlah</h3>
                    </td>
                    <td>
                      <h3>Rp. <?=number_format($data['totalkeluar'],2,',','.');?></h3>
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
                    <a class="page-link" href="data_siswa.php?halaman=<?php echo $i; ?>"><?php echo $i; ?></u></a>
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
 
