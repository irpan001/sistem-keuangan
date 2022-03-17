<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_guru'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `guru` WHERE id_guru = '$id'");

if ($query) {
 # credirect ke page index
 header("location:data_guru.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>