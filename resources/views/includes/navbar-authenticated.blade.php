<!-- Start Navbar -->
<nav class="
  navbar navbar-light navbar-expand-lg
  fixed-top
  navbar-store navbar-fixed-top
" data-aos="fade-down">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="/images/logo.svg" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/categories.html" class="nav-link">Categories</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Rewards</a>
                </li>
            </ul>
            <!-- Desktop Menu -->
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="navbar-item dropdown">
                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture" />
                        Hi, User
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                        <a href="{{route('dashboard-setting-account')}}" class="dropdown-item">Setting</a>
                        <div class="dropdown-divider"></div>
                        <a href="/" class="dropdown-item">Logout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/cart" class="nav-link d-inline-block mt-2">
                        <img src="/images/icon-cart-empty.svg" alt="" />
                    </a>
                </li>
            </ul>
            <!-- Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="#" class="nav-link"> Hi, User </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('cart')}}" class="nav-link d-inline-block"> Cart </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Ends Navbar -->
