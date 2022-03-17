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
    <strong>LAPORAN PEMASUKAN AWAL TAHUN KELAS A</strong>
   
</p>
<p align="center">
    <strong>RA IBNU SALAMAH</strong>    
</p>
<br><br>
<table align="center" border="1" cellspacing="0" cellpadding="10px">
    <tbody>
                 <thead>
                  <tr>
                     <tH valign="top" align="center">NO</th>
                     <tH width="200" valign="top" align="center">NAMA</th>
                     <tH width="200" valign="top" align="center">TANGGAL BAYAR</th>
                     <tH width="150" valign="top" align="center">JUMLAH</th>
                  </tr>
                </thead>

        <tbody>

                       <?php $i=1; ?>

                       <?php 
                         $query = mysqli_query($koneksi,"SELECT * FROM siswa INNER JOIN pemasukanawal ON siswa.id_siswa = pemasukanawal.id_siswa");
                         $no = 1;
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                        ?>
                  <tr>
                    <td valign="top">
                        <?php echo $i; ?>
                    </td>
                    <td>
                      <?=$data['nama']?>
                    </td>
                     <td>
                      <?php
                      $tgl_pemasukan= $data["tgl_pemasukan"];
                      ?>
                      <?php echo date("d-m-Y", strtotime($tgl_pemasukan)); ?>
                    </td>
                    <td valign="top">
                        Rp. <?=number_format($data ['jumlah'],2,',','.');?>
                    </td>
                    
                  </tr>
                              


                              <?php $i++; ?>
                                 <?php
                                     }
                                 ?>

                   <tr>
                         <?php  
                            // fungsi query untuk menampilkan data dari tabel
                            $query = mysqli_query($koneksi, "SELECT sum(jumlah) as totalpemasukanawal FROM pemasukanawal");  
                            // tampilkan data
                            $data = mysqli_fetch_assoc($query);
                          ?>
                   
                    <td colspan="3" valign="top" align="center">
                      Total
                    </td>
                    <td valign="top">
                      Rp. <?=number_format($data['totalpemasukanawal'],2,',','.');?>
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
