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
  <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body class="scrollbar-hidden">
    @include('t_splash_screen')

    <main class="tour-guide">
        <!-- page-title -->
        <div class="page-title">
            <button type="button" class="back-btn back-page-btn d-flex align-items-center justify-content-center rounded-full">
              <img src="../assets/svg/arrow-left-black.svg" alt="arrow">
            </button>
            <h3 class="main-title">Level Keanggotaan</h3>
          </div>

          <section class="budget px-24 pb-24">
            <ul>
              <!-- item 1 -->
              <li>
                <a href="hotel-details.html" class="d-flex align-items-center gap-12">
                  <div class="image shrink-0 overflow-hidden radius-8">
                    <img src="../assets/images/home/off.webp" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
                  </div>

                  <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                    <div>
                      <h4>CLASSIC</h4>
                      <h5>
                        Keuntungan<br>
                        1<br>
                        2<br>
                      </h5>
                      <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <p class="price"><span>10</span> %</p>
                  </div>
                </a>
              </li>
              <!-- item 2 -->
              <li>
                <a href="hotel-details.html" class="d-flex align-items-center gap-12">
                  <div class="image shrink-0 overflow-hidden radius-8">
                    <img src="../assets/images/home/silver.webp" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
                  </div>

                  <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                    <div>
                      <h4>SILVER</h4>
                      <h5>
                        Keuntungan<br>
                        1<br>
                        2<br>
                      </h5>
                      <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <p class="price"><span>10</span> %</p>
                  </div>
                </a>
              </li>
              <!-- item 2 -->
              <li>
                <a href="hotel-details.html" class="d-flex align-items-center gap-12">
                  <div class="image shrink-0 overflow-hidden radius-8">
                    <img src="../assets/images/home/gold.webp" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
                  </div>

                  <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                    <div>
                      <h4>GOLD</h4>
                      <h5>
                        Keuntungan<br>
                        1<br>
                        2<br>
                      </h5>
                      <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <p class="price"><span>10</span> %</p>
                  </div>
                </a>
              </li>
              <!-- item 2 -->
              <li>
                <a href="hotel-details.html" class="d-flex align-items-center gap-12">
                  <div class="image shrink-0 overflow-hidden radius-8">
                    <img src="../assets/images/home/diamond.webp" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
                  </div>

                  <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
                    <div>
                      <h4>DIAMOND</h4>
                      <h5>
                        Keuntungan<br>
                        1<br>
                        2<br>
                      </h5>
                      <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <p class="price"><span>10</span> %</p>
                  </div>
                </a>
              </li>

            </ul>
          </section>
        <!-- select-btn start -->
        <div class="select-btn bottom-btn px-24 pt-24 pb-36">
        <button type="button" class="btn-primary">Naik Level ke Silver Sekarang!</button>
        </div>
        <!-- select-btn end -->
      </main>

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
