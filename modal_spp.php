
<!-- edit -->
<div id="myModalEditspp<?php echo $data['id_spp']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Data Rincian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_spp.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id_spp']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM rincianspp WHERE id_spp='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_spp" value="<?php echo $row['id_spp']; ?>">
          
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





