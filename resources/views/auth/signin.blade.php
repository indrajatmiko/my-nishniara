<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Nishniara Rewards</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">

  <!-- bootstrap -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <!-- swiper -->
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

  <!-- jquery ui -->
  <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">

  <!-- common -->
  <link rel="stylesheet" href="../assets/css/common.css">

  <!-- animations -->
  <link rel="stylesheet" href="../assets/css/animations.css">

  <!-- welcome -->
  <link rel="stylesheet" href="../assets/css/welcome.css">

  <!-- home -->
  <link rel="stylesheet" href="../assets/css/home.css">
  <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body class="scrollbar-hidden">
  <!-- splash-screen start -->
  <section id="preloader" class="spalsh-screen">
    <div class="circle text-center">
      <div>
        <h1>NISHNIARA</h1>
        <p>Belanja, Sehat & Untung</p>
      </div>
    </div>
    <div class="loader-spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>
  <!-- splash-screen end -->

  <main class="auth-main">
    <!-- menu, side-menu start -->
    @include('t_side-menu-guest')
    <!-- menu, side-menu end -->

    <!-- signin start -->
    <section class="auth signin">
        <div class="heading">
          <h2>Hi, Selamat datang!</h2>
          <p>Pelanggan setia Nishniara</p>
        </div>

        <div class="form-area auth-form">
          <div class="divider d-flex align-items-center justify-content-center gap-12">
            <span class="d-inline-block"></span>
            <small class="d-inline-block">Lanjutkan dengan</small>
            <span class="d-inline-block"></span>
          </div>

          <div class="d-flex flex-column gap-16">
            <a href="{{ route('redirect') }}" class="social-btn">
              <img src="../assets/svg/icon-google.svg" alt="Google">
              Masuk dengan Google
            </a>
          </div>

          <h6>Login menggunakan akun Google Anda untuk bisa menggunakan aplikasi ini.</h6>
        </div>
      </section>
      <!-- signin end -->

  </main>

    <!-- bottom navigation start -->
        {{-- @include('bottom-nav') --}}
    <!-- bottom navigation end -->


  <!-- jquery -->
  <script src="../assets/js/jquery-3.6.1.min.js"></script>

  <!-- bootstrap -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <!-- jquery ui -->
  <script src="../assets/js/jquery-ui.js"></script>

  <!-- mixitup -->
  <script src="../assets/js/mixitup.min.js"></script>

  <!-- script -->
  <script src="../assets/js/script.js"></script>
</body>
</html>
