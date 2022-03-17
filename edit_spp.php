<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_spp'];
$jumlah = $_GET['jumlah'];




//query update
$query = mysqli_query($koneksi,"UPDATE rincianspp SET jumlah='$jumlah' WHERE id_spp='$id' ");

if ($query) {
 # credirect ke page index
 header("location:rincian_spp.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>