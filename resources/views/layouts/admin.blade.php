<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prenpend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.1/datatables.min.css" />
    @stack('addon-style')

</head>

<body>
    <div class="page-dashboard">
        <!-- Sidebar -->
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="/images/admin.png" alt="" class="my-4" style="max-width: 100px" />
                </div>
                <div class="list-group list-group-flush ">
                    <a href="{{ route('Admindashboard-admin') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('Adminproduct.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/product') ? 'active' : '' }}">
                        Product
                    </a>
                    <a href="{{ route('Adminproduct-gallery.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/product-gallery*') ? 'active' : '' }}">
                        Galleries
                    </a>
                    <a href="{{ route('Admincategory.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}">
                        Categories
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Transactions
                    </a>
                    <a href="{{ route('Adminuser.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/user*') ? 'active' : '' }}">
                        Users
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();"
                        class="list-group-item list-group-item-action">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <!-- Start Navbar -->
                <nav class="navbar navbar-light navbar-expand-lg fixed-top navbar-store" data-aos="fade-down">
                    <div class="container-fluid">
                        <button class="btn btn-secondary px-4 d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                        </button>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarResponsive">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <!-- Desktop Menu -->
                            <ul class="navbar-nav d-none d-lg-flex ml-auto mr-4">
                                <li class="navbar-item dropdown">
                                    <a href="#" class="nav-link" id="navbarDropdown" role="button"
                                        data-toggle="dropdown">
                                        <img src="/images/icon-user.png" alt=""
                                            class="rounded-circle mr-2 profile-picture" />
                                        Hi, User
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="/" class="dropdown-item">Logout</a>
                                    </div>
                                </li>
                            </ul>
                            <!-- Mobile Menu -->
                            <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"> Hi, User </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link d-inline-block"> Cart </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Ends Navbar -->
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    @stack('addon-script')
</body>

</html>
