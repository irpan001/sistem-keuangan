<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_awalb'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `rincianawalb` WHERE id_awalb = '$id'");

if ($query) {
 # credirect ke page index
 header("location:rincian_awal_b.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>