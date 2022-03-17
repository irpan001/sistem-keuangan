<?php
//include('dbconnected.php');
include('koneksi.php');



//query update
$query = mysqli_query($koneksi,"DELETE FROM `pemasukanspp`");

if ($query) {
 # credirect ke page index
 header("location:pemasukan_spp.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>