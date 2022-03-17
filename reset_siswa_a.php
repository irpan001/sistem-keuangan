<?php
//include('dbconnected.php');
include('koneksi.php');



//query update
$query = mysqli_query($koneksi,"DELETE * FROM `siswa` WHERE kelas='A'");

if ($query) {
 # credirect ke page index
 header("location:data_siswa_a.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>