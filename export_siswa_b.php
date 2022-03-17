    <?php
    include "koneksi.php";
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Siswa_Kelas_B.xls");
	?>

<h3>Data Siswa TK MERPATI BANJARSARI Tahun <?php $cetak_date =date("Y"); echo $cetak_date;?></h3>   
<h3>Kelas B</h3> 
<table border="1" cellpadding="5"> 
	<tr>    
	<th>NO</th>
	<th>Nama</th>
  <th>NIS</th>
  <th>Tempat, Tanggal Lahir</th> 
  <th>Orang Tua</th>
  <th>Jenis Kelamin</th>    
	</tr>  
	<?php
	$query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE kelas='B'");
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
                      <?=$data['nis']?>
                    </td>

                     <td>
                      <?php
                      $tgl_lahir= $data["tgl_lahir"];
                      ?>
                       <?=$data['tempat_lahir']?>, <?php echo date("d-m-Y", strtotime($tgl_lahir)); ?>
                    </td>
                    
                    <td>
                      <?=$data['ibu']?> / <?=$data['ayah']?>
                    </td>

                

                    <td>
                      <?=$data['j_kelamin']?>
                    </td>
                </tr>
                <?php
                               
                }
                ?>

       
          
</table>


