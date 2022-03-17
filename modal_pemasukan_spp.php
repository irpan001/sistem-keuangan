
<!-- hapus -->
<div id="myModalHapusPemasukanspp<?php echo $data['id_pemasukanspp']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Hapus Data Pemasukan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_pemasukan_spp.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id_pemasukanspp']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM pemasukanspp WHERE id_pemasukanspp='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_pemasukanspp" value="<?php echo $row['id_pemasukanspp']; ?>">

          <div class="form-group">
             <h3>Apakah anda yakin ingin menghapus data ini?</h3>     
          </div>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        
        <a href="hapus_pemasukan_spp.php?id_pemasukanspp=<?=$row['id_pemasukanspp'];?>" class="btn btn-danger">Hapus</a>
    </form>
          <button type="button" class="btn btn-success" data-dismiss="modal">Keluar</button>
        </div>
        <?php 
               }
//mysql_close($host);
        ?>
      </div>

    </div>
</div>


<!-- edit -->
<div id="myModalEditPemasukanspp<?php echo $data['id_siswa']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">             
          <h4 class="modal-title">Edit Data Pemasukan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
           
          

       
        <!-- body modal -->
    <form action="edit_pemasukan_spp.php" method="get">
        <div class="text-left modal-body">
          <?php
            $id_siswa = $data['id_siswa']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id_siswa='$id_siswa'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
           <div class="form-group">
             <label>Nama </label>            
             <input type="text" class="form-control" disabled="" value="<?php echo $row['nama']; ?>">  
          </div>

          <?php
            $id = $data['id_pemasukanspp']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM pemasukanspp WHERE id_pemasukanspp='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_pemasukanspp" value="<?php echo $row['id_pemasukanspp']; ?>">

          <div class="form-group">
            <label for="bulan">bulan</label>
             <select name="bulan" class="form-control" id="bulan">
              <option><?php echo $row['bulan']; ?></option>
              <option value="Januari">Januari</option>
              <option value="Februari">Februari</option>
              <option value="Maret">Maret</option>
              <option value="April">April</option>
              <option value="Mei">Mei</option>
              <option value="Juni">Juni</option>
              <option value="Juli">Juli</option>
              <option value="Agustus">Agustus</option>
              <option value="September">September</option>
              <option value="Oktober">Oktober</option>
              <option value="November">November</option>
              <option value="Desember">Desember</option>
             </select>   
          </div>
           
          <div class="form-group">
             <label>Jumlah</label>
             <input type="text" name="jumlah" class="form-control" value="<?php echo $row['jumlah']; ?>">      
          </div>
           
          <div class="form-group">
             <label>Tanggal Bayar</label>
             <input type="date" name="tgl_pemasukan" class="form-control" value="<?php echo $row['tgl_pemasukan']; ?>">      
          </div>
         
         
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Simpan</button>
        
    </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        </div>
        <?php 
               }
               }
//mysql_close($host);
        ?>
      </div>

    </div>
</div>

</div>    






