    <?php
    include "koneksi.php";
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data_Pengeluaran.xls");
  ?>

<h3>Data Pengeluaran Tahun <?php $cetak_date =date("Y"); echo $cetak_date;?></h3>    
<table border="1" cellpadding="5"> 
  <tr>    
  <th>No</th>
  <th>Keterangan</th>
  <th>Tanggal Pengeluran</th>
  <th>Jumlah</th>    
  </tr>  
  <?php
  $query = mysqli_query($koneksi,"SELECT * FROM pengeluaran");
    $no =1;
                      
    while ($data = mysqli_fetch_assoc($query)) 
    {
    ?>

                    <th scope="row">
                      <?=$no++?>
                    </th>
                    <td>
                      <?=$data['keterangan']?>
                    </td>

                     <td align="left">
                      <?php
                      $tgl_pemasukan= $data["tgl_pengeluaran"];
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
            $query = mysqli_query($koneksi, "SELECT sum(jumlah) as keluar FROM pengeluaran");  
            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
                         
                    
                    <td colspan="3" align="center">
                      Total
                    </td>
                    
                    <td>
                      Rp. <?=number_format($data['keluar'],2,',','.');?>
                    </td>
                    
                  </tr>
</table>
