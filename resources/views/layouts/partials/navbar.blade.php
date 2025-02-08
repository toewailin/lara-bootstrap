<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-2 top-1 px-0 py-1 mx-3 border-radius-lg z-index-sticky blur shadow-blur left-auto" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-2">
    <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
      <a href="javascript:;" class="nav-link p-0">
        <div class="sidenav-toggler-inner">
          <i class="sidenav-toggler-line bg-dark"></i>
          <i class="sidenav-toggler-line bg-dark"></i>
          <i class="sidenav-toggler-line bg-dark"></i>
        </div>
      </a>
    </div>
    <nav aria-label="breadcrumb" class="ps-2">
      <ol class="breadcrumb bg-transparent mb-0 p-0">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">{{ __('messages.pages') }}</a></li>
        <li class="breadcrumb-item text-sm text-dark active font-weight-bold" aria-current="page">{{ __('messages.analytics') }}</li>
      </ol>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group input-group-outline">
          <label class="form-label">{{ __('messages.search_here') }}</label>
          <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
      </div>
      <ul class="navbar-nav  justify-content-end">
        <!-- Language Dropdown -->
        <li class="nav-item dropdown">
          <a href="javascript:;" class="nav-link py-0 px-1 position-relative line-height-0" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded">language</i>
            <!-- Dynamic flag icon -->
            <!-- <img src="{{ asset('assets/img/icons/flags/' . App::getLocale() . '.png') }}" alt="{{ App::getLocale() }}" class="me-2" width="20" height="14"> -->
            <!-- <span>{{ strtoupper(App::getLocale()) }}</span> -->
          </a>
          <ul class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="languageDropdown">
            <li>
              <a class="dropdown-item border-radius-md" href="{{ route('language.switch', 'en') }}">
                <div class="d-flex align-items-center py-1">
                <img src="{{ asset('assets/img/icons/flags/en.png') }}" alt="English" class="me-2" width="20" height="14"> <!-- USA Flag for English -->
                  <div class="ms-2">
                    <h6 class="text-sm font-weight-normal my-auto">English</h6>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item border-radius-md" href="{{ route('language.switch', 'my') }}">
                <div class="d-flex align-items-center py-1">
                  <img src="{{ asset('assets/img/icons/flags/my.png') }}" alt="English" class="me-2" width="20" height="14"> <!-- Myanmar Flag -->
                  <div class="ms-2">
                    <h6 class="text-sm font-weight-normal my-auto">မြန်မာ</h6>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item border-radius-md" href="{{ route('language.switch', 'kr') }}">
                <div class="d-flex align-items-center py-1">
                  <img src="{{ asset('assets/img/icons/flags/kr.png') }}" alt="English" class="me-2" width="20" height="14"> <!-- South Korea Flag -->
                  <div class="ms-2">
                    <h6 class="text-sm font-weight-normal my-auto">한국어</h6>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li>


        <!-- Profile Dropdown -->
        <li class="nav-item dropdown">
          <a href="javascript:;" class="nav-link py-0 px-1 position-relative line-height-0" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded">account_circle</i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="profileDropdown">
          <li class="mb-2">
            <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex align-items-center py-1">
                <span class="material-symbols-rounded">person</span>
                <div class="ms-2">
                    <h6 class="text-sm font-weight-normal my-auto">{{ __('messages.profile') }}</h6>
                </div>
                </div>
            </a>
            </li>
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex align-items-center py-1">
                  <span class="material-symbols-rounded">settings</span>
                  <div class="ms-2">
                    <h6 class="text-sm font-weight-normal my-auto">Settings</h6>
                  </div>
                </div>
              </a>
            </li>
            <li>
                <a class="dropdown-item border-radius-md" href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="d-flex align-items-center py-1">
                    <span class="material-symbols-rounded">logout</span>
                    <div class="ms-2">
                        <h6 class="text-sm font-weight-normal my-auto">Logout</h6>
                    </div>
                    </div>
                </a>
                </li>
                <!-- Logout Form (hidden) -->
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
                </form>
          </ul>
        </li>

        <li class="nav-item">
          <a href="javascript:;" class="nav-link py-0 px-1 line-height-0">
            <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
          </a>
        </li>
        <li class="nav-item dropdown py-0 pe-3">
          <a href="javascript:;" class="nav-link py-0 px-1 position-relative line-height-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-symbols-rounded">notifications</i>
            <span class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger border border-white small py-1 px-2">
              <span class="small">11</span>
              <span class="visually-hidden">unread notifications</span>
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex align-items-center py-1">
                  <span class="material-symbols-rounded">email</span>
                  <div class="ms-2">
                    <h6 class="text-sm font-weight-normal my-auto">Check new messages</h6>
                  </div>
                </div>
              </a>
            </li>
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex align-items-center py-1">
                  <span class="material-symbols-rounded">podcasts</span>
                  <div class="ms-2">
                    <h6 class="text-sm font-weight-normal my-auto">Manage podcast session</h6>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex align-items-center py-1">
                  <span class="material-symbols-rounded">shopping_cart</span>
                  <div class="ms-2">
                    <h6 class="text-sm font-weight-normal my-auto">Payment successfully completed</h6>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-dark"></i>
              <i class="sidenav-toggler-line bg-dark"></i>
              <i class="sidenav-toggler-line bg-dark"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
