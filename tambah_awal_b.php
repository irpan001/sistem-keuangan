<?php
//include('dbconnected.php');
include('koneksi.php');

$keterangan = $_GET['keterangan'];
$jumlah = $_GET['jumlah'];
//query update
$query = mysqli_query($koneksi,"INSERT INTO `rincianawalb` (`id_awalb`, `keterangan`, `jumlah`) VALUES (null, '$keterangan', '$jumlah')");

if ($query) {
 # credirect ke page index
 header("location:rincian_awal_b.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>