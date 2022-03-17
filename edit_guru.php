<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_guru'];
$nama = $_GET['nama'];
$nip = $_GET['nip'];
$tempat_lahir = $_GET['tempat_lahir'];
$tgl_lahir = $_GET['tgl_lahir'];
$jabatan = $_GET['jabatan'];





//query update
$query = mysqli_query($koneksi,"UPDATE guru SET nama='$nama', nip='$nip', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir' , jabatan='$jabatan' WHERE id_guru='$id' ");

if ($query) {
 # credirect ke page index
 header("location:data_guru.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>