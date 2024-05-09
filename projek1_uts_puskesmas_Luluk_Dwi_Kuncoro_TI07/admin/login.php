<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Puskemas| Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php"><b>Welcome To </b>Puskesmas</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in </p>

        <form id="loginForm">
          <label for="username">Gmail:</label>
          <input type="text" id="username" class="form-control" name="username" required>

          <label for="password">Password:</label>
          <input type="password" id="password" class="form-control" name="password" required>

          <div class="col-4" style="margin-top: 5px; margin-left: 200px;">
            <button type="button" class="btn btn-primary btn-block" onclick="login()">Sign In</button>
          </div>
        </form>



        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="recover-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.php" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script>
    function login() {
      // Mendapatkan nilai username dan password dari formulir
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      // Lakukan verifikasi login sesuai kebutuhan Anda
      // Misalnya, Anda dapat menggunakan AJAX untuk memeriksa ke database atau API backend

      // Contoh sederhana: jika username dan password sesuai, tampilkan pesan berhasil
      if (username === 'admin@gmail.com' && password === '123') {
        alert('Login berhasil!');
        window.location.href = 'index.php'
      } else {
        alert('Login gagal. Periksa kembali username dan password.');
      }
    }
  </script>


  <!-- login  -->

</body>

</html>