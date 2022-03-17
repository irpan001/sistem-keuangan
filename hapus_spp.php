<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_spp'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `rincianspp` WHERE id_spp = '$id'");

if ($query) {
 # credirect ke page index
 header("location:rincian_spp.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>