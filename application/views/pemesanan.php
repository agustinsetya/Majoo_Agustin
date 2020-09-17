<div class="right_col" role="main">
  <div class="row">
    <div class=" col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h3>Edit Product</h3>
          <div class="clearfix"></div>
        </div><br>
        <?php foreach($pesanan as $key) {?>
          <?=form_open_multipart('Welcome/prosesPemesanan/'.$key->id_product)?>
          <input type="hidden" name="fk_product" value="<?php echo $key->id_product; ?>" />
          <input type="hidden" name="tgl_pesan" value="<?php echo date('Y-m-d'); ?>">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"> Nama Product </label>
            <div class="col-sm-8">
              <input type="hidden" name="id_product" value="<?php echo $key->id_product ?>">
              <input type="text" name="nm_product" class="form-control" placeholder="Nama Product" value="<?php echo $key->nm_product ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"> Harga </label>
            <div class="col-sm-8">
              <input type="hidden" name="id_product" value="<?php echo $key->id_product ?>">
              <textarea rows="5" cols="40" name="harga" class="form-control" placeholder="Harga" readonly><?php echo $key->harga ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama_pemesan" class="col-sm-3 col-form-label"> Nama Pemesan </label>
            <div class="col-sm-8">
              <input type="text" name="nama_pemesan" class="form-control" placeholder="Nama Pemesan" value="<?php echo set_value('nama_pemesan'); ?>" required>
              <?php echo form_error('nama_pemesan') ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat_pemesan" class="col-sm-3 col-form-label"> Alamat Pemesan </label>
            <div class="col-sm-8">
              <input type="text" name="alamat_pemesan" class="form-control" placeholder="Alamat Pemesan" value="<?php echo set_value('alamat_pemesan'); ?>" required>
              <?php echo form_error('alamat_pemesan') ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="telp_pemesan" class="col-sm-3 col-form-label"> Telp. Pemesan </label>
            <div class="col-sm-8">
              <input type="text" name="telp_pemesan" class="form-control" placeholder="Telp. Pemesan" value="<?php echo set_value('telp_pemesan'); ?>" required>
              <?php echo form_error('telp_pemesan') ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label"> Gambar </label>
            <div class="col-sm-8">
              <img src="<?php echo base_url("Gambar/".$key->gambar);?>" width="100px" height="100px">
            </div>
          </div>
          <div class="page-header">
            <input type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Ingin Melanjutkan Pembelian ?');" value="Beli">&nbsp;&nbsp;
            <a href="<?php echo base_url()?>Product"><button type="button" class="btn btn-danger">KEMBALI</button></a>
          </div>
          <?php echo form_close(); ?>
        <?php } ?>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/bootstrap.js"></script>