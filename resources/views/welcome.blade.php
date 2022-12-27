@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => true])
@section('title', 'Home')

@section('content')



    {{-- Hero Section --}}
    <div class="slider p-relative">
        <div class="main-banner arrow-layout-1 ">
            <div class="slide-item">
                <img src="{{ asset('assets/images/IMG20220530100004.jpg') }}" class="image-fit" alt="Slider">
                <div class="transform-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider-content">
                                    <h1 class="text-custom-white">Let's Discover the <span
                                            class="text-custom-blue">Kedarnath</span> together!
                                    </h1>
                                    <ul class="custom">
                                        <li class="text-custom-white">
                                            <i class="fas fa-plane"></i>
                                            Over 500 Trips
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-map-marker-alt"></i>
                                            More than 50 places
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-dollar-sign"></i>
                                            Best Price Guarantee
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-comments"></i>
                                            Customer Care
                                        </li>
                                    </ul>
                                    <a href="#" class="btn-first btn-small">Find Out More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <img src="{{ asset('assets/images/Aadrai_Jungle_Trek-24.jpg') }}" class="image-fit" alt="Slider">
                <div class="transform-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider-content">
                                    <h1 class="text-custom-white"> <span class="text-custom-blue">Aadrai Trek</span>
                                        - the unexplored jungle trek !
                                    </h1>
                                    <ul class="custom">
                                        <li class="text-custom-white">
                                            <i class="fas fa-plane"></i>
                                            Over 500 Trips
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-map-marker-alt"></i>
                                            More than 50 places
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-dollar-sign"></i>
                                            Best Price Guarantee
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-comments"></i>
                                            Customer Care
                                        </li>
                                    </ul>
                                    <a href="hotels.html" class="btn-first btn-small">Find Out More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <img src="{{ asset('assets/images/WhatsApp_Image_2022-02-24_at_16_14_59.jpeg') }}" class="image-fit"
                    alt="Slider">
                <div class="transform-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider-content">
                                    <h1 class="text-custom-white">Upto 25% off on first booking <span
                                            class="text-custom-blue">Alibaug Beach</span>
                                    </h1>
                                    <ul class="custom">
                                        <li class="text-custom-white">
                                            <i class="fas fa-dollar-sign"></i>
                                            Best Price Guaranteed
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-car"></i>
                                            Home Pickups
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-laptop"></i>
                                            Easy Bookings
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-headphones-alt"></i>
                                            24/7 Customer Care
                                        </li>
                                    </ul>
                                    <a href="cruise.html" class="btn-first btn-small">Find Out More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="banner-tabs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tabs">
                        <ul class="custom-flex nav nav-tabs">

                            @if (!$eventsTitles->isEmpty())


                                @forelse ($eventsTitles as $event)
                                    <li class="nav-item">
                                        <a class="nav-link  @if ($loop->first) active @endif"
                                            href="{{ route('toor.list', $event) }}">{{ $event->title }}</a>
                                    </li>
                                @empty
                                @endforelse
                        </ul>



                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Hero Section End --}}


    {{-- Trips Card --}}

    {{-- @forelse ($eventsTitles as $eventCat)
        <section class="section-padding hotels-sec bg-light-white">
            <div class="container">
                <div class="section-header">
                    <div class="section-heading">
                        <h3 class="text-custom-black">{{ $eventCat->title }}</h3>
                        <div class="section-description">
                            <p class="text-light-dark">{{ $eventCat->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="hotel-slider arrow-layout-2 row">
                            @php
                                $tours = \App\Models\EventInfo::where('event_category_id',$eventCat->id)->get();
                            @endphp

                            @forelse ($tours as $tour)
                            <div class="slide-item col-12">
                                <div class="hotel-grid">
                                    <div class="hotel-grid-wrapper bx-wrapper">
                                        <div class="image-sec animate-img">
                                            <a href="{{route('toor.info',$tour)}}">
                                                <img src="{{ asset('storage' . $tour->image) }}" class="full-width" alt="img">
                                            </a>
                                        </div>
                                        <div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
                                            <h4 class="title fs-5"><a href="{{route('toor.info',$tour)}}"
                                                    class="text-custom-black">{{$tour->title}}<small
                                                        class="text-light-dark">{{$tour->destination}}</small></a></h4>
                                            <span class="price"><small>{{$tour->duration}}</small>₹{{$tour->price}}</span>
                                            
                                            

                                            
                                            <div class="action">
                                                <a class=" btn-first btn-submit" href="{{route('toor.info',$tour)}}">View</a>
                                                <a class="btn-second btn-small" href="{{route('toor.booking',$tour)}}">Book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                
                            @endforelse

                           

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @empty
    @endforelse  --}}


    @forelse ($eventsTitles as $eventCat)
        @if ($eventCat->Eventinfos()->count())
            <section class="section-padding bg-light-white our_articles">
                <div class="container">
                    <div class="section-header">
                        <div class="section-heading">
                            <h3 class="text-custom-black">{{ $eventCat->title }}</h3>
                            <div class="section-description">
                                <p class="text-light-dark">{{ $eventCat->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-slider arrow-layout-2 row">

                                @php
                                    $tours = \App\Models\EventInfo::where('event_category_id', $eventCat->id)->get();
                                @endphp

                                @forelse ($tours as $tour)
                                    <article class="col-12 post slide-item">
                                        <div class="post-wrapper bx-wrapper">
                                            <div class="post-img animate-img">
                                                <a href="{{ route('toor.info', $tour) }}">
                                                    <img src="{{ asset('storage' . $tour->image) }}" class="full-width"
                                                        alt="img">
                                                </a>
                                                <div class="post-date">
                                                    <div class="text-custom-white fw-600 date bg-custom-blue2">
                                                        {{ date('d', strtotime($tour->departure)) }}</div>
                                                    <div class="text-custom-white year">
                                                        {{ date('M', strtotime($tour->departure)) }}
                                                        {{ date('Y', strtotime($tour->departure)) }}</div>
                                                </div>
                                            </div>
                                            <div class="blog-meta padding-20 bg-custom-white p-relative">
                                                <div class="post-meta ">
                                                    <a href="{{ route('toor.info', $tour) }}" class="text-light-dark mr-4"
                                                        style="text-transform:uppercase">
                                                        <span class="text-custom-blue">
                                                            <i class="fas fa-clock"></i>
                                                        </span> {{ $tour->duration }}

                                                    </a>

                                                    <a href="{{ route('toor.info', $tour) }}" class="text-light-dark "
                                                        style="text-transform:uppercase">
                                                        <span class="text-custom-blue">
                                                            <i class="fas fa-plane text-gray"></i>
                                                        </span>₹{{ $tour->price }}

                                                    </a>

                                                </div>

                                                <div class="post-meta mb-xl-20">
                                                    <a href="{{ route('toor.info', $tour) }}"
                                                        class="text-light-dark mr-1" style="text-transform:uppercase">
                                                        <span class="text-custom-blue">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </span> {{ $tour->destination }}
                                                    </a>
                                                </div>
                                                <div class="post-heading">
                                                    <h2>
                                                        <a href="{{ route('toor.info', $tour) }}"
                                                            class="text-custom-black fw-600 fs-20">{{ $tour->title }}</a>
                                                    </h2>
                                                    <p class="text-light-dark no-margin">{{ $eventCat->description }}
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="post-footer">
                                                <div class="action">
                                                    <a class="btn-second btn-small bg-custom-blue2"
                                                        href="{{ route('toor.info', $tour) }}">View</a>
                                                </div>
                                                <div class="action">
                                                    <a class="btn-second btn-small"
                                                        href="{{ route('toor.booking', $tour) }}">Book</a>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @empty
    @endforelse






    {{-- Trips Card End --}}



    <section class="section-padding our-work-sec">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h3 class="text-custom-black">Photo Gallary</h3>
                    <div class="section-description">
                        <p class="text-light-dark">Starting off with one tour in Delhi, we have now grown to
                            10 tours covering two.</p>
                    </div>
                </div>
                @if ($album1)
                    <div class="section-btn mb-xl-20">
                        <a href="{{ route('album.all', $album1) }}" class="btn-first btn-small">View All</a>
                    </div>
                @endif

            </div>
            <div class="row">
                @if ($album1)
                    <div class="col-lg-6">
                        <div class="work-sec animate-img first-box">
                            <a href="{{ route('album.all', $album1) }}">
                                <img src="{{ asset('storage' . $album1->cover) }}" class="image-fit" alt="img">
                                <div class="text-wrapper">
                                    <h2 class="text-custom-white no-margin fw-600">{{ $album1->albumtitle }}</h2>
                                    <p class="text-custom-white no-margin">{{ $album1->images()->count() }} photos</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
                <div class="col-lg-6">
                    <div class="row">
                        @if ($album2)
                            <div class="col-sm-6">
                                <div class="work-sec animate-img">
                                    <a href="{{ route('album.all', $album1) }}">
                                        <img src="{{ asset('storage' . $album2->cover) }}" class="image-fit"
                                            alt="img">
                                        <div class="text-wrapper">
                                            <h2 class="text-custom-white no-margin fw-600">{{ $album2->albumtitle }}</h2>
                                            <p class="text-custom-white no-margin">{{ $album2->images()->count() }} photos
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                        @if ($album3)
                            <div class="col-sm-6">
                                <div class="work-sec animate-img">
                                    <a href="{{ route('album.all', $album1) }}">
                                        <img src="{{ asset('storage' . $album3->cover) }}" class="image-fit"
                                            alt="img">
                                        <div class="text-wrapper">
                                            <h2 class="text-custom-white no-margin fw-600">{{ $album3->albumtitle }}</h2>
                                            <p class="text-custom-white no-margin">{{ $album3->images()->count() }} photos
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        @if ($album4)
                            <div class="col-12">
                                <div class="work-sec animate-img">
                                    <a href="{{ route('album.all', $album1) }}">
                                        <img src="{{ asset('storage' . $album4->cover) }}" class="image-fit"
                                            alt="img">
                                        <div class="text-wrapper">
                                            <h2 class="text-custom-white no-margin fw-600">{{ $album4->albumtitle }}</h2>
                                            <p class="text-custom-white no-margin">{{ $album4->images()->count() }} photos
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="section-padding bg-light-white our_articles" id="blogs">
        <div class="container" >
            <div class="section-header">
                <div class="section-heading">
                    <h3 class="text-custom-black">Our Blog</h3>
                    <div class="section-description">
                        <p class="text-light-dark">One of the finest forts built in Satara District, Maharashtra, India, is
                            Mahimangad Fort. This forts fortification is still strong and looks goods about 3200 feet above
                            sea level.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-slider arrow-layout-2 row">

                        @forelse ($blogs as $blog)
                            <article class="col-12 post slide-item">
                                <div class="post-wrapper bx-wrapper">
                                    <div class="post-img animate-img">
                                        <a href="{{route('blog.info',$blog)}}">
                                            <img src="{{ asset('storage' . $blog->image) }}" class="full-width"
                                                alt="img">
                                        </a>
                                       
                                    </div>
                                    <div class="blog-meta padding-20 bg-custom-white p-relative">
                                        <div class="post-meta mb-xl-20">
                                            <a href="{{route('blog.info',$blog)}}" class="text-light-dark mr-1">
                                                <span class="text-custom-blue">
                                                    <i class="fas fa-comment"></i>
                                                </span> 10 Comments
                                            </a>
                                            <a href="{{route('blog.info',$blog)}}" class="text-light-dark mr-1">
                                                <span class="text-custom-blue">
                                                    <i class="fas fa-thumbs-up"></i>
                                                </span> 2 Likes
                                            </a>
                                        </div>
                                        <div class="post-heading">
                                            <h2>
                                                <a href="{{route('blog.info',$blog)}}l"
                                                    class="text-custom-black fw-600 fs-20">{{$blog->title}}</a>
                                            </h2>
                                            <p class="text-light-dark no-margin">{{$blog->specialtext}}</p>
                                        </div>
                                    </div>
                                    <div class="post-footer">
                                        <div class="post-author">
                                            <cite class="text-custom-black">Post By <a href="{{route('blog.info',$blog)}}">{{$blog->user}}</a></cite>
                                        </div>
                                        <a href="{{route('blog.info',$blog)}}" class="text-custom-blue fs-14 fs-600">Read
                                            More</a>
                                    </div>
                                </div>
                            </article>
                        @empty
                        @endforelse





                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
