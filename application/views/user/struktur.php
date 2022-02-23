<style>
    html,body{
        background-color:rgb(41, 124, 92);
    }
    .card{
        background-color:  rgb(164, 197, 104);
        padding: 10px;
    }
    .card img{
        border-radius: 50%;
        border: 2px solid black;
    }
</style>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 ">
                        <div class="row">
                            <?php foreach($pengurus as $pe) :?>
                            <div class="col-md-2 mt-2">
                                <div class="card text-center">
                                    <img src="<?= base_url('assets/img/profile.jpg');?>" alt="" width="100%">
                                    <h5><?=$pe['nama']?></h5>
                                    <p><?=$pe['jabatan']?></p>
                                    <p class="text-muted">semester &nbsp;<?=$pe['semester']?></p>
                                </div>

                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </main>