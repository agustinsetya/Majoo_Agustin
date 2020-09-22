<!DOCTYPE html>
<html lang="en">
<head>
<title>Majoo Teknologi Indonesia</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsWelcome/css/bootstrap.css"><!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsWelcome/css/style.css" media="all"><!-- custom css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsWelcome/css/fontawesome-all.css"><!-- fontawesome css -->
	<!-- //css files -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- top nav -->
		<nav class="top_nav d-flex pt-3">
			<!-- logo -->
			<h1>
				<a class="navbar-brand" href="<?php echo base_url()?>Welcome"> Majoo Teknologi Indonesia
				</a>
			</h1>
			<!-- //logo -->
			<div class="w3ls_right_nav ml-auto d-flex">
				<div class="nav-icon d-flex">
					<!-- sigin -->
					<a class="text-white login_btn align-self-center mx-md-3" data-toggle="modal" data-target="#exampleModal1">
						<i class="far fa-user"></i>
					</a>
					<!-- <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#loginModal">Login</button> -->
					<!-- sigin -->
				</div>
			</div>
		</nav>
		<!-- //top nav -->
		<!-- bottom nav -->
		<nav class="navbar navbar-expand-lg navbar-light justify-content-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</nav>
		<!-- //bottom nav -->
	</div>
	<!-- //header container -->
</header>
<!-- //header -->

<!-- banner -->
<div class="inner_banner layer" id="home">
	<div class="container">
		<div class="banner-padding">
			<h2 class="text-center heading">Pemesanan</h2>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- services -->
<section class="services py-4 mx-md-5">
	<h4 class="heading mb-4">Detail Pemesanan</h4>
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
              <input type="number" name="telp_pemesan" class="form-control" placeholder="Telp. Pemesan (Hanya Angka)" value="<?php echo set_value('telp_pemesan'); ?>" required>
              <?php echo form_error('telp_pemesan') ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label"> Gambar </label>
            <div class="col-sm-8">
              <img src="<?php echo base_url("Gambar/".$key->gambar);?>" width="100px" height="100px">
            </div>
          </div>
          <div class="page-header text-center">
            <input type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Ingin Melanjutkan Pembelian ?');" value="Beli">&nbsp;&nbsp;
            <a href="<?php echo base_url()?>Product"><button type="button" class="btn btn-danger">KEMBALI</button></a>
          </div>
          <?php echo form_close(); ?>
        <?php } ?>
</section>
<!-- //services -->

<!-- signin Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1" aria-hidden="true">
	<div class="agilemodal-dialog modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body  pt-3 pb-5 px-sm-5">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo base_url();?>assetsWelcome/images/t4.png" class="img-fluid" alt="login_image" />
						<p class="pt-5">Selamat Datang Admin PT. Majoo Teknologi Indonesia!</p>
					</div>
					<div class="col-md-6 align-self-center">
						<form action="<?php echo base_url("Welcome/aksi_login"); ?>" method="post">
							<div class="form-group">
								<label for="username" class="col-form-label">Username</label>
								<input type="text" class="form-control" placeholder=" " name="username" id="username" required="">
							</div>

							<div class="form-group">
								<label class="col-form-label">Password</label>
								<input type="password" class="input100 form-control" placeholder=" " name="password" required="">
							</div>
					
							<div class="right-w3l">
								<input type="submit" nama="submit" class="form-control" value="Login">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- signin Modal -->


    <!-- js -->
    <script type="text/javascript" src="<?php echo base_url();?>assetsWelcome/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assetsWelcome/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->

  	<!-- Responsiveslides -->
  	<script type="text/javascript" src="<?php echo base_url();?>assetsWelcome/js/responsiveslides.min.js"></script>
    <!-- // Responsiveslides -->
    <script type="text/javascript" src="<?php echo base_url();?>assetsWelcome/js/smoothscroll.js"></script><!-- Smooth scrolling -->

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?php echo base_url();?>assetsWelcome/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assetsWelcome/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //end-smoth-scrolling -->
</body>
</html>