<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
$koneksi = mysqli_connect("localhost","root","","sistemkeuangan1");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$pass = $_POST['pass'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from siswa where username='$username' and pass='$pass'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){


	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai siswa
	if($data['level']=="siswa"){

		// buat session login dan username
		$_SESSION['id_siswa'] = $data['id_siswa'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['level'] = $data['level'];
		$_SESSION['nis'] = $data['nis'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['kelas'] = $data['kelas'];
		$_SESSION['tgl_lahir'] = $data['tgl_lahir'];
		$_SESSION['tempat_lahir'] = $data['email'];
		$_SESSION['j_kelamin'] = $data['j_kelamin'];
		$_SESSION['ibu'] = $data['ibu'];
		$_SESSION['ayah'] = $data['ayah'];
		// alihkan ke halaman dashboard siswa
		header("location:ortu_dashboard.php");
	}else{


		// alihkan ke halaman login kembali
		header("location:ortu.php?pesan=gagal");
	}	
}else{
	header("location:ortu.php?pesan=gagal");
}

?>