<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_pemasukanawal'];
$jumlah = $_GET['jumlah'];
$tgl_pemasukan = $_GET['tgl_pemasukan'];





//query update
$query = mysqli_query($koneksi,"UPDATE pemasukanawal SET jumlah='$jumlah', tgl_pemasukan='$tgl_pemasukan' WHERE id_pemasukanawal='$id' ");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_awal.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>