<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_lainnya'];
$keterangan = $_GET['keterangan'];
$jumlah = $_GET['jumlah'];
$tgl_lainnya = $_GET['tgl_lainnya'];





//query update
$query = mysqli_query($koneksi,"UPDATE lainnya SET keterangan='$keterangan', jumlah='$jumlah', tgl_lainnya='$tgl_lainnya' WHERE id_lainnya='$id' ");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_lainnya.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>