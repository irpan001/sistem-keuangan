<?php
//include('dbconnected.php');
include('koneksi.php');

$nama = $_GET['nama'];
$nis = $_GET['nis'];
$ayah = $_GET['ayah'];
$ibu = $_GET['ibu'];
$tgl_lahir = $_GET['tgl_lahir'];
$tempat_lahir = $_GET['tempat_lahir'];
$kelas = $_GET['kelas'];
$j_kelamin = $_GET['j_kelamin'];
$username = $_GET['username'];
$pass = $_GET['pass'];



//query update
$query = mysqli_query($koneksi,"INSERT INTO `siswa` (`id_siswa`, `nama`, `nis`, `ibu`, `ayah`, `tempat_lahir`, `tgl_lahir`, `kelas`, `j_kelamin`, `username`, `pass`, `level`) VALUES (null, '$nama', '$nis', '$ibu', '$ayah','$tempat_lahir', '$tgl_lahir', '$kelas', '$j_kelamin', '$username', '$pass', 'siswa')");

if ($query) {
 # credirect ke page index
 header("location:data_siswa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>