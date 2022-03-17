<?php
//include('dbconnected.php');
include('koneksi.php');

$keterangan = $_GET['keterangan'];
$jumlah = $_GET['jumlah'];
$tgl_lainnya = $_GET['tgl_lainnya'];

$query = mysqli_query($koneksi,"INSERT INTO `lainnya` (`id_lainnya`, `keterangan`, `jumlah`, `tgl_lainnya`) VALUES (null, '$keterangan', '$jumlah', '$tgl_lainnya')");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_lainnya.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>