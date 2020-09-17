<div class="right_col" role="main">


  <div class="row">


    <div class=" col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h3>DATA PEMESANAN</h3>

          <div class="clearfix"></div>
        </div>
        <br>

        <table class="table table-striped table-bordered data">
          <thead>
            <tr class="bg-group">
              <th width="5px">NO</th>
              <th>Nama Pembeli</th>
              <th>Tanggal Beli</th>
              <th>Total Harga</th>
              <th>Detail Order</th>
            </tr>
          </thead>
          <tbody>
             <?php 
             $no = 1;
             foreach ($order as $key) 
             {
              $total = number_format($key->total,0,',','.'); ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $key->nama;?></td>
                <td><?php echo $key->tgl;?></td>
                <td><?php echo $total;?></td>
                <td><a href="<?php echo base_url('Order/detilTrans/'.$key->id_order)?>" class="btn btn-success">Lihat Detail</a></td>

              </tr>
              <?php
              $no++;
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

<script type="text/javascript" src="<?php echo base_url();?>assets_datatables\DataTables\assets_ajax\js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets_datatables\DataTables\assets_ajax\js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets_datatables\DataTables\assets_ajax\js/jquery.dataTables.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.data').DataTable();
  });
</script>