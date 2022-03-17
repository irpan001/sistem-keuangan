<?php
//include('dbconnected.php');
include('koneksi.php');



//query update
$query = mysqli_query($koneksi,"DELETE FROM `pengeluaran`");

if ($query) {
 # credirect ke page index
 header("location:pengeluaran.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>