<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_awal'];
$keterangan = $_GET['keterangan'];
$jumlah = $_GET['jumlah'];




//query update
$query = mysqli_query($koneksi,"UPDATE rincianawal SET keterangan='$keterangan', jumlah='$jumlah' WHERE id_awal='$id' ");

if ($query) {
 # credirect ke page index
 header("location:rincian_awal.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>