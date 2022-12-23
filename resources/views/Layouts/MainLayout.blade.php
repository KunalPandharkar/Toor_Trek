<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <meta name="description" content="#">
    <title>Trek - Travels | @yield('title')</title>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon.ico">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/font/flaticon.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/ion.rangeSlider.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/datepicker.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->

    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

</head>

<body>

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

    @if ($header)
        {{-- Navbar Starts --}}
        <header class="header">

            @if ($topbar)

                <div class="topbar bg-custom-blue">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="left-side">
                                    <ul class="custom-flex">
                                        <li>
                                            <a href="#" class="text-custom-white">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-custom-white">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-custom-white">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-custom-white">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @guest
                                <div class="col-sm-6">
                                    <div class="right-side">
                                        <ul class="custom-flex">
                                            <li>
                                                <a href="{{ route('login') }}" class="text-custom-white">Login</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}" class="text-custom-white">Signup</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            @endguest

                            @auth
                                <div class="col-sm-6">
                                    <div class="right-side">
                                        <ul class="custom-flex">

                                            @if (Auth::user()->isAdmin)
                                                <li>
                                                    <a href="{{ route('user.admin') }}" class="text-custom-white">Admin
                                                        Panel</a>
                                                </li>
                                            @endif



                                            <li>
                                                <a href="{{ route('logout.user') }}" class="text-custom-white">Logout</a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>

            @endif


            <div class="navigation p-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-navigation">
                                <div class="logo">
                                    <a href="{{ route('Home') }}">
                                        <img src="{{ asset('assets/images/toor-logo.png') }}"
                                            class="logo-main img-fluid image-fit" alt="img">
                                    </a>
                                </div>
                                <div class="main-menu">
                                    <div class="logo">
                                        <a href="{{ route('Home') }}">
                                            <img src="{{ asset('assets/images/toor-logo.png') }}"
                                                class="img-fluid image-fit" alt="img">
                                        </a>
                                    </div>
                                    <nav>
                                        <ul class="custom-flex">
                                            <li class="menu-item {{ Route::is('Home') ? 'active' : '' }}">
                                                <a href="{{ route('Home') }}" class="text-light-dark">Home</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#" class="text-light-dark">Event Categories</a>
                                                <ul class="custom sub-menu">

                                                    @php
                                                        $events = \App\Models\EventCategory::all();
                                                    @endphp

                                                    @if (!empty($events))

                                                        @foreach ($events as $event)
                                                            <li class="menu-item ">
                                                                <a href="{{ route('toor.list', $event) }}"
                                                                    class="text-custom-white">{{ $event->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <li class="menu-item">
                                                            <a href="#" class="text-custom-white">No Events</a>
                                                        </li>
                                                    @endif



                                                </ul>
                                            </li>
                                            <li class="menu-item {{ Route::is('album.all') ? 'active' : '' }} ">
                                                <a href="{{ route('album.all') }}"
                                                    class="text-light-dark">Gallary</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#blogs"
                                                    class="text-light-dark">Blogs</a>
                                            </li>
                                            <li class="menu-item {{ Route::is('Aboutus') ? 'active' : '' }} ">
                                                <a href="{{ route('Aboutus') }}" class="text-light-dark">About us</a>
                                            </li>
                                            
                                            <li class="menu-item  {{ Route::is('Contactus') ? 'active' : '' }}">
                                                <a href="{{ route('Contactus') }}" class="text-light-dark">Contact
                                                    Us</a>
                                            </li>
                                    
                                            @auth
                                                <li class="menu-item  {{ Route::is('user.profile') ? 'active' : '' }}">
                                                    <a href="{{ route('user.profile') }}" class="text-light-dark">MY
                                                        Profile</a>
                                                </li>
                                            @endauth
                                        </ul>
                                    </nav>
                                    <div class="cta-btn">
                                        <a href="#footer" class="btn-first btn-submit">Enquiry Now</a>
                                    </div>
                                </div>
                                <div class="hamburger-menu">
                                    <div class="menu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        {{-- Navbar Ends --}}
    @endif


    @if ($message = Session::pull('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif ($message = Session::pull('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @yield('content')


    @if ($blog)
      
    @endif

    @if ($footer)
      

        <footer class="section-padding footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box mb-md-40">
                            <h4 class="text-custom-white fw-600">About Us</h4>
                            <p class="text-custom-white">It all began with the trek in 1992. A Such existed outside the
                                realm of standard travel itineraries. And rest, as they say, was history..</p>
                            <p class="text-custom-white">
                                Starting off with one tour in Delhi, we have now grown to 10 with us
                            </p>
                            <ul class="custom-flex socials">
                                <li><a href="#" class="text-custom-white fs-14"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="text-custom-white fs-14"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#" class="text-custom-white fs-14"><i
                                            class="fab fa-linkedin"></i></a>
                                </li>
                                <li><a href="#" class="text-custom-white fs-14"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box mb-md-40">
                            <h4 class="text-custom-white fw-600">Quick Links</h4>
                            <ul class="custom links">
                                <li>
                                    <a href="{{ route('Home') }}" class="text-custom-white">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('album.all') }}" class="text-custom-white">Gallary</a>
                                </li>




                                @forelse ($events as $eve)
                                    <li>
                                        <a href="{{ route('toor.list', $eve) }}"
                                            class="text-custom-white">{{ $eve->title }}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box mb-sm-40">
                            <h4 class="text-custom-white fw-600">Instagram</h4>
                            <ul class="custom instagram gallery-grid">
                                <li>
                                    <a href="{{ asset('assets/images/gallery/g_gal_1.jpg') }}"
                                        class="text-custom-white popup">
                                        <img src="{{ asset('assets/images/gallery/g_gal_1.jpg') }}" class="image-fit"
                                            alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/gallery/g_gal_2.jpg') }}"
                                        class="text-custom-white popup">
                                        <img src="{{ asset('assets/images/gallery/g_gal_2.jpg') }}" class="image-fit"
                                            alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/gallery/g_gal_3.jpg') }}"
                                        class="text-custom-white popup">
                                        <img src="{{ asset('assets/images/gallery/g_gal_3.jpg') }}" class="image-fit"
                                            alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/gallery/g_gal_4.jpg') }}"
                                        class="text-custom-white popup">
                                        <img src="{{ asset('assets/images/gallery/g_gal_4.jpg') }}" class="image-fit"
                                            alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/gallery/g_gal_5.jpg') }}"
                                        class="text-custom-white popup">
                                        <img src="{{ asset('assets/images/gallery/g_gal_5.jpg') }}" class="image-fit"
                                            alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/gallery/g_gal_6.jpg') }}"
                                        class="text-custom-white popup">
                                        <img src="{{ asset('assets/images/gallery/g_gal_6.jpg') }}" class="image-fit"
                                            alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/gallery/g_gal_7.jpg') }}"
                                        class="text-custom-white popup">
                                        <img src="{{ asset('assets/images/gallery/g_gal_7.jpg') }}" class="image-fit"
                                            alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/gallery/g_gal_8.jpg') }}"
                                        class="text-custom-white popup">
                                        <img src="{{ asset('assets/images/gallery/g_gal_8.jpg') }}" class="image-fit"
                                            alt="img">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/gallery/g_gal_9.jpg') }}"
                                        class="text-custom-white popup">
                                        <img src="{{ asset('assets/images/gallery/g_gal_9.jpg') }}" class="image-fit"
                                            alt="img">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box mb-sm-40">
                            <h4 class="text-custom-white fw-600">Enquire Now</h4>
                            <div class="newsletter">
                                <p class="text-custom-white">Starting off with one tour in Delhi, we have now grown to
                                    10 tours covering two </p>
                                <form method="POST" action="{{ route('save.enquiry') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-custom"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="destination"
                                            class="form-control form-control-custom" placeholder="Destination">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="date" class="form-control form-control-custom"
                                            placeholder="Department Date">
                                    </div>
                                    <button type="submit" class="btn-first btn-submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-custom-white">© Toor - 2023 | All Right Reserved. <a
                                href="https://www.codezion.com/" class="text-custom-white">Designed & Developed By
                                Sayali Wagh</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif



    <div id="back-top" class="back-top">
        <a href="#top"><i class="flaticon-arrows"></i></a>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>

    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.en.js') }}"></script>

    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        setTimeout(function() {
            $('#alert').remove();
        }, 5000);
    </script>

</body>

<!-- Mirrored from www.codezion.com/themes/html/toor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 16:59:17 GMT -->

</html>
