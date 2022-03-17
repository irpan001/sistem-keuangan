<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_pemasukanspp'];
$jumlah = $_GET['jumlah'];
$bulan = $_GET['bulan'];
$tgl_pemasukan = $_GET['tgl_pemasukan'];





//query update
$query = mysqli_query($koneksi,"UPDATE pemasukanspp SET jumlah='$jumlah', bulan='$bulan', tgl_pemasukan='$tgl_pemasukan' WHERE id_pemasukanspp='$id' ");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_spp.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>