<?php include "koneksi.php" ?>
<?php include "navbar.php" ?>
<link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css" /> <!-- Load file css jquery-ui -->
<script src="js/jquery.min.js"></script>
  <!-- Main content -->

    <!-- Header -->
    <!-- Header -->


    <!-- konten judul-->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Laporan</h6>
            </div>
          </div>          
        </div>
      </div>
    </div>
   
    <div class="container-fluid bg-light mt--6">
      <div class="row">
         <!-- Page content -->
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0">Laporan Keuangan</h2>
                </div>
                <div class="col text-right">
                 <a href="laporan.php" class="btn btn-sm btn-primary"> Refresh</a>
                </div>              
              </div>
            </div>
            <hr class="my-1" />
            <div class="card-body">
              <form method="get" action="">
                <div class="pl-lg-2">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Filter</label>
                        <select class="form-control" name="filter" id="filter">
                            <option value="">Pilih</option>
                            <option value="1">Per Tanggal</option>
                            <option value="2">Per Bulan</option>
                            <option value="3">Per Tahun</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4" id="form-tanggal">
                      <div class="form-group">
                        <label class="form-control-label">Tanggal</label>
                        <input class="form-control" type="date" name="tanggal" />
                      </div>
                    </div>

                    <div class="col-lg-4" id="form-bulan">
                      <div class="form-group">
                        <label class="form-control-label">Bulan</label>
                        <select class="form-control" name="bulan">
                        <option value="">Pilih</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-4" id="form-tahun">
                      <div class="form-group">
                        <label class="form-control-label">Tahun</label>
                        <input class="form-control" type="text" name="tahun" placeholder="Masukan Tahun" />
                      </div>
                    </div>

                    

                  </div>
                </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                    
                         <button type="submit" class="btn btn-sm btn-primary">Tampilkan Data</button>
                       
                      </div>
                    </div>

                    <hr class="my-3" />
                      <?php
                        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                          $filter = $_GET['filter']; // Ambil data filder yang dipilih user

                          if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                          $tgl_pemasukan = date('d-m-y', strtotime($_GET['tanggal']));

                          echo '<b>Laporan Pemasukan Awal Tahun A Tanggal '.$tgl_pemasukan.'</b>
                                <a href="laporan_awaltahuna.php?filter=1&tanggal='.$_GET['tanggal'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pemasukanawal WHERE DATE(tgl_pemasukan)='".$_GET['tanggal']."'"; //Tampilkan data sesuai tanggal yang diinput oleh user pada filter
                          }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                          $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                          echo '<b>Laporan Pemasukan Awal Tahun A Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b>
                                <a href="laporan_awaltahuna.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'"> Unduh Data</a>';

                          $query = "SELECT * FROM pemasukanawal WHERE MONTH(tgl_pemasukan)='".$_GET['bulan']."' AND YEAR(tgl_pemasukan)='".$_GET['tahun']."'"; // Tampilkan data pemasukanawal sesuai bulan dan tahun yang diinput oleh user pada filter
                          }else{ // Jika filter nya 3 (per tahun)
                          echo '<b>Laporan Pemasukan Awal Tahun A '.$_GET['tahun'].'</b>
                                <a href="laporan_awaltahuna.php?filter=3&tahun='.$_GET['tahun'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pemasukanawal WHERE YEAR(tgl_pemasukan)='".$_GET['tahun']."'"; // Tampilkan data pemasukanawal sesuai tahun yang diinput oleh user pada filter
                          }
                          }else{ // Jika user tidak mengklik tombol tampilkan
                          echo '<b>Semua Data Awal Tahun A</b>
                                <a href="laporan_awaltahuna.php"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pemasukanawal ORDER BY tgl_pemasukan"; // Tampilkan semua data pemasukanawal diurutkan berdasarkan tanggal
                        }
                      ?>
                
                    <hr class="my-3" />
                      <?php
                        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                          $filter = $_GET['filter']; // Ambil data filder yang dipilih user

                          if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                          $tgl_pemasukan = date('d-m-y', strtotime($_GET['tanggal']));

                          echo '<b>Laporan Pemasukan Awal Tahun B Tanggal '.$tgl_pemasukan.'</b>
                                <a href="laporan_awaltahunb.php?filter=1&tanggal='.$_GET['tanggal'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pemasukanawalb WHERE DATE(tgl_pemasukan)='".$_GET['tanggal']."'"; //Tampilkan data sesuai tanggal yang diinput oleh user pada filter
                          }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                          $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                          echo '<b>Laporan Pemasukan Awal Tahun B Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b>
                                <a href="laporan_awaltahunb.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'"> Unduh Data</a>';

                          $query = "SELECT * FROM pemasukanawalb WHERE MONTH(tgl_pemasukan)='".$_GET['bulan']."' AND YEAR(tgl_pemasukan)='".$_GET['tahun']."'"; // Tampilkan data pemasukanawalb sesuai bulan dan tahun yang diinput oleh user pada filter
                          }else{ // Jika filter nya 3 (per tahun)
                          echo '<b>Laporan Pemasukan Awal Tahun B '.$_GET['tahun'].'</b>
                                <a href="laporan_awaltahunb.php?filter=3&tahun='.$_GET['tahun'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pemasukanawalb WHERE YEAR(tgl_pemasukan)='".$_GET['tahun']."'"; // Tampilkan data pemasukanawalb sesuai tahun yang diinput oleh user pada filter
                          }
                          }else{ // Jika user tidak mengklik tombol tampilkan
                          echo '<b>Semua Data Awal Tahun B</b>
                                <a href="laporan_awaltahunb.php"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pemasukanawalb ORDER BY tgl_pemasukan"; // Tampilkan semua data pemasukanawalb diurutkan berdasarkan tanggal
                        }
                      ?>

                    <hr class="my-3" />
                      <?php
                        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                          $filter = $_GET['filter']; // Ambil data filder yang dipilih user

                          if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                          $tgl_pemasukan = date('d-m-y', strtotime($_GET['tanggal']));

                          echo '<b>Laporan Pemasukan SPP Tanggal '.$tgl_pemasukan.'</b>
                                <a href="laporan_spp.php?filter=1&tanggal='.$_GET['tanggal'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pemasukanawalspp WHERE DATE(tgl_pemasukan)='".$_GET['tanggal']."'"; //Tampilkan data sesuai tanggal yang diinput oleh user pada filter
                          }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                          $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                          echo '<b>Laporan Pemasukan SPP Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b>
                                <a href="laporan_spp.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'"> Unduh Data</a>';

                          $query = "SELECT * FROM pemasukanawalspp WHERE MONTH(tgl_pemasukan)='".$_GET['bulan']."' AND YEAR(tgl_pemasukan)='".$_GET['tahun']."'"; // Tampilkan data pemasukanawalspp sesuai bulan dan tahun yang diinput oleh user pada filter
                          }else{ // Jika filter nya 3 (per tahun)
                          echo '<b>Laporan Pemasukan SPP '.$_GET['tahun'].'</b>
                                <a href="laporan_spp.php?filter=3&tahun='.$_GET['tahun'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pemasukanawalspp WHERE YEAR(tgl_pemasukan)='".$_GET['tahun']."'"; // Tampilkan data pemasukanawalspp sesuai tahun yang diinput oleh user pada filter
                          }
                          }else{ // Jika user tidak mengklik tombol tampilkan
                          echo '<b>Semua Data SPP</b>
                                <a href="laporan_spp.php"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pemasukanawalspp ORDER BY tgl_pemasukan"; // Tampilkan semua data pemasukanawalspp diurutkan berdasarkan tanggal
                        }
                      ?>

                    <hr class="my-3" />
                      <?php
                        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                          $filter = $_GET['filter']; // Ambil data filder yang dipilih user

                          if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                          $tgl_lainnya = date('d-m-y', strtotime($_GET['tanggal']));

                          echo '<b>Laporan Pemasukan Lainnya Tanggal '.$tgl_lainnya.'</b>
                                <a href="laporan_lainnya.php?filter=1&tanggal='.$_GET['tanggal'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM lainnya WHERE DATE(tgl_lainnya)='".$_GET['tanggal']."'"; //Tampilkan data sesuai tanggal yang diinput oleh user pada filter
                          }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                          $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                          echo '<b>Laporan Pemasukan Lainnya Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b>
                                <a href="laporan_lainnya.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'"> Unduh Data</a>';

                          $query = "SELECT * FROM lainnya WHERE MONTH(tgl_lainnya)='".$_GET['bulan']."' AND YEAR(tgl_lainnya)='".$_GET['tahun']."'"; // Tampilkan data lainnya sesuai bulan dan tahun yang diinput oleh user pada filter
                          }else{ // Jika filter nya 3 (per tahun)
                          echo '<b>Laporan Pemasukan Lainnya '.$_GET['tahun'].'</b>
                                <a href="laporan_lainnya.php?filter=3&tahun='.$_GET['tahun'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM lainnya WHERE YEAR(tgl_lainnya)='".$_GET['tahun']."'"; // Tampilkan data lainnya sesuai tahun yang diinput oleh user pada filter
                          }
                          }else{ // Jika user tidak mengklik tombol tampilkan
                          echo '<b>Semua Data Lainnya</b>
                                <a href="laporan_lainnya.php"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM lainnya ORDER BY tgl_lainnya"; // Tampilkan semua data lainnya diurutkan berdasarkan tanggal
                        }
                      ?>
                    
                    <hr class="my-3" />
                      <?php
                        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                          $filter = $_GET['filter']; // Ambil data filder yang dipilih user

                          if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                          $tgl_pengeluaran = date('d-m-y', strtotime($_GET['tanggal']));

                          echo '<b>Laporan Pemasukan pengeluaran Tanggal '.$tgl_pengeluaran.'</b>
                                <a href="laporan_pengeluaran.php?filter=1&tanggal='.$_GET['tanggal'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pengeluaran WHERE DATE(tgl_pengeluaran)='".$_GET['tanggal']."'"; //Tampilkan data sesuai tanggal yang diinput oleh user pada filter
                          }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                          $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                          echo '<b>Laporan Pemasukan pengeluaran Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b>
                                <a href="laporan_pengeluaran.php?filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'"> Unduh Data</a>';

                          $query = "SELECT * FROM pengeluaran WHERE MONTH(tgl_pengeluaran)='".$_GET['bulan']."' AND YEAR(tgl_pengeluaran)='".$_GET['tahun']."'"; // Tampilkan data pengeluaran sesuai bulan dan tahun yang diinput oleh user pada filter
                          }else{ // Jika filter nya 3 (per tahun)
                          echo '<b>Laporan Pemasukan pengeluaran '.$_GET['tahun'].'</b>
                                <a href="laporan_pengeluaran.php?filter=3&tahun='.$_GET['tahun'].'"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pengeluaran WHERE YEAR(tgl_pengeluaran)='".$_GET['tahun']."'"; // Tampilkan data pengeluaran sesuai tahun yang diinput oleh user pada filter
                          }
                          }else{ // Jika user tidak mengklik tombol tampilkan
                          echo '<b>Semua Data pengeluaran</b>
                                <a href="laporan_pengeluaran.php"> Unduh Data</a><br /><br />';

                          $query = "SELECT * FROM pengeluaran ORDER BY tgl_pengeluaran"; // Tampilkan semua data pengeluaran diurutkan berdasarkan tanggal
                        }
                      ?>
                
              </form>
            </div>
          </div>
        </div>






      </div>
    </div>
  </div>










  <!-- Argon Scripts -->
  <!-- Core -->
<script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
    <script src="plugin/jquery-ui/jquery-ui.min.js"></script>

 
