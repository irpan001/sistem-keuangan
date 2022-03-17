<?php 
$koneksi = mysqli_connect("localhost", "root", "", "sistemkeuangan1");

function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($data = mysqli_fetch_assoc($result)) {
		$rows[] = $data;
	}
	return $rows;
}