<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('vendor/botsrap/')?>css/bootstrap.min.css">

    <title><?=$judul?></title>
  </head>
  <body>
      <style>
          @media (max-width: 767.98px) { 
              .wa{
                  margin-bottom: 10px;
              }
          }
          body{
              background-image: url('assets/img/f.jpg') ;
          }
          .wa{
              background-color: silver;
          }
           a .wa{
              color: green;
          }
           a .fb{
              color: rgb(236, 87, 87);
          }
          .fb{
              background-color: silver;
          }
      </style>
    <div class="card-header bg-primary text-center">
        Pesan 
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card wa text-center p-4">
                        <h6>whatsapp</h6>
                       <a href="https://api.whatsapp.com/send?phone=6282328432406"> <i class="fab fa-whatsapp fa-5x wa mx-auto"></i></a>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="card fb  p-4 text-center">
                    <h6>E-mail</h6>
                    <a href="mailto:fransihsan8888@gmail.com" class="mx-auto"><i class="far fa-envelope fb fa-5x"></i></a>
                 
                </div>

                </div>
            </div>
        </div>
    </div>
    <div class="card-footer fixed-bottom bg-primary">
        HIMTIF 20<?= date('y')?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url('vendor/vend_admin/all.min.js')?>"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/jquery.slim.min.js"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/popper.min.js"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/bootstrap.min.js"></script>
  </body>
</html>
 