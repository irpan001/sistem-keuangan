<?php
//include('dbconnected.php');
include('koneksi.php');

$keterangan = $_GET['keterangan'];
$jumlah = $_GET['jumlah'];
//query update
$query = mysqli_query($koneksi,"INSERT INTO `rincianawal` (`id_awal`, `keterangan`, `jumlah`) VALUES (null, '$keterangan', '$jumlah')");

if ($query) {
 # credirect ke page index
 header("location:rincian_awal.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>