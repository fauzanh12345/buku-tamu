<section class="content-header">
    <h1>
        DETAIL TAMU
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- right column -->
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Detail Realisasi Kunjungan <?php echo $row['nama_pelanggan']; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table">
					
					<tr>
                  <td><center>Nama Tamu</center></td>
                  <td><center><?php echo $row['nama_pelanggan'];?></center></td>
				</tr>
				<tr>
                  <td><center>Nomor KTP</center></td>
                  <td><center><?php echo $row['no_ktp'];?></center></td>
				</tr>
				<tr>
                  <td><center>Nomor Telepon</center></td>
                  <td><center><?php echo $row['no_telp'];?></center></td>
				</tr>
				<tr>
                  <td><center>Alamat Email</center></td>
                  <td><center><?php echo $row['alamat_email'];?></center></td>
				</tr>
				<tr>
				  <td><center>Tujuan</center></td>
                  <td><center><?php echo $row['department_name'];?></center></td>
				</tr>
				<tr>
				  <td><center>Keperluan</center></td>
                  <td><center><?php echo $row['keperluan'];?></center></td>
				</tr>
				<tr>
				  <td><center>Tanggal dan Waktu Kunjungan</center></td>
                  <td><center><?php echo $row['tanggal_kunjungan'];?></center></td>
                </tr>
				<tr>
				  <td><center>File Rapid Test</center></td>
                  <td><center><img src = <?php echo base_url()?><?php echo $row['file_loc'];?> width="400px" height="400px"></center></td>
                </tr>
                    </table>
                    <div class="box-footer">
                        <?php
                        echo anchor('rktamu', 'Kembali', array('class' => 'btn btn-default'));
                        ?>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->