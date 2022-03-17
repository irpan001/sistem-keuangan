
<!-- hapus -->
<div id="myModalHapusPemasukanawalb<?php echo $data['id_pemasukanawalb']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Hapus Data Pemasukan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_pemasukan_awal_b.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id_pemasukanawalb']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM pemasukanawalb WHERE id_pemasukanawalb='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_pemasukanawalb" value="<?php echo $row['id_pemasukanawalb']; ?>">

          <div class="form-group">
             <h3>Apakah anda yakin ingin menghapus data ini?</h3>     
          </div>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        
        <a href="hapus_pemasukan_awal_b.php?id_pemasukanawalb=<?=$row['id_pemasukanawalb'];?>" class="btn btn-danger">Hapus</a>
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
<div id="myModalEditPemasukanawalb<?php echo $data['id_siswa']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">             
          <h4 class="modal-title">Edit Data Pemasukan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
           
          

       
        <!-- body modal -->
    <form action="edit_pemasukan_awal_b.php" method="get">
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
            $id = $data['id_pemasukanawalb']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM pemasukanawalb WHERE id_pemasukanawalb='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_pemasukanawalb" value="<?php echo $row['id_pemasukanawalb']; ?>">

          
           
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






