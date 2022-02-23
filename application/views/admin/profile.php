<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4"><?=$judul?></h1>
             <ol class="breadcrumb mb-4">
                 <li class="breadcrumb-item active">Dashboard</li>
             </ol>
            <div class="row">
                <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="<?=base_url('assets/img/profile.jpg')?>" class="card-img rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title"><?= $admin['nama']; ?></h3>
                        <p class="card-text"><?= $admin['email']; ?></p>
                        <p class="card-text"><small class="text-muted">Login pada &nbsp;<?= date('d-m-20y')
                        ?></small></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>

</div>
</main>