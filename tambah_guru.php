<?php
//include('dbconnected.php');
include('koneksi.php');

$nama = $_GET['nama'];
$nip = $_GET['nip'];
$tgl_lahir = $_GET['tgl_lahir'];
$tempat_lahir = $_GET['tempat_lahir'];
$jabatan = $_GET['jabatan'];


//query update
$query = mysqli_query($koneksi,"INSERT INTO `guru` (`id_guru`, `nama`, `nip`, `jabatan`, `tgl_lahir`, `tempat_lahir`) VALUES (null, '$nama', '$nip', '$jabatan', '$tgl_lahir', '$tempat_lahir')");

if ($query) {
 # credirect ke page index
 header("location:data_guru.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>