<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('vendor/botsrap/')?>css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
      <style>
          @media (max-width: 767.98px) { 
              img{
                  width: 400px;
              }
              .col-md-g .ket{
                  margin-top: 10px;
              }
          }
          body{
              background-color: yellow;
          }
          a.btn{
              border-radius: 20% 0%;
          }
          .row{
              margin-top: 100px;
          }
          .ket{
              margin-top: 150px;
          }
      </style>
   <div class="container">
       <div class="row">
           <div class="col-md-6">
               <img src="<?=base_url('assets/img/404.png')?>" alt="">
           </div>
           <div class="col-md-6 ket">
               <h3>Halaman Tidak di temukan</h3>
               <p class="text-muted">laman ini tidak tersedia</p>
               <a href="<?=base_url('Page')?>" class="btn btn-outline-primary ">kembali ke beranda</a>
           </div>
       </div>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url('vendor/botsrap/')?>js/jquery.slim.min.js"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/popper.min.js"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/bootstrap.min.js"></script>
  </body>
</html>