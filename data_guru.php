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
              <h6 class="h2 text-white d-inline-block mb-0">Data Guru TK Cijuhung</h6>
         
              
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
                  <h2 class="mb-0"><a href="#" data-toggle="modal" data-target="#myModalguru">Data guru</a></h2>
                </div>
                <div class="col text-right">
                  <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalTambahguru"> Tambah Data</a>
                </div>
                <!-- tambah -->
<div id="myModalTambahguru" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Guru</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="tambah_guru.php" method="get">
        <div class="text-left modal-body">
          <div class="form-group">
             <label>Nama</label>
             <input type="text" name="nama" class="form-control">      
          </div>
          <div class="form-group">
             <label>NIP</label>
             <input type="text" name="nip" class="form-control">      
          </div>
         
           <div class="form-group">
             <label>Tempat Lahir</label>
             <input type="text" name="tempat_lahir" class="form-control">      
          </div>
          <div class="form-group">
             <label>Tanggal Lahir</label>
             <input type="date" name="tgl_lahir" class="form-control">      
          </div>  
          <div class="form-group">
             <label>Jabatan</label>
             <input type="text" name="jabatan" class="form-control">      
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
                    <th scope="col"><h3>NIP</h3></th>
                    <th scope="col"><h3>TEMPAT TANGGAL LAHIR</h3></th>
                    <th scope="col"><h3>JABATAN</h3></th>
                    <th scope="col"><h3>PILIHAN</h3></th>
                  </tr>
                </thead>
                <tbody class="list">
                       <?php $i=1; ?>

                       <?php 
                  
        $halaman = 10; /* page halaman*/
        $page =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0;
        
        $result =mysqli_query($koneksi, "SELECT * FROM guru");
        $total = mysqli_num_rows($result);
        $pages = ceil($total/$halaman);
        
        $query  =mysqli_query($koneksi, "SELECT * FROM guru LIMIT $mulai, $halaman");
        $no =$mulai+1;
        while($data  =mysqli_fetch_array($query)){

                        
                        ?>
                  <tr>
                    <th scope="row">
                      <h3><?=$no++?></h3>
                    </th>
                    <td>
                      <h3><?=$data['nama']?></h3>
                    </td>
                    <td>
                      <h3><?=$data['nip']?></h3>
                    </td>
                    <td>
                      <?php
                      $tgl_lahir= $data["tgl_lahir"];
                      ?>
                      <h3><?=$data['tempat_lahir']?>, <?php echo date("d-m-Y", strtotime($tgl_lahir)); ?></h3>
                    </td>
                    <td>
                      <h3><?=$data['jabatan']?></h3>
                    </td>
                    <td class="text-left">
                      <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModalEditguru<?php echo $data['id_guru']; ?>">EDIT</a>
                      <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModalHapusguru<?php echo $data['id_guru']; ?>">HAPUS</a>
                      
                      </div>
                    </td>
                  </tr>

                  <?php include('modal_guru.php'); ?>


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
                    <a class="page-link" href="data_guru.php?halaman=<?php echo $i; ?>"><?php echo $i; ?></u></a>
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
 
