<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Happy Feet's Venture | Admin</title>

    <!-- Favicons -->
    {{-- <link href="assets/images/favicon.png" rel="icon">
    <link href="assets/images/favicon.png" rel="apple-touch-icon"> --}}
    <!-- material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('admin/assets/css/styles.css') }}" rel="stylesheet" />

    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">

    <!-- image uploader css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/image-uploader.min.css') }}">

</head>

<style>
    .alert-success {
        background-color: green;
        color: white;
    }

    .alert-danger {
        background-color: red;
        color: white;
    }
</style>

<body>


    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div id="sidebar-wrapper" class="bg-dark">

            <div id="adminsidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">

                    <div class="dropdown">
                        <a href="#"
                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/images/toor-logo.png') }}" alt="" width="32"
                                height="32" class="rounded-circle me-2">
                            <strong>Tours Trekking</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

                            <li><a class="dropdown-item" href="{{ route('logout.user') }}">Sign out</a></li>
                        </ul>
                    </div>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">

                    <li>
                        <a href="{{ route('user.admin') }}" class="nav-link"
                            style="{{ Route::is('user.admin') ? 'font-weight: 800;color:#00a3c8' : '' }}">
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.events') }}" class="nav-link"
                            style="{{ Route::is('admin.events') ? 'font-weight: 800;color:#00a3c8' : '' }}">
                            Events
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.users') }}" class="nav-link"
                            style="{{ Route::is('admin.users') ? 'font-weight: 800;color:#00a3c8' : '' }}">
                            Users
                        </a>
                    </li>

                    {{-- <li>
                        <a href="{{ route('admin.enquiry') }}" class="nav-link">
                            Enquiries
                        </a>
                    </li> --}}

                    <li>
                        <a href="{{ route('admin.bookings') }}" class="nav-link"
                            style="{{ Route::is('admin.bookings') ? 'font-weight: 800;color:#00a3c8' : '' }}">
                            Bookings
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.gallary') }}" class="nav-link"
                            style="{{ Route::is('admin.gallary') ? 'font-weight: 800;color:#00a3c8' : '' }}">
                            Gallary
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.blogs') }}" class="nav-link"
                            style="{{ Route::is('admin.blogs') ? 'font-weight: 800;color:#00a3c8' : '' }}">
                            Blogs
                        </a>
                    </li>



                </ul>

            </div>

        </div>


        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg bluebg">
                <div class="container-fluid d-flex">

                    <button id="sidebarToggle">
                        <span class="material-icons">
                            menu
                        </span>
                    </button>


                    <button id="navbartogglerbtn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">

                        <span class="material-icons">
                            more_vert
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item"><a class="nav-link text-white" href="{{ route('Home') }}">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @if ($message = Session::pull('success'))
                <div class="alert alert-success  fade show alert-dismissible" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif ($message = Session::pull('error'))
                <div class="alert alert-danger  fade show alert-dismissible" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')


        </div>
    </div>



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/image-uploader.min.js') }}"></script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/calendar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/properties-dynamicfields.js') }}"></script>


</body>

</html>
