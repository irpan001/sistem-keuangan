<?php
//include('dbconnected.php');
include('koneksi.php');

$keterangan = $_GET['keterangan'];
$jumlah = $_GET['jumlah'];
$tgl_pengeluaran = $_GET['tgl_pengeluaran'];

$query = mysqli_query($koneksi,"INSERT INTO `pengeluaran` (`id_pengeluaran`, `keterangan`, `jumlah`, `tgl_pengeluaran`) VALUES (null, '$keterangan', '$jumlah', '$tgl_pengeluaran')");

if ($query) {
 # credirect ke page index
 header("location:pengeluaran.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>