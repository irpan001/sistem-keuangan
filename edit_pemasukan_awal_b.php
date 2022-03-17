<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_pemasukanawalb'];
$jumlah = $_GET['jumlah'];
$tgl_pemasukan = $_GET['tgl_pemasukan'];





//query update
$query = mysqli_query($koneksi,"UPDATE pemasukanawalb SET jumlah='$jumlah', tgl_pemasukan='$tgl_pemasukan' WHERE id_pemasukanawalb='$id' ");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_awal_b.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>