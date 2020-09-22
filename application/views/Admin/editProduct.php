<div class="right_col" role="main">
  <div class="row">
    <div class=" col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h3>Edit Product</h3>
          <div class="clearfix"></div>
        </div><br>
        <?php foreach($product as $key) {?>
          <?=form_open_multipart('Product/prosesEditProduct/'.$key->id_product)?>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"> Nama Product </label>
            <div class="col-sm-8">
              <input type="hidden" name="id_product" value="<?php echo $key->id_product ?>">
              <input type="text" name="nm_product" class="form-control" placeholder="Nama Product" value="<?php echo $key->nm_product ?>" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"> Harga </label>
            <div class="col-sm-8">
              <input type="hidden" name="id_product" value="<?php echo $key->id_product ?>">
              <input type="text" name="harga" class="form-control" placeholder="Harga (Hanya Angka)" value="<?php echo $key->harga ?>" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label"> Detail Product </label>
            <div class="col-sm-8">
              <input type="hidden" name="id_product" value="<?php echo $key->id_product ?>">
              <textarea rows="5" cols="40" name="detail" class="form-control" placeholder="Detail Product"><?php echo $key->detail ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label"> Gambar </label>
            <div class="col-sm-8">
              <img src="<?php echo base_url("Gambar/".$key->gambar);?>" width="100px" height="100px"><br><br>
              <input type="file" name="image" placeholder="Gambar">
            </div>
          </div>
          <div class="page-header">
            <input type="submit" class="btn btn-success" value="EDIT">&nbsp;&nbsp;
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