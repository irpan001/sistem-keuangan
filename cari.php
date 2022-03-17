<?php
  require 'koneksi.php';
  if(ISSET($_POST['search'])){
?>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    
                  </tr>
                </thead>
                <tbody class="list">
                
                      <?php
                         $keyword = $_POST['keyword'];
                         
                         $query = mysqli_query($koneksi,"SELECT * FROM `siswa` WHERE `nama` LIKE '%$keyword%' or `kelas` LIKE '%$keyword%'") or die(mysqli_error());
                        
                         $count = mysqli_num_rows($query);
                         if($count > 0){
                         while ($data = mysqli_fetch_assoc($query)) 
                         {
                      ?>

                  <tr>
                    
                    <td>
                      Nama
                    </td>
                    <td data-toggle="tooltip" data-original-title="Kelas <?=$data['kelas']?>"> 
                       <?=$data['nama']?>
                    
                    </td> 
                  </tr>

                  <tr>
                  
                  <tr>
                   
                    <td>
                      Awal Tahun A
                    </td>
                    <td> 
                      <?php
                        $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawal FROM pemasukanawal WHERE id_siswa='$data[id_siswa]'"); 
                        $masuk = mysqli_fetch_assoc($querymasuk);  

                        $queryrincianawal = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawal FROM rincianawal"); 
                        $rincianawal = mysqli_fetch_assoc($queryrincianawal);
                        
                        $persen1['persen1'] = $masuk['totalawal'] / $rincianawal['totalrawal'] * 100;
                      ?>
                       
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-original-title="Rp <?=number_format($masuk['totalawal'],2,',','.');?>">
                        <span class="mr-2"><?=number_format($persen1['persen1'],1);?>%</span>
                        <div>
                          <a href="detail_pemasukan_awal.php?id_siswa=<?php echo $data["id_siswa"]; ?>">
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="<?=number_format($persen1['persen1'],1);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=number_format($persen1['persen1'],1);?>%;"></div>
                          </div>
                          </a>
                        </div>
                      </div>
                    </td>  
                  </tr>

                  <tr>
                    <td>
                      Awal Tahun B
                    </td>
                    <td> 
                      <?php
                        $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalawalb FROM pemasukanawalb WHERE id_siswa='$data[id_siswa]'"); 
                        $masukb = mysqli_fetch_assoc($querymasuk);  

                        $queryrincianawalb = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrawalb FROM rincianawalb"); 
                        $rincianawalb = mysqli_fetch_assoc($queryrincianawalb);
                        
                        $persen1['persen1'] = $masukb['totalawalb'] / $rincianawalb['totalrawalb'] * 100;
                      ?>
                       
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-original-title="Rp <?=number_format($masukb['totalawalb'],2,',','.');?>">
                        <span class="mr-2"><?=number_format($persen1['persen1'],1);?>%</span>
                        <div>
                          <a href="detail_pemasukan_awalb.php?id_siswa=<?php echo $data["id_siswa"]; ?>">
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="<?=number_format($persen1['persen1'],1);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=number_format($persen1['persen1'],1);?>%;"></div>
                          </div>
                          </a>
                        </div>
                      </div>
                    </td>  
                  </tr>
                   
                    
                   
                  <tr>  
                    <td>
                      SPP
                    </td>
                    <td>
                      <?php
                        $querymasuk = mysqli_query($koneksi, "SELECT sum(jumlah) as totalspp FROM pemasukanspp WHERE id_siswa='$data[id_siswa]'"); 
                        $masuk = mysqli_fetch_assoc($querymasuk);  

                        $queryrincianspp = mysqli_query($koneksi, "SELECT sum(jumlah) as totalrspp FROM rincianspp"); 
                        $rincianspp = mysqli_fetch_assoc($queryrincianspp);
                        
                        $persen['persen'] = $masuk['totalspp'] / ($rincianspp['totalrspp']*12) * 100;
                      ?>  
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-original-title="Rp <?=number_format($masuk['totalspp'],2,',','.');?>">
                        <span class="mr-2"><?=number_format($persen['persen'],1);?>%</span>
                        <div>
                          <a href="detail_pemasukan_spp.php?id_siswa=<?php echo $data["id_siswa"]; ?>">
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="<?=number_format($persen['persen'],1);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=number_format($persen['persen'],1);?>%;"></div>
                          </div>
                          </a>
                        </div>
                      </div>
                    </td>  
                  </tr> 

                   <tr>
                    
                    <td>
                      <a href="cetak.php?id_siswa=<?php echo $data["id_siswa"]; ?>"  target="blank" class="btn btn-sm btn-primary">cetak</a>
                    </td>
                    <td> 
                      
                    </td> 
                  </tr>


                                  <?php
                                     }
                                     }else{
                                     echo "<tr><td colspan='3' class='text-danger'><center>Upss data tidak ditemukan</center></td></tr>";
                                     }
                                  ?>

                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <a href="dashboard.php" class="btn btn-sm btn-primary">Refresh</a>
  </div>



<?php   
  }else{


?>
     
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    
                  </tr>
                </thead>
                <tbody class="list">
                


                  <tr>
                    
                    <td>
                  
                    </td>
                    <td> 
                  
                    </td> 
                  </tr>

                  <tr>
                  
                  <tr>
                   
                    <td>
                    
                    </td>
                    <td> 
                      
                    </td>  
                  </tr>
                    
                  <tr>
                   
                    <td>
                    
                    </td>
                    <td> 
                      
                    </td>  
                  </tr>

                  <tr>
                   
                    <td>
                    
                    </td>
                    <td> 
                      
                    </td>  
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php   
  }


?>
