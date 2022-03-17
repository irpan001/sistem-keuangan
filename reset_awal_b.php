<?php
//include('dbconnected.php');
include('koneksi.php');



//query update
$query = mysqli_query($koneksi,"DELETE FROM `pemasukanawalb`");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_awal_b.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>