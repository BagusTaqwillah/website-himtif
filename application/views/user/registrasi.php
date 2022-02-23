
  <div id="app">
  <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            <img src="<?=base_url('assets/')?>img/logo_hima.png" alt="logo" width="100">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="registrasi">

                  <div class="form-group">
                    <label for="email">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama">
                    <small class="form-text text-danger"><?= form_error('nama');?></small>
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email">
                    <small class="form-text text-danger"><?= form_error('email');?></small>
                  </div>

                  <div class="form-group">
                    <label for="email">NO Telpon</label>
                    <input  type="text" class="form-control" name="no_tlpn">
                    <small class="form-text text-danger"><?= form_error('no_tlpn');?></small>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input  type="password" class="form-control pwstrength" name="password1">
                      <small class="form-text text-danger"><?= form_error('password1');?></small>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">ulangi password</label>
                      <input id="password2" type="password" class="form-control" name="password2">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="text-muted text-center mb-5">
              Belum punya akun? <a href="<?=base_url('login')?>">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
