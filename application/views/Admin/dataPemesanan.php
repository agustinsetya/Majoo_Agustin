<div class="right_col" role="main">
  <div class="row">
    <div class=" col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h3>DATA PEMESANAN</h3><br>
          <div class="clearfix"></div>
        </div><br>
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
          <table class="table table-striped table-bordered data">
            <thead>
              <tr class="bg-group">
                <th width="5px">NO</th>
                <th>Tanggal Pemesanan</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Nama Pemesan</th>
                <th>Alamat Pemesan</th>
                <th>Telp. Pemesan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                 $i=1;
                foreach ($pemesanan as $key) 
                {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $key->tgl_pesan;?></td>
                <td><?php echo $key->nm_product;?></td>
                <td>Rp <?php echo number_format($key->total_harga,0,',','.')?></td>
                <td><?php echo $key->nama_pemesan;?></td>
                <td><?php echo $key->alamat_pemesan;?></td>
                <td><?php echo $key->telp_pemesan;?></td>
                <td>
                  <a href="<?php echo base_url('Pemesanan/hapusPemesanan/'.$key->id_pemesanan)?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data : <?=$key->nama_pemesan;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php
                $i++;
                }
              ?>
            </tbody>
          </table>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/jquery.dataTables.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.data').DataTable();
  });
</script>