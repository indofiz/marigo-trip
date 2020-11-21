
<main role="main">

  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="<?=base_url('front/img/logo.png');?>" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            <?php if (session()->get('success')): ?>
              <div class="alert alert-success" role="alert">
                <?= session()->get('success') ?>
              </div>
            <?php endif; ?>
            <?php if (isset($validation)): ?>
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  <?= $validation->listErrors() ?>
                </div>
              </div>
            <?php endif; ?>
            <form action="" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" placeholder="email@example.com">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="" placeholder="enter your password">
              </div>
              <!-- <input name="login" id="login" class="btn btn-block login-btn" type="button" value="Login"> -->
              <button type="submit" id="login" class="btn btn-block login-btn">Login</button>
            </form>
            <p class="login-wrapper-footer-text">Don't have an account? <a href="<?=base_url('register');?>" class="text-reset">Register here</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="<?=base_url('login/images/login.jpg');?>" alt="login image" class="login-img">
        </div>
      </div>
    </div>
</main>