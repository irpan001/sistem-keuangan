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
              <h6 class="h2 text-white d-inline-block mb-0">Data Siswa TK MERPATI BANJARSARI</h6>
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <a href="data_siswa.php" class="btn btn-sm btn-neutral"><i class="fas fa-home"></i></a>
                  <a href="data_siswa_a.php" class="btn btn-sm btn-neutral">Kelas A</a>
                  <a href="data_siswa_b.php" class="btn btn-sm btn-neutral">Kelas B</a>
               </nav>   
            </div>
             <div class="col-lg-6 col-5 text-right">
              <a href="export_siswa.php" class="btn btn-sm btn-neutral">Rekap Data</a>
              <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#myModalresetsiswa">Reset Data</a>
            </div>
<!-- reset -->
<div id="myModalresetsiswa" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Perhatian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="reset_siswa.php" method="get">
        <div class="text-left modal-body">
           <div class="form-group">
             <h3>Melakukan reset data akan menghapus seluruh data yang ada, saya harap anda telah melakukan rekap data atau mencetak data.
             Apakah anda yakin ingin melakukan reset data?</h3>
           </div>
         
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <button href="reset_siswa.php" class="btn btn-success" >Ya</button>
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
                <div class="col" id="kelas">
                  <h2 class="mb-0">Data Siswa </h2>
                </div>
               
                <div class="col text-right">
                  <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalTambahSiswa"> Tambah Data</a>
                </div>


                <!-- tambah -->
<div id="myModalTambahSiswa" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Siswa</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="tambah_siswa.php" method="get">
        <div class="text-left modal-body">
          <div class="row">
          <div class="form-group col-lg-6">
             <label>Nama</label>
             <input type="text" name="nama" class="form-control">      
          </div>
          
          <div class="form-group col-lg-6">
             <label>NIS</label>
             <input type="text" name="nis" class="form-control">      
          </div>
          </div>

          <div class="row">
          <div class="form-group col-lg-6">
             <label>Nama Ibu</label>
             <input type="text" name="ibu" class="form-control">      
          </div>

          <div class="form-group col-lg-6">
             <label>Nama Ayah</label>
             <input type="text" name="ayah" class="form-control">      
          </div>
          </div>

          <div class="row"> 
          <div class="form-group col-lg-6">
             <label>Tempat Lahir</label>
             <input type="text" name="tempat_lahir" class="form-control">      
          </div>

          <div class="form-group col-lg-6">
             <label>Tanggal Lahir</label>
             <input type="date" name="tgl_lahir" class="form-control">      
          </div>
          </div>
          
          <div class="row"> 
          <div class="form-group col-lg-6">
              <label for="kelas">Kelas</label>
               <select name="kelas" class="form-control" id="kelas">
               <option>Pilih Kelas</option>
               <option value="A">Kelas A</option>
               <option value="B">kelas B</option>
              </select> 
          </div>

          <div class="form-group col-lg-6">
              <label for="j_kelamin">Jenis Kelamin</label>
               <select name="j_kelamin" class="form-control" id="j_kelamin">
               <option>Pilih Jenis Kelamin</option>
               <option value="Laki-laki">Laki-laki</option>
               <option value="Perempuan">Perempuan</option>
              </select> 
          </div>
          </div>

           <div class="row">
          <div class="form-group col-lg-6">
             <label>Username</label>
             <input type="text" name="username" class="form-control">      
          </div>

          <div class="form-group col-lg-6">
             <label>Password</label>
             <input type="text" name="pass" class="form-control">      
          </div>
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
                    <th scope="col"><h3>NAMA</h3></th>
                    <th scope="col"><h3>NIS</h3></th>
                    <th scope="col"><h3>TANGGAL LAHIR</h3></th>
                    <th scope="col"><h3>ORANG TUA</h3></th>
                    <th scope="col"><h3>KELAS</h3></th>
                    <th scope="col"><h3>JENIS KELAMIN</h3></th>
                    <th scope="col"><h3>USERNAME</h3></th>
                    <th scope="col"><h3>PASSWORD</h3></th>
                    <th scope="col"><h3>PILIHAN</h3></th>
                  </tr>
                </thead>
                <tbody class="list">
                       <?php $i=1; ?>

                       <?php
                         $halaman = 10; /* page halaman*/
                         $page =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                         $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0;
        
                         $result =mysqli_query($koneksi, "SELECT * FROM siswa");
                         $query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis");
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
                      <h3><?=$data['nis']?></h3>
                    </td>
                    <td>
                      <?php
                      $tgl_lahir= $data["tgl_lahir"];
                      ?>
                      <h3><?=$data['tempat_lahir']?>, <?php echo date("d-m-Y", strtotime($tgl_lahir)); ?></h3>
                    </td>
                    <td>
                      <h3><?=$data['ibu']?> / <?=$data['ayah']?></h3>
                    </td>
                    <td>
                      <h3><?=$data['kelas']?></h3>
                    </td>
                    <td>
                      <h3><?=$data['j_kelamin']?></h3>
                    </td>
                    <td>
                      <h3><?=$data['username']?></h3>
                    </td>
                    <td>
                      <h3><?=$data['pass']?></h3>
                    </td>
                    <td class="text-left">
                      
                      <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModalEditSiswa<?php echo $data['id_siswa']; ?>">EDIT</a>
                      <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModalHapusSiswa<?php echo $data['id_siswa']; ?>">HAPUS</a>
                      
                      </div>
                    </td>
                  </tr>

                  <?php include('modal_siswa.php'); ?>


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
 
