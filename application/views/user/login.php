 
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand mb-4">
              <img src="<?=base_url('assets/')?>img/logo_hima.png" alt="logo" width="100">
            </div>
            <?= $this->session->flashdata('pesan');
            ?>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="login">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control" name="email">
                    <small class="form-text text-danger"><?= form_error('email');?></small>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Lupa Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password">
                    <small class="form-text text-danger"><?= form_error('password');?></small>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="text-muted text-center">
              Belum punya akun? <a href="<?=base_url('registrasi')?>">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


