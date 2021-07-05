<section class="sidebar">
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
	<li>
      <a href="<?php echo base_url(); ?>index.php/dashboard/">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
	<?php if($this->session->userdata('level') === 'administrator'): ?>
	<li>
      <a href="<?php echo base_url(); ?>index.php/user/">
        <i class="fa fa-calendar"></i> <span>User</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
	<?php endif; ?>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-wrench"></i> <span>Transaksi</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url(); ?>index.php/daftartamu/"><i class="fa fa-circle-o"></i> Tamu Yang Menunggu Persetujuan</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/tamusetuju/"><i class="fa fa-circle-o"></i> Tamu Yang Di Setujui</a></li>
		<li><a href="<?php echo base_url(); ?>index.php/tamutolak/"><i class="fa fa-circle-o"></i> Tamu Yang Di Tolak</a></li>
		<li><a href="<?php echo base_url(); ?>index.php/rktamu/"><i class="fa fa-circle-o"></i> Realisasi Kunjungan Tamu</a></li>
      </ul>
    </li>
  </ul>
</section>