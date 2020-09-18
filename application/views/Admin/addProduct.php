<div class="right_col" role="main">
  <div class="row">
    <div class=" col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><span class="fa fa-list"></span> Tambah Product </h2>
          <div class="clearfix"></div>
        </div><br>
        <div class="col-sm-1"></div>
        <?php if ($this->session->flashdata('success')) {?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php  } elseif($this->session->flashdata('hapus')) {?>
          <!-- validation message to display after form is submitted -->
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('hapus'); ?> 
          </div>
        <?php } elseif($this->session->flashdata('error')) {?>
          <!-- validation message to display after form is submitted -->
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('error'); ?> 
          </div>
        <?php } ?>

        <div class="col-sm-10">
          <?php echo form_open_multipart("Product/simpanProduct"); ?>
          <div class="form-group row">
            <label for="nm_product" class="col-sm-3 col-form-label"> Nama Product </label>
            <div class="col-sm-8">
              <input type="text" name="nm_product" class="form-control" placeholder="Nama Product" value="<?php echo set_value('nm_product'); ?>" required>
              <?php echo form_error('nm_product') ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="detail" class="col-sm-3 col-form-label"> Detail Product </label>
            <div class="col-sm-8">
              <textarea name="detail" rows="5" cols="40" class="form-control" placeholder="Detail Product" value="<?php echo set_value('detail'); ?>" required></textarea>
              <?php echo form_error('detail') ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label"> Harga </label>
            <div class="col-sm-8">
              <input type="text" name="harga" class="form-control" placeholder="Harga Product" onkeypress="return Angkasaja(event)" value="<?php echo set_value('harga'); ?>" required>
              <?php echo form_error('harga') ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label"> Gambar </label>
            <div class="col-sm-8">
              <input type="file" class="form-control" name="image" required>
            </div>
          </div><br><br><br>
          <center><button type="submit" class="btn btn-primary" name="submit"><span class="oi oi-person"></span> TAMBAH </button></center>
        </div>
        <?php echo form_close(); ?>
        <div class="col-sm-1"></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/bootstrap.js"></script>

<script type="text/javascript">
    function Angkasaja(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
      return true;
    }
  </script>