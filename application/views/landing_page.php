
 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="index.html">
        <img class="logo-default" src="<?=base_url('vendor/vend_user/')?>images/him.png" alt="logo"/>
        <img class="logo-white" src="<?=base_url('vendor/vend_user/')?>images/him.png" alt="logo"/>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Materi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?=base_url('web')?>">Web Developer</a>
              <a class="dropdown-item" href="<?=base_url('database')?>">Database</a>
              <a class="dropdown-item" href="<?=base_url('rekomendasi')?>">Chanel Rekomended</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="about.html">Tentang kami</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="service.html">Services</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url('informasi')?>">informasi</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url('acara')?>">Acara</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?=base_url('kontak')?>">Kontak</a>
          </li>
		  <li class="nav-item" >
				  <a href="<?=base_url('login')?>" class="nav-link btn btn-primary">Login</a>
		  </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->
	<style>
		.slider-item .slider1{
			background-image: url('vend_user/images/slider/slider2.jpg');                  
		}
		.slider2{
			background-image: url('<?base_url('vend_user/images/slider/slider2.jpg')?>');                  
		}
	</style>
	
	<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area1 slider1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1"> Gabung HIMTIF <br> Politeknik Purbaya</h1>
					<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Daftarkan diri anda segera.</p>
					<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main" href="<?=base_url('login')?>">Daftar</a>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-item th-fullpage hero-area slider2">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Informasi  Tentang HIMTIF <br> Politeknik Purbaya</h1>
					<p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">baca lebih lanjut mengenai Himtif.</p>
					<a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8"  class="btn btn-main" href="service.html">Informasi</a>
				</div>
			</div>
		</div>
	</div>
</div>




<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <!-- section title -->
        <div class="title text-center">
          <h2>Deskripsi</h2>
          <p>Deskripsi Tentang organisasi kami</p>
          <div class="border"></div>
        </div>
        <!-- /section title -->
      </div>

      <div class="col">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-alarm-outline"></i>
              <h4>Management Waktu</h4>
              <p>Dalam organisasi kami dituntut untuk memanage waktu.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-briefcase-outline"></i>
              <h4>Idea Prokja</h4>
              <p>organisasi Kami menerima masukan prokja sebagai pengembangan.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-email-outline"></i>
              <h4>Support Relasi</h4>
              <p>Organisasi kami siap berelasi dengan komunitas atau perusahaan apapun yang saling menguntungkan.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-locked-outline"></i>
              <h4>Privasi komunitas</h4>
              <p>Organisasi kami menjaga privasi organisasi maupun komunitas lain yang pernah berkolaborasi bareng.</p>
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->

<!--
Start About Section
==================================== -->
<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>Kegiatan Kami
					</h2>
					<p>Dalam organisasi kami melalukan Kegiatan yang memberikan manfaat kepada mahasiswa lain dan kepada masyarakat</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
			<div class="col-md-6">
			 	<div class="kegiatan">
				 <img src="<?=base_url('assets/img/kegiatan.png')?>" class="card-img-top" alt="...">
				 </div>
			</div>
			<div class="col-md-6">
				<!-- Button trigger modal -->
			<p class="">Klik untuk Melihat Dokumentasi</p>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Lihat Kegiatan
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Album Kegiatan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
							<div class="card">
							<a href="">
							<img src="<?=base_url('assets/img/makrab.jpg')?>" class="card-img-top" alt="..."></a>
							<div class="card-body">
								<p class="card-text">Kegiatan makrab</p>
							</div>
							</div>
							</div>

							<div class="col-md-6 ">
							<div class="card">
							<img src="<?=base_url('assets/img/sertijab.jpg')?>" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">Serah terima jabatan.</p>
							</div>
							</div>
							</div>

							<div class="col-md-6 mt-2">
							<div class="card">
							<img src="<?=base_url('assets/img/web.jpg')?>" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">Pembuatan Web Himtif.</p>
							</div>
							</div>
							</div>

							<div class="col-md-6 mt-2">
							<div class="card">
							<img src="<?=base_url('assets/img/yudisium.jpg')?>" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">Sidang yudisium.</p>
							</div>
							</div>
							</div>

							<div class="col-md-6">
							<div class="card">
							<img src="<?=base_url('assets/img/mkn.jpg')?>" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">Makan Bersama.</p>
							</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">kembali</button>
				</div>
				</div>
			</div>
			</div>
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
				<a href="" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
		Start Counter Section
		==================================== -->
		
		<section  class="counter-wrapper section-sm" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title">
							<h2>Jumlah Keseluruhan Data</h2>
							<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
						</div>
					</div>
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-alarm-outline"></i>
							<div>
							    <span class="counter" data-count="27">0</span>
							</div>
							<h3>Pengurus HIMTIF</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-analytics-outline"></i>
							<div>
							    <span class="counter" data-count="100">0</span>
							</div>
							<h3>Anggota HIMTIF</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
						<div class="counters-item">
							<i class="tf-ion-ios-compose-outline"></i>
							<div>
							    <span class="counter" data-count="99">0</span>
							</div>
				            <h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
						<div class="counters-item kill-border">
							<i class="tf-ion-ios-bolt-outline"></i>
							<div>
							    <span class="counter" data-count="250">0</span>
							</div>
							<h3>Cups of Coffee</h3>
						</div>
					</div>
					<!-- end fourth count item -->
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->

