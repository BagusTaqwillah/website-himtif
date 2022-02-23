
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-6 mt-5">
                                <div class="card">
                                    <div class="card-header">
                                        edit
                                    </div>
                                    <div class="card-body">
                                    <?php foreach($pengurus as $p):?>
                                    <?= form_open_multipart('update_struktur');?>
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="hidden" name="id_pengurus" class="form_control" value="<?=$p->id_pengurus;?>">
                                                <input type="text" class="form-control" name="nama" value="<?= $p->nama?>">
                                                <small class="form-text text-danger"><?= form_error('nama')?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jabatan</label>
                                                <input type="text" class="form-control" name="jabatan" value="<?= $p->jabatan?>">
                                                <small class="form-text text-danger"><?= form_error('jabatan')?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Semester</label>
                                                <select name="semester" id="" class="form-control" value="<?= $p->semester?>">
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
                                                <input type="file" name="foto" size="20" class="form-control" value="<?= $p->foto?>"/>
                                                <small class="form-text text-danger"><?= form_error('foto')?></small>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                                            <a href="<?=base_url('form_struktur')?>" class="btn btn-secondary  mt-2">Kembali</a>
                                        <?= form_close();?>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                                  

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>