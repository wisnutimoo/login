<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrasi Akun</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/fontawesome-free/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b></b></a>
    </div>

    <body class="hold-transition register-page">
      <div class="register-box">
        <div class="register-logo">
          <a href="../../index2.html"><b>Registrasi</b>Page</a>
        </div>

        <div class="card">
          <div class="card-body register-card-body">
            <p class="login-box-msg">Registrasi </p>

            <form class="user" method="post" action="<?= base_url('Registrasi/registration'); ?>">
              <div class="input-group mb-3">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <?= form_error('nama', ' <small class="text-danger" mr-2>', '</small>'); ?>
                    <span class="fas fa-user"></span>

                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <?= form_error('username', ' <small class="text-danger" ml-3>', '</small>'); ?>
                    <span class="fas fa-envelope"></span>

                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" id="password" name="password1" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <?= form_error('password1', ' <small class="text-danger" ml-2>', '</small>'); ?>
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" id="password" name="password2" class="form-control" placeholder="Ulangi Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <!-- /.col -->
              <div class="col-13">
                <button type="submit" class=" btn btn-primary btn-block">Daftar</button>
                <hr>
                <a href="<?= base_url('auth/login'); ?>" class="text-center">Sudah Punya Akun</a>

              </div>
              <!-- /.col -->
          </div>
          </form>




        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="<?= base_url('../assets/plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('../assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('../assets/dist/js/adminlte.min.js'); ?>"></script>
</body>

</html>