<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_pemasukanspp'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `pemasukanspp` WHERE id_pemasukanspp = '$id'");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_spp.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>