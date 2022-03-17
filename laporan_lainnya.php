<?php ob_start(); ?>
<html>
<head>
	<title></title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;width: 630px;
		}
		table td {
			word-wrap:break-word;
			width: 20%;
		}
	</style>
</head>
<body>
	<?php
	// Load file koneksi.php
	include "koneksi.php";

	

	if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter
		$filter = $_GET['filter']; // Ambil data filder yang dipilih user

		if($filter == '1'){ // Jika filter nya 1 (per tanggal)
			$tgl = date('d-m-y', strtotime($_GET['tanggal']));
			header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Pemasukan Lainnya $tgl.xls");

			echo '<b>Laporan Pemasukan Lainnya Tanggal '.$tgl.'</b><br /><br />';

			$query = "SELECT * FROM lainnya WHERE DATE(tgl_lainnya)='".$_GET['tanggal']."'"; // Tampilkan data lainnya sesuai tanggal yang diinput oleh user pada filter
			$query1 = "SELECT sum(jumlah) as totallainnya FROM lainnya WHERE DATE(tgl_lainnya)='".$_GET['tanggal']."'";
		}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
			$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
			$n_bulan = $nama_bulan[$_GET['bulan']];
			$n_tahun = $_GET['tahun'];

            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Pemasukan Lainnya $n_bulan $n_tahun.xls");
			echo '<b>Laporan Pemasukan Lainnya Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';

			$query = "SELECT * FROM lainnya WHERE MONTH(tgl_lainnya)='".$_GET['bulan']."' AND YEAR(tgl_lainnya)='".$_GET['tahun']."'"; // Tampilkan data lainnya sesuai bulan dan tahun yang diinput oleh user pada filter
			$query1 = "SELECT sum(jumlah) as totallainnya FROM lainnya WHERE MONTH(tgl_lainnya)='".$_GET['bulan']."' AND YEAR(tgl_lainnya)='".$_GET['tahun']."'";

		}else{ // Jika filter nya 3 (per tahun)
			$n_tahun = $_GET['tahun'];
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Pemasukan Lainnya $n_tahun.xls");

			echo '<b>Laporan Pemasukan Lainnya '.$_GET['tahun'].'</b><br /><br />';
       

			$query = "SELECT * FROM lainnya WHERE YEAR(tgl_lainnya)='".$_GET['tahun']."'"; // Tampilkan data lainnya sesuai tahun yang diinput oleh user pada filter
			$query1 = "SELECT sum(jumlah) as totallainnya FROM lainnya  WHERE YEAR(tgl_lainnya)='".$_GET['tahun']."'";
		}
	}else{ // Jika user tidak memilih filter
		header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Laporan Pemasukan Lainnya.xls");
		echo '<b>Laporan Pemasukan Lainnya</b><br /><br />';

		$query = "SELECT * FROM  lainnya ORDER BY tgl_lainnya"; // Tampilkan semua data lainnya diurutkan berdasarkan tanggal
		$query1 = "SELECT sum(jumlah) as totallainnya FROM lainnya";
	}
	?>
	<table border="1" cellpadding="8">
	<tr>
		<th>NO</th>
		<th>KETERANGAN</th>
		<th>TANGGAL</th>
		<th>JUMLAH</th>
	</tr>

	<?php
	$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
	$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
	$no=1;


	if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
			$tgl = date('d-m-Y', strtotime($data['tgl_lainnya'])); // Ubah format tanggal jadi dd-mm-yyyy
			$jumlah = number_format($data['jumlah'],2,',','.');
			

			echo "<tr>";
			echo "<td align=left>".$no."</td>";
			echo "<td>".$data['keterangan']."</td>";			
			echo "<td align=left>".$tgl."</td>";
			echo "<td>Rp. ".$jumlah."</td>";
			echo "</tr>";
			$no++;
			
		}
	}else{ // Jika data tidak ada
		echo "<tr><td colspan='4' align=center>Data tidak ada</td></tr>";
	}
	?>

	<?php
	$sql1 = mysqli_query($koneksi, $query1); // Eksekusi/Jalankan query dari variabel $query
	$row1 = mysqli_num_rows($sql1); // Ambil jumlah data dari hasil eksekusi $sql
	$no=1;


	if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
		while($data = mysqli_fetch_array($sql1)){ // Ambil semua data dari hasil eksekusi $sql
			$totala = number_format($data['totallainnya'],2,',','.');
			

			
		    echo "<tr>";
			echo "<td colspan=3 align=center>Total</td>";
			echo "<td>Rp. ".$totala."</td>";			
			echo "</tr>";
		}		    
	}else{ // Jika data tidak ada
		echo "";
	}
	?>


	</table>
</body>
<script>

</script>
</html>


