<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>E-ARSIP - Login</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>




      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


      .text-center {
    background-color: white; /* Mengatur warna latar belakang menjadi putih */
    padding: 20px; /* Menambahkan padding agar konten tidak terlalu dekat dengan tepi div */
    border-radius: 10px; /* Menambahkan border radius untuk sudut elemen */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan (shadow) untuk memberikan efek raised look */
    max-width: 400px; /* Menentukan lebar maksimum dari div */
    margin: 0 auto; /* Untuk meletakkan div ke tengah halaman */
  }

      
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
<form class="form-signin" method="post" action="cek_login.php">
  <div class="text-center mb-4">
    <img class="mb-2" src="assets/pn-tondano.png" width="200">
    <h1 class="h3 mb-3 font-weight-normal">Login E-Arsip</h1>
    <p>Silahkan masukkan username dan password anda, sebelum masuk ke dalam sistem E-Arsip</p>
  </div>

  <div class="form-label-group">
    <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
    <label for="username">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <label for="password">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Ingat saya
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2023-<?=date('Y')?> Elbrian Langi</p>
</form>
</body>
</html>
