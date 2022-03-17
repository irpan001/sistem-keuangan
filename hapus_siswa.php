<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_siswa'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `siswa` WHERE id_siswa = '$id'");

if ($query) {
 # credirect ke page index
 header("location:data_siswa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>