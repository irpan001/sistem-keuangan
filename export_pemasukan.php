    <?php
    include "koneksi.php";
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Pemasukan.xls");
	?>

<h3>Data Pemasukan Awal Tahun A <?php $cetak_date =date("Y"); echo $cetak_date;?></h3>    
<table border="1" cellpadding="5"> 
	<tr>    
	<th>NO</th>
	<th>Nama</th>
    <th>Tgl Pemasukan</th>
    <th>Jumlah</th>    
	</tr>  
	<?php
	$query = mysqli_query($koneksi,"SELECT * FROM siswa INNER JOIN pemasukanawal ON siswa.id_siswa = pemasukanawal.id_siswa");
    $no =1;
                      
    while ($data = mysqli_fetch_assoc($query)) 
    {
    ?>

                    <th scope="row">
                      <?=$no++?>
                    </th>
                    <td>
                      <?=$data['nama']?>
                    </td>

                     <td align="left">
                      <?php
                      $tgl_pemasukan= $data["tgl_pemasukan"];
                      ?>
                      <?php echo date("d-m-Y", strtotime($tgl_pemasukan)); ?>
                    </td>
                    
                    <td>
                      Rp. <?=number_format($data ['jumlah'],2,',','.');?>
                    </td>
                </tr>
                <?php
                               
                }
                ?>

                <tr>    
                          <?php  
            // fungsi query untuk menampilkan data dari tabel obat
            $query = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawal FROM pemasukanawal");  
            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
                         
                    
                    <td colspan="3" align="center">
                      Total
                    </td>
                    
                    <td>
                      Rp. <?=number_format($data['totalawal'],2,',','.');?>
                    </td>
                    
                  </tr>
</table>

<br><br><br>

<h3>Data Pemasukan Awal Tahun B <?php $cetak_date =date("Y"); echo $cetak_date;?></h3>    
<table border="1" cellpadding="5"> 
  <tr>    
  <th>NO</th>
  <th>Nama</th>
    <th>Tgl Pemasukan</th>
    <th>Jumlah</th>    
  </tr>  
  <?php
  $query = mysqli_query($koneksi,"SELECT * FROM siswa INNER JOIN pemasukanawalb ON siswa.id_siswa = pemasukanawalb.id_siswa");
    $no =1;
                      
    while ($data = mysqli_fetch_assoc($query)) 
    {
    ?>

                    <th scope="row">
                      <?=$no++?>
                    </th>
                    <td>
                      <?=$data['nama']?>
                    </td>

                     <td align="left">
                      <?php
                      $tgl_pemasukan= $data["tgl_pemasukan"];
                      ?>
                      <?php echo date("d-m-Y", strtotime($tgl_pemasukan)); ?>
                    </td>
                    
                    <td>
                      Rp. <?=number_format($data ['jumlah'],2,',','.');?>
                    </td>
                </tr>
                <?php
                               
                }
                ?>

                <tr>    
                          <?php  
            // fungsi query untuk menampilkan data dari tabel obat
            $query = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawalb FROM pemasukanawalb");  
            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
                         
                    
                    <td colspan="3" align="center">
                      Total
                    </td>
                    
                    <td>
                      Rp. <?=number_format($data['totalawalb'],2,',','.');?>
                    </td>
                    
                  </tr>
</table>

<br><br><br>

<h3>Data Pemasukan SPP Tahun <?php $cetak_date =date("Y"); echo $cetak_date;?></h3>    
<table border="1" cellpadding="5"> 
	<tr>    
	<th>NO</th>
	<th>Nama</th>
	<th>Bulan</th>
    <th>Tanggal Pemasukan</th>
    <th>Jumlah</th>    
	</tr>  
	<?php
	$query = mysqli_query($koneksi,"SELECT * FROM siswa INNER JOIN pemasukanspp ON siswa.id_siswa = pemasukanspp.id_siswa");
    $no =1;
                      
    while ($data = mysqli_fetch_assoc($query)) 
    {
    ?>

                    <th scope="row">
                      <?=$no++?>
                    </th>
                    <td>
                      <?=$data['nama']?>
                    </td>

                    <td>
                      <?=$data['bulan']?>
                    </td>

                     <td align="left">
                      <?php
                      $tgl_pemasukan= $data["tgl_pemasukan"];
                      ?>
                      <?php echo date("d-m-Y", strtotime($tgl_pemasukan)); ?>
                    </td>
                    
                    <td>
                      Rp. <?=number_format($data ['jumlah'],2,',','.');?>
                    </td>
                </tr>
                <?php
                               
                }
                ?>

                <tr>    
                          <?php  
            // fungsi query untuk menampilkan data dari tabel obat
            $query = mysqli_query($koneksi, "SELECT sum(jumlah) as totalspp FROM pemasukanspp");  
            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
                         
                    
                    <td colspan="4" align="center">
                      Total
                    </td>
                    
                    <td>
                      Rp. <?=number_format($data['totalspp'],2,',','.');?>
                    </td>
                    
                  </tr>
</table>



