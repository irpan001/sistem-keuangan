<?php
//include('dbconnected.php');
include('koneksi.php');

$bulan = $_GET['bulan'];
$jumlah = $_GET['jumlah'];
//query update
$query = mysqli_query($koneksi,"INSERT INTO `rincianspp` (`id_spp`, `bulan`, `jumlah`) VALUES (null, '$bulan', '$jumlah')");

if ($query) {
 # credirect ke page index
 header("location:rincian_spp.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>