<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-6 mt-5">
                                  <?=$this->session->flashdata('pesan');
                                  ?>
                                    <div class="card ">
                                    <div class="card-header">
                                        <i class="fas fa-file-alt"></i>
                                        Form Struktur
                                    </div>
                                    <div class="card-body">
                                      <?= form_open_multipart('tambah_struktur');?>
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" class="form-control" name="nama">
                                                <small class="form-text text-danger"><?= form_error('nama')?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jabatan</label>
                                                <input type="text" class="form-control" name="jabatan">
                                                <small class="form-text text-danger"><?= form_error('jabatan')?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Semester</label>
                                                <select name="semester" id="" class="form-control">
                                                    <option>Pilih semester</option>
                                                    <option value="I">I</option>
                                                    <option value="II">II</option>
                                                    <option value="III">III</option>
                                                    <option value="IV">IV</option>
                                                    <option value="V">V</option>
                                                    <option value="VI">VI</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label >foto</label>
                                                <input type="file" name="gambar" size="20" class="form-control"/>
                                                <small class="form-text text-danger"><?= form_error('foto')?></small>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                                        <?= form_close();?>

                                    </div>
                                </div>
                            </div>
                        </div>
                      
                 
                        <div class="card mb-4 mt-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pengurus
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Jabatan</th>
                                            <th>Semester</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Jabatan</th>
                                            <th>Semester</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($pengurus as $p):?>
                                        <tr>
                                            <td><?=$p['nama']?></td>
                                            <td><?=$p['jabatan']?></td>
                                            <td><?=$p['semester']?></td>
                                            <td>
                                                <center>
                                                <a href="<?=base_url();?>admin/Admin/edit_struktur/<?= $p['id_pengurus']?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                               <a onclick="confirm('Yakin Ingin Di hapus')" href="<?=base_url();?>admin/Admin/hapus_struktur/<?= $p['id_pengurus']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </center>
                                           
                                           </td>
                                           
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </main>