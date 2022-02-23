<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<div class="row mt-3">

<div class="col-md-6  mx-auto">
    <div class="card">
        <div class="card-header">
            <h4>Isi Acara</h4>
        </div>
        <form action="<?=base_url('admin/Admin/form_acara')?>" method="post">
        <div class="card-body">
            
                <div class="form-group">
                    <label>judul acara</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label>Waktu acara</label>
                    <input type="text" class="form-control" name="waktu">
                </div>
                <div class="form-group">
                    <label>isi acara</label>
                    <input type="text" class="form-control" name="isi">
                </div>
                <div class="form-group">
                    <label>tempat</label>
                    <input type="text" class="form-control" name="tempat">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-outline-primary">Upload</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</main>