<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_siswa'];
$nama = $_GET['nama'];
$nis = $_GET['nis'];
$ibu = $_GET['ibu'];
$ayah = $_GET['ayah'];
$tgl_lahir = $_GET['tgl_lahir'];
$tempat_lahir = $_GET['tempat_lahir'];
$kelas = $_GET['kelas'];
$j_kelamin = $_GET['j_kelamin'];
$username = $_GET['username'];
$pass = $_GET['pass'];




//query update
$query = mysqli_query($koneksi,"UPDATE siswa SET nama='$nama', nis='$nis', ibu='$ibu', ayah='$ayah', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', kelas='$kelas', j_kelamin='$j_kelamin', username='$username', pass='$pass', level='siswa' WHERE id_siswa='$id' ");

if ($query) {
 # credirect ke page index
 header("location:data_siswa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>