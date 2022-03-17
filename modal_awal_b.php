

<!-- edit -->
<div id="myModalEditawalb<?php echo $data['id_awalb']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Data Rincian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_awal_b.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id_awalb']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM rincianawalb WHERE id_awalb='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_awalb" value="<?php echo $row['id_awalb']; ?>">

          <div class="form-group">
             <label>keterangan</label>
             <input type="text" name="keterangan" class="form-control" value="<?php echo $row['keterangan']; ?>">      
          </div>
          <div class="form-group">
             <label>Jumlah</label>
             <input type="text" name="jumlah" class="form-control" value="<?php echo $row['jumlah']; ?>">      
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
<div id="myModalHapusawalb<?php echo $data['id_awalb']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Hapus Data Rincian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_awal_b.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id_awalb']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM rincianawalb WHERE id_awalb='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_awalb" value="<?php echo $row['id_awalb']; ?>">

          <div class="form-group">
             <h3>Apakah anda yakin ingin menghapus data ini?</h3>     
          </div>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        
        <a href="hapus_awal_b.php?id_awalb=<?=$row['id_awalb'];?>" class="btn btn-danger">Hapus</a>
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




