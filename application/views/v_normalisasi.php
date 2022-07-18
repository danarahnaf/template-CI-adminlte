
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
            <h1>Normalisasi Gaji BPJS Kesehatan</h1>
          </div>
          <div class="col-sm-2">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                      Tambah
                    </button>
                  </div>
                  <div class="col-sm-6">
                    <div class="dropdown">
                     <!--  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Tahun
                      </button> -->
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                
                <form id="frm-table">
                  <br>
                  <table id="tableNormal" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>grade</th>
                    <th>normal gaji</th>
                    <th>divisi</th>
                    <th>Tahun</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if (is_array($normal) || is_object($normal))
                        {
                            foreach ($normal as $normalisasi) {                       
                     ?>
                  <tr>
                    
                    <td><?= $normalisasi['id']?></td>
                    <td><?= $normalisasi['grade']?></td>
                    <td><?= "Rp ". number_format($normalisasi['normal_gaji'],0,',','.'); ?></td>
                    <td><?= $normalisasi['DIVISI']?></td>
                    <td><?= $normalisasi['tahun']?></td>
                    <td>
                      <div class="row"></div>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $normalisasi['id'];  ?>">edit</button>
                      <button class="btn btn-danger" >hapus</button>
                    </td>
                  </tr>
                  <?php 
                     // code...
                        }
                      }
                   ?>
                  </tbody>
                  
                </table>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!--       -->
  <form action="" method="post">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                
                <div class="col-sm-4">
                  <label>Status</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="status">
                </div>
                <div class="col-sm-4">
                  <label>Keterangan</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="ket">
                </div>
                <div class="col-sm-4">
                  <label>PTKP</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="nilai">
                </div>
                <div class="col-sm-4">
                  <label>Tahun</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="tahun">
                </div>
                <div class="col-sm-4">
                  <label>Valid</label>
                </div>
                <div class="col-sm-8">
                  <input type="checkbox" name="valid" value="1" checked/>
                </div>
              </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  </form>
  

      <!-- modal edit -->
      <?php $no = 0;
              if (is_array($normal) || is_object($normal))
                  {
                    foreach($normal as $n) : $no++ ?>
        <div class="modal" id="modal-edit<?php echo $n['id']; ?>">
        <form action="<?php echo base_url('normalisasi/ubah') ?>" method="post">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div></div>
                <div class="col-sm-4">
                  <label>ID</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="id" value="<?php echo $n['id']; ?>" disabled>
                </div>
                <div class="col-sm-4">
                  <label>Grade</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="grade" value="<?php echo $n['grade']; ?>">
                </div>
                <div class="col-sm-4">
                  <label>normal gaji</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="normal_gaji" value="<?php echo $n['normal_gaji']; ?>">
                </div>
                <div class="col-sm-4">
                  <label>DIVISI</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="divisi" value="<?php echo $n['DIVISI']; ?>">
                </div>
                <div class="col-sm-4">
                  <label>tahun</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="tahun" value="<?php echo $n['tahun']; ?>">
                </div>
              </div>              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning">Edit</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </form>
        </div>
        <?php
                endforeach; 
              } ?>
        <script type="text/javascript">
          $(document).ready(function(){
              $("#tableNormal").DataTable();

          });
        </script>
    