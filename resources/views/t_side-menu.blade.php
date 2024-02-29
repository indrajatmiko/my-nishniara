<section class="wrapper dz-mode">
      <!-- menu -->
      <div class="menu">
        <button class="toggle-btn">
          <img src="../assets/svg/menu/burger-white.svg" alt="" class="icon">
        </button>
        <div class="btn-grp d-flex align-items-center gap-16">
          <label for="mode-change" class="mode-change d-flex align-items-center justify-content-center">
            <input type="checkbox" id="mode-change">
            <img src="../assets/svg/menu/sun-white.svg" alt="icon" class="sun">
            <img src="../assets/svg/menu/moon-white.svg" alt="icon" class="moon">
          </label>
          <a href="{{ route('userProfile') }}">
            <img src="../assets/svg/menu/profile-white.svg" alt="icon">
          </a>
        </div>
      </div>
      <div class="m-menu__overlay"></div>
      <!-- main menu -->
      <div class="m-menu">
        <div class="m-menu__header">
          <button class="m-menu__close">
            <img src="../assets/svg/menu/close-white.svg" alt="icon">
          </button>
          <div class="menu-user">
            @if(auth('web')->user())
                <img src="{{ auth('web')->user()->avatar }}" alt="avatar">
            @else
                <img src="../assets/images/home/avatar.png" alt="avatar">
            @endif
            <div >
                @auth
                    <a href="#!">{{ auth('web')->user()->name }}</a>
                    <h3>
                        Verified user · Membership
                    </h3>
                @else
                    <a href="#!">Pelanggan Nishniara</a>
                    <h3>
                        Tamu
                    </h3>
                @endauth
            </div>
          </div>
        </div>
        <ul>
          <li>
            <h2 class="menu-title">menu</h2>
          </li>

          <li>
              <a href="home.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="../assets/svg/menu/pie-white.svg" alt="">
                  </span>
                  overview
                </div>
                <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
              <a href="https://devsaidul.com/tm2/html/preview/page.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="../assets/svg/menu/page-white.svg" alt="">
                  </span>
                  pages
                </div>
                <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
            <h2 class="menu-title">others</h2>
          </li>

          <li>
            <label class="a-label__chevron" for="item-4">
              <span class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="../assets/svg/menu/grid-white.svg" alt="">
                </span>
                components
              </span>
              <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-4" name="item-4" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-4">
                  <img src="../assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">components</span>
              </div>
              <ul>
                <li>
                  <a href="https://devsaidul.com/tm2/html/preview/components/splash-screen.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      splash screen
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <label class="a-label__chevron" for="item-5">
              <span class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="../assets/svg/menu/gear-white.svg" alt="">
                </span>
                settings
              </span>
              <img src="../assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-5" name="item-5" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-5">
                  <img src="../assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">settings</span>
              </div>
              <ul>
                <li>
                  <a href="profile/user-address.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      My Address
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/user-payment.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Payment Method
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/change-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Change Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/forgot-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Forgot Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/security.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Security
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/user-language.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Language
                    </div>
                  </a>
                </li>
                <li>
                  <a href="profile/notifications.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="../assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Notifications
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dz-switch">
            <div class="a-label__chevron">
              <div class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="../assets/svg/menu/moon-white.svg" alt="">
                </span>
                switch to dark mode
              </div>
              <label class="toggle-switch" for="enableMode">
                <input type="checkbox" id="enableMode" class="mode-switch">
                <span class="slider"></span>
              </label>
            </div>
          </li>
        </ul>
      </div>
      <!-- end main menu -->
    </section>
