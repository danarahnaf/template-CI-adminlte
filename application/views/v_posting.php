

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Posting</h5>
              </div>
              <div class="card-body">

                <h6 class="card-text">Periode : </h6>
                <input type="text" id="datepicker" name="" placeholder="contoh : <?php echo date("m/Y"); ?> ">
                <br><br>
                <div class="row">
                  <div class="col-sm-6">
                    <a href="#" class="btn btn-primary">Update</a>
                  </div>
                  <div class="col-sm-6">
                    <a href="#" class="btn btn-warning">Post</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <script type="text/javascript">
    var $j = jQuery.noConflict();
    $j('#datepicker').datepicker({ 
      dateFormat: 'dd-mm-yy' 
    })
  </script>

  