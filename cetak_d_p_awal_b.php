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
                 <thead>
                  <tr>
                    <tH valign="top" align="center">NO</th>
                     <tH width="200" valign="top" align="center">TANGGAL PEMBAYARAN</th>
                     <tH width="150" valign="top" align="center">JUMLAH</th>
                  </tr>
                </thead>

        <tbody>

                       <?php $i=1; ?>
                     <?php
                  $sql = mysqli_query($koneksi, "SELECT * FROM pemasukanawalb WHERE id_siswa='$data[id_siswa]'");
                 
                  while($d=mysqli_fetch_array($sql)){
                    ?>
                  <tr>
                    <td valign="top">
                        <?php echo $i; ?>
                    </td>
                   <td>
                      <?php
                      $tgl_pemasukan= $d["tgl_pemasukan"];
                      ?>
                      <?php echo date("d-m-Y", strtotime($tgl_pemasukan)); ?>
                    </td>
                    <td>
                      Rp. <?=number_format($d ['jumlah'],2,',','.');?>
                    </td>
                    
                  </tr>
                              


                              <?php $i++; ?>
                                 <?php
                                     }
                                 ?>
                    
                  
                  <tr>
                    <?php
                  $bayaran1=mysqli_query($koneksi,"SELECT * FROM pemasukanawalb WHERE id_siswa='$data[id_siswa]'");
                  while ($bayarmasuk1=mysqli_fetch_array($bayaran1)){
                  $arraybayaran1[] = $bayarmasuk1['jumlah'];
                   }
                  $jumlahbayar1 = array_sum($arraybayaran1); 

                  $biaya=mysqli_query($koneksi,"SELECT * FROM rincianawalb");
                  while ($keluar=mysqli_fetch_array($biaya)){
                  $arraybiaya[] = $keluar['jumlah'];
                  }
                  $jumlahbiaya = array_sum($arraybiaya);


                  $tunggakan = $jumlahbiaya - $jumlahbayar1;
                ?>
                    <td colspan="2" align="center">
                      Total Pembayaran
                    </td>
                    <td> 
                      Rp. <?=number_format($jumlahbayar1,2,',','.');?>
                    </td>  
                  </tr>
                   <tr>
                    <td colspan="2" align="center">
                      Total Biaya
                    </td>
                    <td> 
                      Rp. <?=number_format($jumlahbiaya,2,',','.');?>
                    </td>  
                  </tr>
                  <tr>
                    <td colspan="2" align="center">
                      Tunggakan
                    </td>
                    <td> 
                      Rp. <?=number_format($tunggakan,2,',','.');?>
                    </td>  
                  </tr>
                  <?php
                   }
                  ?>
                  
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
