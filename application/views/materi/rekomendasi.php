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
  <style>
       .card1:hover{
          background-image: linear-gradient(to right,rgba(0, 132, 255, 0.568),rgba(251, 255, 0, 0.568));
          color: red;
        transition: 1s;
        box-shadow: -5px 5px 10px  black;
      }
       .card3:hover{
          background-image: linear-gradient(to bottom,rgba(255, 217, 0, 0.918),rgba(145, 255, 0, 0.918));
          color: brown;
        transition: 1s;
        box-shadow: 5px -5px 10px  black;
      }
       .card2:hover{
          background-image: linear-gradient(to right,rgba(253, 208, 60, 0.918),rgba(253, 60, 211, 0.918));
          color: white;
        transition: 1s;
        box-shadow: 5px 5px 10px  black;
      }
      .card img:hover{
        transform: scale(1.2);
      }
  </style>
  <body>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-3">
                <h3>Rekomendasi Chanel youtube Untuk Belajar</h3>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-md-4   mt-2">
            <div class="card text-center card1">
            <img id="img" class="style-scope yt-img-shadow rounded-circle mx-auto mt-2" width="100" alt="" src="https://yt3.ggpht.com/ytc/AKedOLTn3FAeWcd7pgq7Bvz5k9SIDj_ccBbFNbbV15bDUA=s88-c-k-c0x00ffffff-no-rj">
            <div class="card-body">
                <h5 class="card-title">Web Programming UNPAS</h5>
                <p class="card-text">chanel untuk belajar webdevelopment</p>
                <a href="https://www.youtube.com/c/WebProgrammingUNPAS" class="btn btn-danger">Lihat Chanel</a>
            </div>
            </div>
            </div>

            <div class="col-md-4 text-center  mt-2">
            <div class="card text-center card2">
            <img id="img" class="style-scope yt-img-shadow rounded-circle mx-auto mt-2" width="100" alt="" src="https://yt3.ggpht.com/ytc/AKedOLSjvnUKdn3VV7RnM3ofQM9eqr9bpy40rUtC6gNDIA=s88-c-k-c0x00ffffff-no-rj">
            <div class="card-body">
                <h5 class="card-title">Framework Indonesia</h5>
                <p class="card-text">chanel untuk belajar Framework</p>
                <a href="https://www.youtube.com/c/FrameworkIndonesia" class="btn btn-danger">Lihat Chanel</a>
            </div>
            </div>
            </div>

            <div class="col-md-4 text-center mt-2">
            <div class="card text-center card3">
            <img id="img" class="style-scope yt-img-shadow rounded-circle mx-auto mt-2" width="100" alt="" src="https://yt3.ggpht.com/ytc/AKedOLSrzMpy9kh5pILgh7PVqpXw4Ae7qKgAZOTBgfxJVA=s88-c-k-c0x00ffffff-no-rj">
            <div class="card-body">
                <h5 class="card-title">Study With Student</h5>
                <p class="card-text">chanel untuk belajar logika pemograman</p>
                <a href="https://www.youtube.com/c/StudyWithStudentkuy" class="btn btn-danger">Lihat Chanel</a>
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