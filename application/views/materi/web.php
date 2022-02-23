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
      .list  .card{
        margin-top: 10px;
        transition: 0.5s;
      }
      .list  .card:hover{
       background-color: yellowgreen;
       transform: scale(1.1,1.2);
       
      }
      hr{
        background-color: red;
        width: 50%;
      }
    </style>
        <div class="container ">
            <div class="row">
                <div class="col">
                    <h1 class="text-primary text-center mt-3">Materi Web</h1>
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari materi ..." aria-label="Cari Materi" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-center list">
                <div class="col-xs-4 mr-2">
                <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">JQuery</h5>
                    <p class="card-text text-muted">Materi jquery.</p>
                    <a href="https://www.w3schools.com/jquery/default.asp" class="btn btn-primary">Baca Materi
                    </a>
                </div>
                </div>
                </div>

                <div class="col-xs-4  mr-2">
                <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Bootstrap</h5>
                    <p class="card-text text-muted">Materi jquery.</p>
                    <a href="https://www.w3schools.com/bootstrap/bootstrap_ver.asp" class="btn btn-primary">Baca Materi
                    </a>
                </div>
                </div>
                </div>

                <div class="col-xs-4  mr-2">
                <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">HTML</h5>
                    <p class="card-text text-muted">Materi jquery.</p>
                    <a href="https://www.w3schools.com/html/default.asp" class="btn btn-primary">Baca Materi
                    </a>
                </div>
                </div>
                </div>


                <div class="col-xs-4  mr-2">
                <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">CSS</h5>
                    <p class="card-text text-muted">Materi jquery.</p>
                    <a href="https://www.w3schools.com/css/default.asp" class="btn btn-primary">Baca Materi
                    </a>
                </div>
                </div>
                </div>

                <div class="col-xs-4  mr-2">
                <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Javascript</h5>
                    <p class="card-text text-muted">Materi jquery.</p>
                    <a href="https://riptutorial.com/ebook/jquery" class="btn btn-primary">Baca Materi
                    </a>
                </div>
                </div>
                </div>

                <div class="col-xs-4  mr-2">
                <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Template web</h5>
                    <p class="card-text text-muted">Materi jquery.</p>
                    <a href="https://www.w3schools.com/howto/default.asp" class="btn btn-primary">Baca Materi
                    </a>
                </div>
                </div>
                </div>

                <div class="col-xs-4  mr-2">
                <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">PHP</h5>
                    <p class="card-text text-muted">Materi jquery.</p>
                    <a href="https://riptutorial.com/ebook/jquery" class="btn btn-primary">Baca Materi
                    </a>
                </div>
                </div>
                </div>
            </div>
        </div>

  <script src="<?=base_url('vendor/vend_admin/all.min.js')?>"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/jquery.slim.min.js"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/popper.min.js"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/bootstrap.min.js"></script>
  </body>
</html>