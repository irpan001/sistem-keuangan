

<!-- edit -->
<div id="myModalEditguru<?php echo $data['id_guru']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Data Guru</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_guru.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id_guru']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM guru WHERE id_guru='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_guru" value="<?php echo $row['id_guru']; ?>">

          <div class="form-group">
             <label>Nama</label>
             <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">      
          </div>
          <div class="form-group">
             <label>NIP</label>
             <input type="text" name="nip" class="form-control" value="<?php echo $row['nip']; ?>">      
          </div>
          
          <div class="form-group">
             <label>Tempat Lahir</label>
             <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir']; ?>">      
          </div>
          <div class="form-group">
             <label>Tanggal Lahir</label>
             <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $row['tgl_lahir']; ?>">      
          </div>
          <div class="form-group">
             <label>Jabatan</label>
             <input type="text" name="jabatan" class="form-control" value="<?php echo $row['jabatan']; ?>">      
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
//mysql_close($host);
        ?>
      </div>

    </div>
</div>


<!-- hapus -->
<div id="myModalHapusguru<?php echo $data['id_guru']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Hapus Data Guru</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_guru.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id_guru']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM guru WHERE id_guru='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_guru" value="<?php echo $row['id_guru']; ?>">

          <div class="form-group">
             <h3>Apakah anda yakin ingin menghapus data ini?</h3>     
          </div>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        
        <a href="hapus_guru.php?id_guru=<?=$row['id_guru'];?>" class="btn btn-danger">Hapus</a>
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




