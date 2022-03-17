<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_pemasukanawalb'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `pemasukanawalb` WHERE id_pemasukanawalb = '$id'");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_awal_b.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>