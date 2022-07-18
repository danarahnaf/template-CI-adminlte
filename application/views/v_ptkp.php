
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <br>
    <div class="row">
      <div class="col-sm-3">
      <label>Periode</label>
    </div>
    <div class="col-sm-9">
      <input type="text" name="periode">      
    </div>
    </div>
    <br>
    
    <div class="row">
      <div class="col-sm-6"> 
        <button>Update</button>
    </div>
    <div class="col-sm-6">
        <button>Post</button>
    </div>  
    </div>
    
  </aside>
  <!-- /.control-sidebar -->

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
            <h1>PTKTP</h1>
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
                  <table id="tablePTKTP" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>PTKTP</th>
                    <th>Tahun</th>
                    <th>Valid</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                   
                      foreach ($hasil as $ptkp) {
                       
                     ?>
                  <tr>
                    
                    <td><?= $ptkp['id']?></td>
                    <td><?= $ptkp['status']?></td>
                    <td><?= $ptkp['ket']?></td>
                    <td><?= "Rp ". number_format($ptkp['ptkp'],0,',','.'); ?></td>
                    <td><?= $ptkp['tahun']?></td>
                    <td><input type="checkbox" name="" <?php if ($ptkp['valid'] == '1') {
                      echo 'checked';
                    } ?>></td>
                    <td>
                      <div class="row"></div>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit">edit</button>
                      <a class="btn btn-danger" href="<?php echo base_url()?>Ptkp/hapus/<?= $ptkp['id']; ?>">hapus</a>
                    </td>
                  </tr>
                  <?php 
                     // code...
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
  <form action="<?php echo base_url(). 'ptkp/tambah_ptkp' ?>" method="post">
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
      
        <form action="<?php echo base_url().'ptkp/update'; ?>" method="post">
        <div class="modal fade" id="modal-edit">
          <?php foreach($ptkp_edit as $p){ ?>
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
                <div class="col-sm-4">
                  <label>ID</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="id" value="">
                </div>
                <div class="col-sm-4">
                  <label>Status</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="text" value="">
                </div>
                <div class="col-sm-4">
                  <label>Keterangan</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="text" value="">
                </div>
                <div class="col-sm-4">
                  <label>PTKP</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="text" value="">
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
        <?php } ?>

        </div>
        </form>
      
      <script type="text/javascript">
        $(document).ready( function () {
            $('#tablePTKTP').DataTable();
        });
      </script>