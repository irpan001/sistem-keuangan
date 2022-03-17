<?php include "koneksi.php" ?>
<?php include "kepsek_navbar.php" ?>
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

                  <a href="kepsek_data_siswa.php" class="btn btn-sm btn-neutral">Kelas A</a>
                  <a href="kepsek_data_siswa_b.php" class="btn btn-sm btn-neutral">Kelas B</a>
              </nav>    
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
                  <h2 class="mb-0">Data Siswa Kelas A </h2>
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
                    <th scope="col"><h3>JENIS kELAMIN</h3></th>
                    <th scope="col"><h3></h3></th>
                  </tr>
                </thead>
                <tbody class="list">
                       <?php $i=1; ?>

                       <?php
                         $halaman = 10; /* page halaman*/
                         $page =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                         $mulai  =($page>1) ? ($page * $halaman) - $halaman : 0;
        
                         $result =mysqli_query($koneksi, "SELECT * FROM siswa WHERE kelas='A'");
                         $total = mysqli_num_rows($result);
                         $pages = ceil($total/$halaman);

                         $query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE kelas='A' LIMIT $mulai, $halaman");
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
                      <h3><?=$data['j_kelamin']?></h3>
                    </td>
                    <td class="text-left">
                 
                      
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
                    <a class="page-link" href="kepsek_data_siswa.php?halaman=<?php echo $i; ?>"><?php echo $i; ?></u></a>
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
 