<!-- Start Testimonial
=========================================== -->
		
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Pembina sekaligus pengembang HIMTIF  Politeknik Purbaya <br> dan pemberi masukan dan perencanaan program kerja HIMTIF <br> serta pengawas dan pendukung keberlanjutanya organisasi</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="<?=base_url('assets/img/pembina/heny.jpg')?>" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Heny Indriani, ST ,MM</h3>
								<span>Dosen Politeknik Purbaya</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
							<p>Pembina sekaligus pengembang HIMTIF  Politeknik Purbaya <br> dan pemberi masukan dan perencanaan program kerja HIMTIF <br> serta pengawas dan pendukung keberlanjutanya organisasi</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="<?=base_url('assets/img/pembina/deny.jpg')?>" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Denny Vasanando Sabanise, S.Kom</h3>
								<span>Dosen Politeknik Purbaya</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
							<p>Pengawas sekaligus pengarahan HIMTIF  Politeknik Purbaya <br> dan pemberi masukan dan perencanaan program kerja HIMTIF <br> serta pemberi dukungan keberlanjutanya organisasi</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="<?=base_url('assets/img/pembina/titik.jpg')?>" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Titiek Deasy Saptaryani, S.T, M.T</h3>
								<span> Direktur Politeknik Purbaya</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->


