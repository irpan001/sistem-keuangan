<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_awal'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `rincianawal` WHERE id_awal = '$id'");

if ($query) {
 # credirect ke page index
 header("location:rincian_awal.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>