<?php
//include('dbconnected.php');
include('koneksi.php');


$id_siswa = $_GET['id_siswa'];
$jumlah = $_GET['jumlah'];
$tgl_pemasukan = $_GET['tgl_pemasukan'];

$query = mysqli_query($koneksi,"INSERT INTO `pemasukanawalb` (`id_pemasukanawalb`, `id_siswa`, `jumlah`, `tgl_pemasukan`) VALUES (null, '$id_siswa','$jumlah', '$tgl_pemasukan')");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_awal_b.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>