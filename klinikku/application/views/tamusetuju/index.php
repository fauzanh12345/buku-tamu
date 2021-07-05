    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA TAMU YANG DI SETUJUI
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
					<th>Tujuan</th>
                    <th>Keperluan</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  foreach ($data->result_array() as $usr) :
                    $no++;
                    $nm = $usr['nama_pelanggan'];
					$tujuan = $usr['department_name'];
                    $keperluan = $usr['keperluan'];
                    $tanggal_kunjungan = $usr['tanggal_kunjungan'];
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $nm; ?></td>
					  <td><?php echo $tujuan; ?></td>
                      <td><?php echo $keperluan; ?></td>
                      <td><?php echo $tanggal_kunjungan; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>index.php/tamusetuju/delete/<?php echo $usr['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
                        <a href="<?php echo base_url(); ?>index.php/tamusetuju/detail/<?php echo $usr['id'] ?>" class="btn btn-xs btn-info">Verifikasi</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
      $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging': true,
          'lengthChange': false,
          'searching': false,
          'ordering': true,
          'info': true,
          'autoWidth': false
        })
      })
    </script>