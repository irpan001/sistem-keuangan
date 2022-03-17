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
            header("Content-Disposition: attachment; filename=Laporan Pengeluaran $tgl.xls");

      echo '<b>Laporan Pengeluaran Tanggal '.$tgl.'</b><br /><br />';

      $query = "SELECT * FROM pengeluaran WHERE DATE(tgl_pengeluaran)='".$_GET['tanggal']."'"; // Tampilkan data pengeluaran sesuai tanggal yang diinput oleh user pada filter
      $query1 = "SELECT sum(jumlah) as totalpengeluaran FROM pengeluaran WHERE DATE(tgl_pengeluaran)='".$_GET['tanggal']."'";
    }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
      $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
      $n_bulan = $nama_bulan[$_GET['bulan']];
      $n_tahun = $_GET['tahun'];

            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Pengeluaran $n_bulan $n_tahun.xls");
      echo '<b>Laporan Pengeluaran Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';

      $query = "SELECT * FROM pengeluaran WHERE MONTH(tgl_pengeluaran)='".$_GET['bulan']."' AND YEAR(tgl_pengeluaran)='".$_GET['tahun']."'"; // Tampilkan data pengeluaran sesuai bulan dan tahun yang diinput oleh user pada filter
      $query1 = "SELECT sum(jumlah) as totalpengeluaran FROM pengeluaran WHERE MONTH(tgl_pengeluaran)='".$_GET['bulan']."' AND YEAR(tgl_pengeluaran)='".$_GET['tahun']."'";

    }else{ // Jika filter nya 3 (per tahun)
      $n_tahun = $_GET['tahun'];
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Laporan Pengeluaran $n_tahun.xls");

      echo '<b>Laporan Pengeluaran '.$_GET['tahun'].'</b><br /><br />';
       

      $query = "SELECT * FROM pengeluaran WHERE YEAR(tgl_pengeluaran)='".$_GET['tahun']."'"; // Tampilkan data pengeluaran sesuai tahun yang diinput oleh user pada filter
      $query1 = "SELECT sum(jumlah) as totalpengeluaran FROM pengeluaran  WHERE YEAR(tgl_pengeluaran)='".$_GET['tahun']."'";
    }
  }else{ // Jika user tidak memilih filter
    header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Laporan Pengeluaran.xls");
    echo '<b>Laporan Pengeluaran</b><br /><br />';

    $query = "SELECT * FROM  pengeluaran ORDER BY tgl_pengeluaran"; // Tampilkan semua data pengeluaran diurutkan berdasarkan tanggal
    $query1 = "SELECT sum(jumlah) as totalpengeluaran FROM pengeluaran";
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
      $tgl = date('d-m-Y', strtotime($data['tgl_pengeluaran'])); // Ubah format tanggal jadi dd-mm-yyyy
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
      $totala = number_format($data['totalpengeluaran'],2,',','.');
      

      
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


