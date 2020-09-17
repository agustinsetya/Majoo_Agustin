<!DOCTYPE html>
<html lang="en">
<head>
  <title>Majoo Teknologi Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/slide.css">

  <!-- css files -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsWelcome/css/bootstrap.css"><!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsWelcome/css/style.css" media="all"><!-- custom css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsWelcome/css/fontawesome-all.css"><!-- fontawesome css -->
  <!-- //css files -->
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- untuk mengatur isi dari navbar -->
<div class="nav navbar-fixed-top">
  <h1>
        <a class="navbar text-white mx-md-3" href="<?php echo base_url()?>Welcome"> Majoo Teknologi Indonesia
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
</div>

<div id="product" class="container mx-md-3">
  <h5><b>PRODUCT</b></h5><br>
  <div class="row">
   <?php foreach($product as $p){ ?>
    <div class="col-lg-4 col-md-4 mb-4">
      <div class="kotak" style="width: 90%">
        <a href="#"></a>
        <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'Gambar/'.$p->gambar ?>"/></a>
        <div class="card-body">
          <center>
            <h6 class="card-title">
              <p><?php echo $p->nm_product; ?></p>
              <p>Rp <b><?php echo number_format($p->harga,0,',','.')?></b></p>
            </h6>
          </center>
          <p><?php echo $p->detail; ?></p>
        </div><br>
        <center><button type="submit" class="btn btn-primary" name="submit"> Beli </button></center>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<div id="contact" class="container">
</div>

<footer>
    <div class="text-center">
        PT. Majoo Teknologi Indonesia
    </div>
    <div class="clearfix"></div>
</footer>
</body>
</html>

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
            <p class="pt-5">Selamat Datang Admin Majoo Teknologi Indonesia!</p>
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