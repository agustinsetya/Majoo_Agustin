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
  			<h2 class="text-center heading">Product</h2>
  		</div>
  	</div>
  </div>
  <!-- //banner -->

  <!-- services -->
  <section class="services py-4 mx-md-5">
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

    <div class="row">

     <?php foreach($product as $key){ ?>
      <div class="col-lg-3 col-xs-4 mb-4">
        <div class="kotak" style="width: 70%">
          <img class="img-thumbnail" src="<?php echo base_url() . 'Gambar/'.$key->gambar ?>"/>
          <div class="card-body">
            <center>
              <h6 class="card-title">
                <p><?php echo $key->nm_product; ?></p>
                <p>Rp <b><?php echo number_format($key->harga,0,',','.')?></b></p>
              </h6>
            </center>
            <p><?php echo $key->detail; ?></p>
          </div><br>
          <center><a href="<?php echo base_url('Welcome/pemesanan/'.$key->id_product)?>"><button class="btn"> Beli </button></a></center>
        </div>
      </div>
      <?php } ?>
    </div>
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