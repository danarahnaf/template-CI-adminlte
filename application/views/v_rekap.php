
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
            <h1>Master Karyawan</h1>
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
                  <div class="col-sm-4">
                    <form method="POST" action="<?php echo base_url().'karyawan/tampil' ?>">
                      <select class="form-select form-select-lg mb-3" id="divisi"  aria-label=".form-select-lg example" name="divisi">
                      <?php foreach ($divisi as $key) {
                       ?>
                       <option value="<?php echo $key['DIVISIONID']; ?>"><?php echo $key['DIVNAME']; ?></option>
                    <?php } ?>
                   </select>  
                    </form>
                  </div>
                  <div class="col-sm-4">
                    <select class="form-select form-select-lg mb-3" id="department" name="depart">                         
                   </select>
                  </div>
                   <div class="col-sm-4">
                     <button class="btn btn-primary" id="tampil" onclick="tampil()">submit</button>  
                   </div>
                             
                </div>
                
                <form id="frm-table">
                  <br>
                  <table id="table_karyawan" class="myTable table table-bordered table-hover table_karyawan">
                  <thead>
                  <tr>
                    <th>NIK</th>
                    <th>nama</th>
                    <th>status karyawan</th>
                    <th>status kawin</th>
                    <th>status aktif</th>
                    <th>grade</th>
                    <th>akhir kontrak</th>
                    <th>Action</th>
                  </tr>
                  </thead>
              <tbody id="tbody" class="body-data">
                    <!-- <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <div class="row"></div>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit">edit</button>
                      <button class="btn btn-danger" >hapus</button>
                    </td> -->
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
        <div class="modal fade" id="modal-edit">
        <form action="" method="post">
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
                  <input type="text" name="id" value="<?php echo $p->id ?>">
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
          </div>`
        </div>
        <!-- /.modal-dialog -->
        </form>
        </div>
        <script type="text/javascript">
          $(document).ready(function() {
             $tabel = $('#table_karyawan').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "lengthMenu": [
                  [10, 25, 50, "All"]
                ]
              });
            loaddivisi();  
            tabel.destroy();
          });


          function loaddivisi(){
            $("#divisi").change(function(){
              var getdivisi = $("#divisi").val();
              $.ajax({
                type : "POST",
                dataType : "JSON",
                url : "<?= base_url();?>karyawan/ambildatadivisi",
                data : {divisi : getdivisi},
                success : function(data){
                  console.log(data);
                  var html = "";
                  var i;
                  for (i = 0; i < data.length; i++) {
                    html += '<option value="'+data[i].ID+'">'+data[i].SUBDEPT+'</option>'
                  }
                  $("#department").html(html);
                  $("#department").show();
                }
              }); 
            });
          }

          function tampil(){
              var getdivisi = $("#divisi").val();
              var getdepart = $("#department").val();
              $.ajax({
                type : "POST",
                dataType : "JSON",
                url : "<?= base_url();?>karyawan/tampil",
                data : {divisi : getdivisi, depart : getdepart},
                success : function(data){
                  console.log(data);
                  var trHTML = '';
                  var i;
                  for (i = 0; i < data.length; i++) {
                    trHTML += '<tr><td>' 
                        + data[i].EMPLOYEEID + '</td><td>' 
                        + data[i].EMNAME + '</td><td>' 
                        + data[i].STSEM + '</td><td>'
                        + data[i].STSKAWIN + '</td><td>'
                        + data[i].FLAKTIF + '</td><td>'
                        + data[i].GRADEID + '</td><td>'
                        + data[i].EMEND + '</td><td>'
                        + '<div class="row"></div>' 
                        +'<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit">edit</button>'
                        +'<button class="btn btn-danger" >hapus</button>' + '</td></tr>';
                        $("#tbody").html(trHTML);
                  }      
                },  
                error: function() {
                    alert('Fail!');
                } 
              });
          }

          $('#table_karyawan').dataTable( {
            paging: false,
            searching: false
          });
        </script>
  </script>     