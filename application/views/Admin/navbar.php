<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?php echo base_url()?>Home" class="site_title"><span>Majoo Teknologi Indonesia</span></a>
    </div>
    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?php echo base_url('Gambar/admin.png') ?>" class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?php echo $this->session->userdata("nama");?></h2>
      </div>
    </div><br/>
    <!-- /menu profile quick info -->

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a href="<?php echo base_url();?>Product"><i class="fa fa-desktop"></i> Product</a>
          <li><a href="<?php echo base_url();?>Pemesanan"><i class="fa fa-wpforms"></i> Data Pemesanan </a></li>
        </ul>
      </div>
    </div>
  </div>
</div>