
<!-- edit -->
<div id="myModalEditSiswa<?php echo $data['id_siswa']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Siswa</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_siswa.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id_siswa']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id_siswa='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']; ?>">

          <div class="row">
          <div class="form-group col-lg-6">
             <label>Nama</label>
             <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">      
          </div>
          
          <div class="form-group col-lg-6">
             <label>NIS</label>
             <input type="text" name="nis" class="form-control" value="<?php echo $row['nis']; ?>">      
          </div>
          </div>

          <div class="row">
          <div class="form-group col-lg-6">
             <label>Nama Ibu</label>
             <input type="text" name="ibu" class="form-control" value="<?php echo $row['ibu']; ?>">      
          </div>

          <div class="form-group col-lg-6">
             <label>Nama Ayah</label>
             <input type="text" name="ayah" class="form-control" value="<?php echo $row['ayah']; ?>">      
          </div>
          </div>

          <div class="row"> 
          <div class="form-group col-lg-6">
             <label>Tempat Lahir</label>
             <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir']; ?>">      
          </div>

          <div class="form-group col-lg-6">
             <label>Tanggal Lahir</label>
             <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $row['tgl_lahir']; ?>">      
          </div>
          </div>

          <div class="row"> 
          <div class="form-group col-lg-6">
              <label for="kelas">Kelas</label>
               <select name="kelas" class="form-control" id="kelas">
               <option><?php echo $row['kelas']; ?></option>
               <option value="A">Kelas A</option>
               <option value="B">kelas B</option>
              </select> 
          </div>

          <div class="form-group col-lg-6">
              <label for="j_kelamin">Jenis Kelamin</label>
               <select name="j_kelamin" class="form-control" id="j_kelamin">
               <option><?php echo $row['j_kelamin']; ?></option>
               <option value="Laki-laki">Laki-laki</option>
               <option value="Perempuan">Perempuan</option>
              </select> 
          </div>
          </div>

          <div class="row">
          <div class="form-group col-lg-6">
             <label>Username</label>
             <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">      
          </div>
          
          <div class="form-group col-lg-6">
             <label>Password</label>
             <input type="text" name="pass" class="form-control" value="<?php echo $row['pass']; ?>">      
          </div>
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
<div id="myModalHapusSiswa<?php echo $data['id_siswa']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal tambah data-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Hapus Data Siswa</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
    <form action="edit_siswa.php" method="get">
        <div class="text-left modal-body">

          <?php
            $id = $data['id_siswa']; 
            $query_edit = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id_siswa='$id'");
            //$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
          <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']; ?>">

          <div class="form-group">
             <h3>Apakah anda yakin ingin menghapus data ini?</h3>     
          </div>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        
        <a href="hapus_siswa.php?id_siswa=<?=$row['id_siswa'];?>" class="btn btn-danger">Hapus</a>
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




