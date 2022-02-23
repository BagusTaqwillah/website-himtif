<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
    <div class="row">
        <div class="col mt-2 text-center">
            <h3>Upload berita acara</h3>
        </div>
        <?php $this->session->flashdata('pesan'); ?>
        <hr>
        <div class="col">
            <a href="<?=base_url('form_acara')?>" class="btn btn-primary mb-2"> Upload Acara</a>
        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data acara
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Tempat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Tempat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i=0; foreach($acara as $ac ):?>
                                        <tr>
                                            <td><?=$ac['judul'];?></td>
                                            <td><?=$ac['tempat'];?></td>
                                            <td><a href="<?=base_url('admin/Admin/hapus_acara')?>/<?=$ac['id_acara']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            <a href="" class="btn btn-warning"><i class="fas fa-search-plus"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     </div>
                 </div>
</div>
</main>
<script src="<?=base_url('assets/swetalert/upload.js')?>"></script>
