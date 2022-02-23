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
   <div class="container">
       <div class="card mt-3">
           <div class="header text-center p-4">
               <h2> Berita Acara HIMTIF Politeknik Purbaya</h2>
           </div>
           <div class="isi p-3">
               <h4 class="text-center"><?=$acara['judul'];?></h4>
               <p><?=$acara['isi']?></p>
               <p class="text-bold">Tempat  : <?=$acara['tempat']?></p>
               <p>Waktu  :<?=$acara['waktu']?></p>
                <p>demikian berita acara yang kami berikan saya harap teman-teman bisa menghadiri acara yang kami adakan <br> cukup sekian dari kami wassalamalaikum wr wb</p>
           </div>
           <div class="mengetahui ml-auto text-center p-4">
             <p>Tegal,&nbsp;<?=$acara['tgl_buat']?></p>
             <br><br>
             <p>Ketua Himtif</p>
           </div>
       </div>
   </div>

  <script src="<?=base_url('vendor/vend_admin/all.min.js')?>"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/jquery.slim.min.js"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/popper.min.js"></script>
    <script src="<?=base_url('vendor/botsrap/')?>js/bootstrap.min.js"></script>
  </body>
</html>