<section class="blog" id="blog">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2> Divisi <span class="color">HIMTIF</span></h2>
					<div class="border"></div>
					<p>Divisi HIMTIF adalah bagian-bagian di dalam organisasi yang menangani satu bidang tertentu dan memiliki fungsi dan kewenangan masing-masing</p>
				</div>
			</div>
		</div>
		<style>
			.post-item img {
				border: 2px solid rgba(0, 0, 0,0.2);
				border-radius: 20px;
			}
			.post-item{
				border-radius: 20px;
				box-shadow: 4px 4px 5px rgba(0, 0, 0,0.1),-4px -4px 5px rgba(0, 0, 0,0.1);
			}
			
		
		</style>
		<div class="row d-flex justify-content-center">
				<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="<?=base_url('assets/img/divisi/pendidikan.jpg');?>" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h5>Divisi Pendidikan</h5>
						<a class="btn btn-main"  data-toggle="modal" data-target="#pendidikan">Selengkapnya</a>
					</div>
					<div class="modal fade" id="pendidikan" tabindex="-1" role="dialog" aria-labelledby="pendidikan" aria-hidden="true">
				    <div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="pendidikan">Divisi Pendidikan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">	
						<p>Divisi Pendidikan merupakan sebuah divisi yang berada dalam bidang penelitian  dan pengembangan, divisi ini bergerak dalam bidang pengembangan dan  menjalankan aspirasi yang bersifat pengembangan pendidikan dimana Tugas Pokok  dan Fungsi dari divisi Pendidikan yang terdapat pada kepengurusan HIMTIF sebagai  berikut:</p>
						<p>a. Mencari aspirasi mengenai kebutuhan akan pengembangan ilmu pengetahuan  mahasiswa POLITEKNIK PURBAYA</p>	
					    <p>b. Mencari informasi mengenai WEBINAR atau WORKSHOP berkolaborasi  dengan Divisi KOMINFO</p>
						<p>	c. Menerima informasi aspirasi kebutuhan mahasiswa mengenai  
						pengembangan ilmu pengetahuan dari Divisi KOMINFO.
						</p>
						<p>d. Melaksanakan program kerja yang berkaitan dengan  
						pengembangan ilmu pengetahuan.</p>
						<p>e. Meningkatkan prestasi mahasiswa </p>
						<p>f. Melaksanakan Pelatihan dan seminar yang dibantu oleh seluruh pengurus  HIMTIF.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					</div>
					</div>
					</div>
				</div>
			
			</article>
			<!-- /single blog post -->

			<!-- single blog post -->
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
					<img src="<?=base_url('assets/img/divisi/kominfo.jpg');?>" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h5>Divisi Kominfo</h5>
						<a class="btn btn-main" data-toggle="modal" data-target="#kominfo">Selengkapnya</a>
					</div>
					<div class="modal fade" id="kominfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Divisi Kominfo</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>
						Divisi KOMINFO merupakan sebuah divisi yang berada dalam bidang Hubungan  Kemasyarakatan dan Alumni, Tugas Pokok dan Fungsi dari divisi KOMINFO yang  terdapat pada kepengurusan HIMTIF sebagai berikut: 
						</p>
						<p>
						a. Mengumpulkan informasi terkait aspirasi mahasiswa
						</p>
						<p>b. Menginformasikan aspirasi mahasiswa dalam rapat divisi, rapat bidang dan  rapat pengurus HIMTIF dan menyampaikan aspirasi kepada divisi atau bidang  terkait </p>
						<p>c. Mengorganisir permasalahan-permasalahan terkait isu internal dan eksternal  kampus khususnya dalam bidang kemahasiswaan</p>
						<p>d. Membantu Divisi Sosial untuk mengkoordinir dan mengorganisir hubungan keorganisasian baik internal kampus maupun eksternal kampus. e. Membuat design komonikasi visual dalam setiap kegiatan HIMTIF diluar  program kerja.</p>
						<p>f. Membantu Sekretaris dalam penyampaian dan penyebaran informasi dan  surat-menyurat (administratif).</p>
						<p>g. menjembatani urusan internal dan eksternal. Menjembatani pihak-pihak dari  luar jurusan Teknik Informatika </p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					</div>
					</div>
					</div>
				</div>
				
			</article>
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
					<img src="<?=base_url('assets/img/divisi/sosial.jpg');?>" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
					<h5>Divisi Sosial</h5>
						<a class="btn btn-main" data-target="#sosial" data-toggle="modal">Selengkapnya</a>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="sosial" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Divisi Sosial</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Divisi Sosial Merupakan sebuah divisi yang berada dalam bidang Hubungan sosial dan  Alumni, divisi ini bergerak untuk menjalankan aspirasi yang bersifat keluhan dimana Tugas Pokok dan Fungsi dari divisi soskesma yang terdapat pada kepengurusan  HIMTIF sebagai berikut: 
							</p>
							<p>
								a. Mencari aspirasi yang bersifat keluhan dari mahasiswa TEKNIK  INFORMATIKA POLITEKNIK PURBAYA bekerjasama dengan divisi  KOMINFO. 
							</p>
							<p>
								b. Menjalankan tugas advokasi. 
							</p>
							<p>
								c. Membangun pola komunikasi dengan mahasiswa terkait permasalahan sistem  pendidikan di TEKNIK INFORMATIKA PURBAYA. 
							</p>
							<p>
								d. Membangun pola komunikasi dengan mahasiswa terkait permasalahan sistem  pendidikan di TEKNIK INFORMATIKA PURBAYA. 
							</p>
							<p>
								e. Menyelenggarakan kajian pengurus tentang AD/ART, proker 
							</p>
							<p>
								f. Mengadakan Forum Diskusi 
							</p>
							<p>
								g. Membuat BAP dari setiap kegiatan yang telah dilaksanakan oleh Divisi Sosial. h. Memberikan rekomendasi kepada Ketua Umum HIMTIF terkait permasalahan  yang sedang terjadi. 
							</p>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
						</div>
					</div>
					</div>
				</div>
			</article>
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
					<img src="<?=base_url('assets/img/divisi/minat.jpg');?>" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
					<h5>Divisi Minat dan Bakat</h5>
						<a class="btn btn-main" data-target="#minat" data-toggle="modal">Selengkapnya</a>
					</div>
					<div class="modal fade" id="minat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="minat">Divisi Minat dan Bakat</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Divisi MINAT DAN BAKAT merupakan sebuah divisi yang berada dalam bidang  Pengembangan Minat dan Bakat, divisi ini bergerak dalam bidang minat dan bakat  Tugas Pokok dan Fungsi dari divisi MINAT DAN BAKAT yang terdapat pada  kepengurusan HIMTIF adalah sebagai berikut: 
							</p>
							<p>
								a. Mewadahi dan atau menyalurkan minat dan bakat mahasiswa Teknik informatika  PURBAYA dalam bidang MINAT DAN BAKAT demi untuk meningkatkan  prestasi mahasiswa TEKNIK INFORMATIKA PURBAYA dalam bidang non  akademik. 
							</p>
							<p>
								b. Membentuk Komunitas yang berkaitan dengan MINAT DAN BAKAT  mahasiswa TEKNIK INFORMATIKA PURBAYA. 
							</p>
							<p>
								c. Mengakomodir komunitas MINAT DAN BAKAT di lingkungan Teknik  Informatika PURBAYA. 
							</p>
							<p>
								d. Mengembangkan komunitas MINAT DAN BAKAT di lingkungan Teknik Industri  PURBAYA.
							</p>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
						</div>
					</div>
					</div>
				</div>
			</article>
			<article class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="post-item">
					<div class="media-wrapper">
					<img src="<?=base_url('assets/img/divisi/masyarakat.jpg');?>" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h5>Divisi Kemasyarakatan</h5>
						<a class="btn btn-main" data-target="#masyarakat" data-toggle="modal">Selengkapnya</a>
					</div>
					<div class="modal fade" id="masyarakat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Divisi Kemasyarakatan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
							Divisi Kemasyarakatan merupakan sebuah divisi yang berada dalam bidang Hubungan masyarakat dan pemberdayaan daerah sekitar kampus, divisi ini bergerak untuk menjalankan suatu aspirasi yang bersifat membangun dan mengembangkan suatu masyarakat menjadi lebih luas wawasanya :
							</p>
							<p>
								a. Bertanggung jawab dalam melaksanakan kegiatan pengabdian masyarakat  didalam maupun diluar. 
							</p>
							<p>
								b. Bekerja menyangkut isu-isu social dalam masyarakat. 
							</p>
							<p>
								c. Melakukan Penggalangan dana terkait bencana dan berita duka. d. Pemberdayaan kesehatan melalui Donor Darah. 
							</p>
							<p>
								e. Memastikan Semua Mahasiswa Melakukan Vaksin.
							</p>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
						</div>
						</div>
					</div>
					</div>
				</div>
			</article>
			<!-- end single blog post -->
		</div>
			<!-- /section title -->
	</div> <!-- end container -->
</section> <!-- end section -->

<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container ">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>about</h3>
          <p>Organisasi kami sebagai forum pembelajaran dan diskusi mengenai himpunan mahasiswa.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <!-- <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Our Services</h3></li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div> -->
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Quick Links</h3></li>
            <li><a href="http://purbaya.ac.id">Poltek purbaya</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Sosial Media</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="http://instagram.com/">Instagram</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 20<?php echo date('y');?>. Developer by HIMTIF</h5>
  </div>
</footer> <!-- end footer -->

