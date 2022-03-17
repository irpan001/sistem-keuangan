<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_awalb'];
$keterangan = $_GET['keterangan'];
$jumlah = $_GET['jumlah'];




//query update
$query = mysqli_query($koneksi,"UPDATE rincianawalb SET keterangan='$keterangan', jumlah='$jumlah' WHERE id_awalb='$id' ");

if ($query) {
 # credirect ke page index
 header("location:rincian_awal_b.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>