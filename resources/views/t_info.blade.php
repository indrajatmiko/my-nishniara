    <!-- info start -->
    <section class="info d-flex align-items-start justify-content-between pb-12">
      <div class="d-flex align-items-center justify-content-between gap-14">
        <div class="image shrink-0 rounded-full overflow-hidden">
            @if(auth('web')->user())
                <img src="{{ auth('web')->user()->avatar }}" alt="avatar" class="w-100 h-100 object-fit-cover">
            @else
                <img src="../assets/images/home/avatar.png" alt="avatar" class="w-100 h-100 object-fit-cover">
            @endif
        </div>
        <div>
            @auth
                <a href="{{route('userProfile')}}"><h3>Hi, {{ auth('web')->user()->name }}</h3></a>
                <a href="{{route('userMembership')}}">
                <p class="d-flex align-items-center gap-04">
                    <img src="../assets/svg/crown.svg" alt="icon">
                    Classic
                </p></a>
            @else
                <a href="{{route('signin')}}">
                    <h3>Hi, Pelanggan Nishniara</h3>
                    <p class="d-flex align-items-center gap-04">
                        Klik disini untuk Login
                    </p>
                </a>
            @endauth
        </div>
      </div>

      {{-- <ul class="d-flex align-items-center gap-16">
        <li>
          <a href="notification.html" class="d-flex align-items-center justify-content-center rounded-full position-relative">
            <img src="../assets/svg/bell-black.svg" alt="icon">
            <span class="dot"></span>
          </a>
        </li>
        <li>
          <a href="chat/message.html" class="d-flex align-items-center justify-content-center rounded-full position-relative">
            <img src="../assets/svg/message-square-dots.svg" alt="icon">
            <span class="dot"></span>
          </a>
        </li>
      </ul> --}}
    </section>
    <!-- info end -->
