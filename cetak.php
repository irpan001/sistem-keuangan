<?php include "koneksi.php" ?>

<head>
<p align="left">
    
    <div>
    <img
        width="120"
        height="120"
        src="assets/img/logotk.png"
        align="left"
        hspace="12"
    />
</p>

<p align="center">
    YAYASAN IBNU SALAMAH
</p>

<h2 align="center">
    <strong>RA IBNU SALAMAH</strong>
</h2>

<p align="center">
    Alamat : Kp. cijuhung  02/04 Desa Sukaratu Kec. Sukaratu Tasikmlaya Kode Pos 46415
</p>


<p align="center">
___________________________________________________________________________________________________________________________________
</p>
</head>
<br><br>
<p align="center">
    <strong>BUKTI PEMBAYARAN AWAL TAHUN</b></strong>
   
</p>
<p align="center">
    <strong>TK RA IBNU SALAMAH</strong>    
</p>
<br><br>

              <?php
                if(isset($_GET['id_siswa']) && $_GET['id_siswa']!=''){
                $sqlSiswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$_GET[id_siswa]'");
                $data=mysqli_fetch_array($sqlSiswa);
                $id_siswa = $data['id_siswa'];
              ?>

<p align="left">
    Nama  &nbsp;: <?php echo $data['nama']; ?>
   
</p>
<p align="left">
    NIS  &nbsp;&nbsp;: <?php echo $data['nis']; ?>  
</p>
<p align="left">
    Kelas : <?php echo $data['kelas']; ?>  
</p>
<br><br>
              <table align="center" border="1" cellspacing="0" cellpadding="10px">

                <tbody>
                      <?php
                        $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawal FROM pemasukanawal WHERE id_siswa='$data[id_siswa]'"); 
                        $masuk = mysqli_fetch_assoc($querymasuk);  

                        $queryrincianawal = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawal FROM rincianawal"); 
                        $rincianawal = mysqli_fetch_assoc($queryrincianawal);

                        $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawalb FROM pemasukanawalb WHERE id_siswa='$data[id_siswa]'"); 
                        $masukb = mysqli_fetch_assoc($querymasuk);  

                        $queryrincianawalb = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawalb FROM rincianawalb"); 
                        $rincianawalb = mysqli_fetch_assoc($queryrincianawalb);

                        $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalspp FROM pemasukanspp WHERE id_siswa='$data[id_siswa]'"); 
                        $masukspp = mysqli_fetch_assoc($querymasuk);  

                        $queryrincianspp = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrspp FROM rincianspp"); 
                        $rincianspp = mysqli_fetch_assoc($queryrincianspp);
                      ?>

                  <tr>                    
                    <td>
                      <h3>Awal Tahun a</h3>
                    </td>
                    <td> 
                      <h3>Rp <?=number_format($masuk['totalawal'],2,',','.');?></h3>
                    </td> 
                  </tr>

                   <tr>                    
                    <td>
                      <h3>Awal Tahun B</h3>
                    </td>
                    <td> 
                      <h3>Rp <?=number_format($masukb['totalawalb'],2,',','.');?></h3>
                    </td> 
                  </tr>

                   <tr>                    
                    <td>
                      <h3>SPP</h3>
                    </td>
                    <td> 
                      <h3>Rp <?=number_format($masukspp['totalspp'],2,',','.');?></h3>
                    </td> 
                  </tr>
                  
                </tbody>

              </table>
              

                                

               

<br><br><br><br>
<p align="center">
    <strong></strong>
    <?php 
$bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"); 
$hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"); 
?>
<p align="center">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tasikmalaya, <?php $cetak_date =date("j ") . $bulan[(int)date('m')] . date(" Y"); echo $cetak_date;?>
</p>
<p align="center">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala RA Ibnu Salamah
</p>
<br><br><br><br><br>
<p align="center">
                        <?php 
                      
                         $query = mysqli_query($koneksi,"SELECT * FROM user");
                       
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                        ?>
    <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $data['nama']; ?></u></strong>
                                 <?php
                                   }
                                 ?>
</p>
<script>
    window.print();
</script>

    </html>

                                  <?php
                                     }
                                                                ?>