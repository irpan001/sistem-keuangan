<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_lainnya'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `lainnya` WHERE id_lainnya = '$id'");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_lainnya.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>