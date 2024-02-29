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

  <!-- datepicker -->
  <link rel="stylesheet" href="../assets/css/jquery.datetimepicker.css">

  <!-- jquery ui -->
  <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">

  <!-- common -->
  <link rel="stylesheet" href="../assets/css/common.css">

  <!-- animations -->
  <link rel="stylesheet" href="../assets/css/animations.css">

  <!-- welcome -->
  <link rel="stylesheet" href="../assets/css/welcome.css">

  <!-- home -->
  <link rel="stylesheet" href="../assets/css/profile.css">
</head>
<body class="scrollbar-hidden">
    @include('t_splash_screen')

    <main class="user-profile">
        <!-- profile-heading start -->
        <section class="user-profile-heading d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-12">
            <div class="image rounded-full overflow-hidden shrink-0">
              <img src="{{ auth('web')->user()->avatar }}" alt="avatar" class="w-100 h-100 object-fit-cover">
            </div>
            <div>
              <h3>{{ auth('web')->user()->name }}</h3>
              <p class="d-flex align-items-center gap-04 location mt-04">
                <img src="../assets/svg/crown.svg" alt="icon">
                Classic
              </p>
            </div>
          </div>

          {{-- <a href="user-info.html" class="edit-info">
            <img src="../assets/svg/edit.svg" alt="icon">
          </a> --}}
        </section>
        <!-- profile-heading end -->

        <!-- user-personal start -->
        <section class="user-personal">
          <!-- Personal Info -->
          <div class="mt-32">
            <h4 class="mb-16">Informasi Saya</h4>
            <ul class="setting-list">
              <li>
                <a href="{{ route('userAddress') }}" class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-12 shrink-0">
                    <img src="../assets/svg/location.svg" alt="icon">
                    <p>Alamat Pengiriman</p>
                  </div>

                  <img src="../assets/svg/chevron-right.svg" alt="Icon">
                </a>
              </li>
              <li>
                <a href="{{ route('userMembership')}}" class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-12 shrink-0">
                    <img src="../assets/svg/crown.svg" alt="icon">
                    <p>Level Keanggotaan</p>
                  </div>

                  <img src="../assets/svg/chevron-right.svg" alt="Icon">
                </a>
              </li>
            </ul>
          </div>

          <!-- About -->
          <div class="mt-32">
            <h4 class="mb-16">Tentang Kami</h4>
            <ul class="setting-list">
              <li>
                <a href="{{route('legalPolicy')}}" class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-12 shrink-0">
                    <img src="../assets/svg/shield-round.svg" alt="icon">
                    <p>Legal and Policies</p>
                  </div>

                  <img src="../assets/svg/chevron-right.svg" alt="Icon">
                </a>
              </li>
              <li>
                <a href="{{route('helpSupport')}}" class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-12 shrink-0">
                    <img src="../assets/svg/question.svg" alt="icon">
                    <p>Butuh Bantuan atau Pertanyaan ?</p>
                  </div>

                  <img src="../assets/svg/chevron-right.svg" alt="Icon">
                </a>
              </li>
              <li>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-12 shrink-0">
                    <img src="../assets/svg/activity.svg" alt="icon">
                    <p class="mode-text">Dark Mode</p>
                  </div>

                  <label class="toggle-switch">
                    <input type="checkbox" class="mode-switch" id="check-mode">
                    <span class="slider"></span>
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <!-- user-personal end -->

        <!-- logout button start -->
        <div class="py-32">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn-primary-outline" type="submit">Log Out</button>
            </form>
        </div>
        <!-- logout button end -->
      </main>

@include("t_bottom-nav")

  <!-- jquery -->
  <script src="../assets/js/jquery-3.6.1.min.js"></script>

  <!-- bootstrap -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <!-- jquery ui -->
  <script src="../assets/js/jquery-ui.js"></script>

  <!-- mixitup -->
  <script src="../assets/js/mixitup.min.js"></script>

  <!-- gasp -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js" integrity="sha512-7Au1ULjlT8PP1Ygs6mDZh9NuQD0A5prSrAUiPHMXpU6g3UMd8qesVnhug5X4RoDr35x5upNpx0A6Sisz1LSTXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- draggable -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/Draggable.min.js" integrity="sha512-cH7KUCBfNo7w1M0TJHkVOzw+WsGnNv1T3UdeVSuAyIhp0yHsRbvrLx3JChj+Mp8Lg3Rz359by0MuIiPVJzx/Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- swiper -->
  <script src="../assets/js/swiper-bundle.min.js"></script>

  <!-- datepicker -->
  <script src="../assets/js/jquery.datetimepicker.full.js"></script>

  <!-- google-map api -->
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap" type="text/javascript" loading=async></script> --}}

  <!-- script -->
  <script src="../assets/js/script.js"></script>
</body>
</html>
