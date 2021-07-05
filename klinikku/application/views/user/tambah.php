<section class="content-header">
    <h1>
        TAMBAH DATA USER
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
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">

                <!-- form start -->
                <form action="<?php echo base_url(); ?>index.php/user/tambah" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">No.Telp</label>
                            <div class="col-sm-10">
                                <input type="number" name="notelp" class="form-control" placeholder="No.Telp" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control" placeholder="username" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="password" class="form-control" placeholder="password" required>
                            </div>
                        </div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="level">Level User</label>
							<div class="col-sm-10">
								<select name="level" id="level" class ="form-control" required>
									<option value="administrator"> Administrator</option>
									<option value="default"> User</option>
								</select>
                            </div>
						</div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <?php
                        echo anchor('user', 'cancel', array('class' => 'btn btn-default'));
                        ?>
                        <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>

                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->