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

  <main class="home">
    @include('t_side-menu')
    @include('t_info')

    <!-- search start -->
    {{-- <section class="search py-12">
      <form action="#">
        <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
          <img src="../assets/svg/search.svg" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" placeholder="Search...">
        </div>
      </form>
    </section> --}}
    <!-- search end -->

    <!-- service start -->
    <section class="service py-12">
      <!-- item 1 -->
      <a href="service-location.html">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="../assets/images/home/airport.png" alt="airport" class="img-fluid backface-hidden">
          </div>
          <figcaption>Airport</figcaption>
        </figure>
      </a>

      <!-- item 2 -->
      <a href="service-location.html">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="../assets/images/home/car-rental.png" alt="car" class="img-fluid backface-hidden">
          </div>
          <figcaption>Rental</figcaption>
        </figure>
      </a>

      <!-- item 3 -->
      <a href="service-location.html">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="../assets/images/home/hotel.png" alt="hotel" class="img-fluid backface-hidden">
          </div>
          <figcaption>Hotel</figcaption>
        </figure>
      </a>

      <!-- item 4 -->
      <figure class="item text-center" data-bs-toggle="modal" data-bs-target="#serviceModal">
        <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
          <img src="../assets/images/home/category.png" alt="category" class="img-fluid backface-hidden">
        </div>
        <figcaption>More</figcaption>
      </figure>
    </section>
    <!-- service end -->

    <!-- visited start -->
    <section class="visited py-12">
      <!-- title -->
      <div class="title d-flex align-items-center justify-content-between">
        <h2 class="shrink-0">Frequently visited</h2>
        <div class="custom-pagination visited-pagination"></div>
      </div>

      <div class="swiper visited-swiper">
        <div class="swiper-wrapper">
          <!-- item-1 -->
          <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="../assets/images/home/item-1.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-red.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>Tahiti Beach</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Polynesia, French
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="../assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(32)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- item-2 -->
          <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="../assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-black.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>St. Lucia Mountain</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  South America
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="../assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(41)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- item-3 -->
          <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="../assets/images/home/item-1.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-red.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>Tahiti Beach</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Polynesia, French
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="../assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(32)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- item-4 -->
          <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="../assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="../assets/svg/heart-black.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>St. Lucia Mountain</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  South America
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="../assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(41)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- visited end -->

    <!-- budget start -->
    <section class="budget pt-12">
      <!-- title -->
      <div class="title d-flex align-items-center justify-content-between">
        <h2 class="shrink-0">On Budget Tour</h2>
        <a href="hotels.html" class="shrink-0 d-inline-block">See All</a>
      </div>

      <ul>
        <!-- item 1 -->
        <li>
          <a href="hotel-details.html" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="../assets/images/home/budget-1.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>

            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>Ledadu Beach</h4>
                <h5>3 days 2 nights</h5>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Australia
                </p>
              </div>
              <p class="price"><span>$20</span>/Person</p>
            </div>
          </a>
        </li>

        <!-- item 2 -->
        <li>
          <a href="hotel-details.html" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="../assets/images/home/budget-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>

            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>Endigada Beach</h4>
                <h5>5 days 4 nights</h5>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="../assets/svg/map-marker.svg" alt="icon">
                  Australia
                </p>
              </div>
              <p class="price"><span>$25</span>/Person</p>
            </div>
          </a>
        </li>
      </ul>
    </section>
    <!-- budget end -->
  </main>

@include("t_bottom-nav")

  <!-- service modal start -->
  <div class="modal fade serviceModal bottomModal modalBg" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="../assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">All Services</h1>
        </div>
        <div class="modal-body">
          <!-- item 1 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/airport.png" alt="airport" class="img-fluid backface-hidden">
              </div>
              <figcaption>Airport</figcaption>
            </figure>
          </a>

          <!-- item 2 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/car.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Taxi</figcaption>
            </figure>
          </a>

          <!-- item 3 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/hotel.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Hotel</figcaption>
            </figure>
          </a>

          <!-- item 4 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/villa.png" alt="airport" class="img-fluid backface-hidden">
              </div>
              <figcaption>Villa</figcaption>
            </figure>
          </a>

          <!-- item 5 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/cafe.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Cafe</figcaption>
            </figure>
          </a>

          <!-- item 6 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/luggage.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Luggage</figcaption>
            </figure>
          </a>

          <!-- item 7 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/boat.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Ship</figcaption>
            </figure>
          </a>

          <!-- item 8 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="../assets/images/home/camera.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Camera </figcaption>
            </figure>
          </a>

        </div>
      </div>
    </div>
  </div>
  <!-- service modal end -->

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
