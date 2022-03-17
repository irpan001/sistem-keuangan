<!-- edit -->
<div id="myModaledituser<?php echo $data['id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Data Admin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_user.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

       

          <div class="form-group">
             <label>Nama</label>
             <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">      
          </div>

           <div class="form-group">
             <label>Username</label>
             <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">      
          </div>

           <div class="form-group">
             <label>Password</label>
             <input type="text" name="password" class="form-control" value="<?php echo $row['password']; ?>">      
          </div>
         
         
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-success">Simpan</button>       
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

