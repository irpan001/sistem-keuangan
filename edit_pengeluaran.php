<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_pengeluaran'];
$keterangan = $_GET['keterangan'];
$jumlah = $_GET['jumlah'];
$tgl_pengeluaran = $_GET['tgl_pengeluaran'];





//query update
$query = mysqli_query($koneksi,"UPDATE pengeluaran SET keterangan='$keterangan', jumlah='$jumlah', tgl_pengeluaran='$tgl_pengeluaran' WHERE id_pengeluaran='$id' ");

if ($query) {
 # credirect ke page index
 header("location:pengeluaran.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>