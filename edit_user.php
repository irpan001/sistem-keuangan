<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id'];
$nama = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['password'];





//query update
$query = mysqli_query($koneksi,"UPDATE user SET nama='$nama', username='$username', password='$password' WHERE id='$id' ");

if ($query) {
 # credirect ke page index
 header("location:dashboard.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

//mysql_close($host);
?>