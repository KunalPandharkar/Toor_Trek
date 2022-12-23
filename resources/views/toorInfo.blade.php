@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => false])
@section('title', 'About Us')

@section('content')

    <style>

    </style>

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">{{ $tour->title }} Details</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="index.html" class="text-custom-white">Home</a>
                        </li>
                        <li class="fw-500">
                            <a href="hotels.html" class="text-custom-white">Tours</a>
                        </li>
                        <li class="active fw-500">
                            {{ $tour->title }} Detail
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="section-padding bg-light-white listing-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listing-details-inner bx-wrapper bg-custom-white padding-20">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="detail-slider-for mb-xl-20 magnific-gallery">
                                    @php
                                        $tours = \App\Models\Tourimages::where('event_info_id', $tour->id)->get();
                                    @endphp

                                    @forelse ($tours as $tor)
                                        <div class="slide-item">
                                            <a href="{{ asset('storage' . $tor->image) }}" class="popup">
                                                <img src="{{ asset('storage' . $tor->image) }}" class="image-fit"
                                                    alt="img">
                                            </a>
                                        </div>
                                    @empty
                                    @endforelse


                                </div>
                                <div class="detail-slider-nav row">

                                    @forelse ($tours as $tor)
                                        <div class="slide-item col-12">
                                            <img src="{{ asset('storage' . $tor->image) }}" class="image-fit"
                                                alt="img">
                                        </div>
                                    @empty
                                    @endforelse


                                </div>
                                <hr>
                                <div class="listing-meta-sec mb-md-80">
                                    <div class="tabs">
                                        <ul class="custom-flex nav nav-tabs mb-xl-20">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#overview">Overview</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#datesRates">Dates & Rates</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#amenities">Amenities</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#faqs">FAQs</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="overview">
                                                <div class="tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-12  mb-xl-20 padding-10">
                                                            <h4 class="text-custom-black">{{ $tour->title }}</h4>

                                                            <div class="travel-info bg-light-white">
                                                                <div class="row no-gutters">
                                                                    <div class="col-sm-6">
                                                                        <div class="head padding-20">
                                                                            <h5
                                                                                class="text-custom-black fs-16 fw-500 no-margin pb-1">
                                                                                Tour Name </h5>
                                                                            <span
                                                                                class="text-light-dark fs-14">{{ $tour->title }}</span>
                                                                        </div>
                                                                        <div class="travel-info-body padding-20">
                                                                            <div class="date-wrapper mb-xl-20">
                                                                                <div class="icon text-custom-blue fs-20">
                                                                                    <i class="far fa-clock"></i>
                                                                                </div>
                                                                                <div class="text">
                                                                                    <p
                                                                                        class="text-custom-black no-margin fs-16 pb-1">
                                                                                        Tour
                                                                                        Departure</p>
                                                                                    <span class="text-light-dark fs-14">
                                                                                        {{ date('h:i A, d/m/y', strtotime($tour->departure)) }}
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="date-wrapper">
                                                                                <div class="icon text-custom-blue fs-20">
                                                                                    <i class="fas fa-map-marker-alt"></i>
                                                                                </div>
                                                                                <div class="text">
                                                                                    <p
                                                                                        class="text-custom-black no-margin fs-16 pb-1">
                                                                                        Tour Duration
                                                                                    </p>
                                                                                    <span
                                                                                        class="text-light-dark fs-14">{{ $tour->duration }}</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="head padding-20">
                                                                            <h5
                                                                                class="text-custom-black fs-16 fw-500 no-margin pb-1">
                                                                                Tour Destination</h5>
                                                                            <span class="text-light-dark fs-14 ">
                                                                                {{ $tour->destination }}</span>
                                                                        </div>
                                                                        <div class="travel-info-body padding-20">
                                                                            <div class="date-wrapper mb-xl-20">
                                                                                <div class="icon text-custom-blue fs-20">
                                                                                    <i class="fas fa-map-marker-alt"></i>
                                                                                </div>
                                                                                <div class="text">
                                                                                    <p
                                                                                        class="text-custom-black no-margin fs-16 pb-1">
                                                                                        Tour Type</p>
                                                                                    <span class="text-light-dark fs-14">
                                                                                        @if ($tour->type == 'private')
                                                                                            Private
                                                                                        @else
                                                                                            Shared
                                                                                        @endif
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="date-wrapper">
                                                                                <div class="icon text-custom-blue fs-20">
                                                                                    <i class="fas fa-map-marker-alt"></i>
                                                                                </div>
                                                                                <div class="text">
                                                                                    <p
                                                                                        class="text-custom-black no-margin fs-16 pb-1">
                                                                                        Tour Price
                                                                                    </p>
                                                                                    <span class="text-light-dark fs-14">₹
                                                                                        <strong> {{ $tour->price }}
                                                                                        </strong></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="hotel-type mb-xl-20 bg-light-white padding-10">
                                                                <ul class="custom">
                                                                    <li class="text-light-dark"><label
                                                                            class="no-margin text-custom-blue">Tour Name:</label>{{$tour->title}}</li>
                                                                    <li class="text-light-dark"><label
                                                                            class="no-margin text-custom-blue">Tour Type
                                                                            :</label> @if ($tour->type == 'private') Private @else Public @endif </li>
                                                                    <li class="text-light-dark"><label
                                                                            class="no-margin text-custom-blue">Minimum
                                                                            Stay:</label>{{$tour->duration}}</li>
                                                                   
                                                                    <li class="text-light-dark"><label
                                                                            class="no-margin text-custom-blue">Destination:</label>{{$tour->destination}}
                                                                    </li>
                                                                    <li class="text-light-dark"><label
                                                                            class="no-margin text-custom-blue">Departure:</label>{{date('h:i A, d/m/y', strtotime($tour->departure))}}
                                                                    </li>
                                                                    <li class="text-light-dark"><label
                                                                        class="no-margin text-custom-blue">
                                                                        Tour Cost:</label>₹{{$tour->price}}</li>
                                                                    <li class="text-light-dark"><label
                                                                            class="no-margin text-custom-blue">Discount:</label> ₹{{$tour->discount}}
                                                                    </li>
                                                                </ul>
                                                            </div> --}}
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="information">
                                                                <h4 class="text-custom-black">Offers {{ $tour->title }}
                                                                </h4>
                                                                <p class="text-light-dark">{!! $tour->offers !!}</p>
                                                                <h4 class="text-custom-black">About {{ $tour->title }}
                                                                </h4>
                                                                <p class="text-light-dark no-margin">{!! $tour->details !!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="tab-pane fade" id="datesRates">
                                                <h4 class="text-custom-black">Dates & Rates</h4>
                                                <p class="text-light-dark">Maecenas vitae turpis condimentum metus
                                                    tincidunt semper bibendum ut
                                                    orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula.
                                                    Cras viverra posuere
                                                    condimentum.</p>
                                                    <div class="col-md-12 col-sm-12">
                                                        <table>
                                                            <th>Date</th>
                                                            <th>Duration</th>
                                                            <th>Variant</th>
                                                            <th>Price</th>
                                                            <th>Action</th>
 
                                                            @php
                                                            $datesRates = \App\Models\EventDatesRate::where('event_info_id', $tour->id)->get();
                                                           @endphp
                                                            
                                                            @forelse ($datesRates as $dates)
                                                            <tr>
                                                                <td>{{ date('h:i A, d/m/y', strtotime($dates->date)) }}</td>
                                                                <td>{{$dates->duration}}</td>
                                                                <td>{{$dates->variant}}</td>
                                                                <td class="fs-14">₹{{$dates->price}}</td>
                                                                <td>
                                                                    <button type="submit"  onclick="location.href='{{route('toor.booking',$tour)}}'"
                                                            class="btn-first btn-submit full-width btn-height">Book</button>
                                                                </td>
                                                            </tr>
                                                            @empty

                                                            <h1>No Data Available !</h1>
                                                                
                                                            @endforelse
                                                           
                                                        </table>
                                                    </div>
                                                {{-- <ul class="custom amenities row no-gutters">
                                                    <li class="col-md-12 col-sm-12">
                                                        
                                                    </li>
                                                  
                                                    <li class="col-md-12 col-sm-12">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Suitable for Events
                                                        </div>
                                                    </li>
                                                </ul> --}}
                                            </div>
                                            <div class="tab-pane fade" id="amenities">
                                                <h4 class="text-custom-black">Amenities</h4>
                                                <p class="text-light-dark">Maecenas vitae turpis condimentum metus
                                                    tincidunt semper bibendum ut
                                                    orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula.
                                                    Cras viverra posuere
                                                    condimentum.</p>
                                                <ul class="custom amenities row no-gutters">
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-wifi"></i>
                                                            Wi-fi
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-swimming-pool"></i>
                                                            Swimming pool
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-tv"></i>
                                                            Television
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-coffee"></i>
                                                            Coffee
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Air Conditioning
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fas fa-dumbbell"></i>
                                                            Fitness Facility
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Fridge
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Wine Bar
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Smoking Allowed
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Entertainment
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Secure Vault
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Pick and Drop
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Room Service
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Pets Allowed
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Play Place
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Comp. Breakfast
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Free Parking
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Confrence Room
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Fire Place
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Handicap Accesible
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Doorman
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Hot Tub
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Elevator In Building
                                                        </div>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6">
                                                        <div class="icon-box text-light-dark">
                                                            <i class="fab fa-youtube"></i>
                                                            Suitable for Events
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="faqs">
                                                <div id="accordion" class="custom-accordion">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <button class="collapsebtn" data-toggle="collapse"
                                                                data-target="#collapseOne">
                                                                Address & Map
                                                            </button>
                                                        </div>
                                                        <div id="collapseOne" class="collapse show"
                                                            data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum
                                                                    has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse"
                                                                data-target="#collapseTwo">
                                                                Messaging
                                                            </button>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum
                                                                    has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse"
                                                                data-target="#collapseThree">
                                                                Refunds
                                                            </button>
                                                        </div>
                                                        <div id="collapseThree" class="collapse"
                                                            data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum
                                                                    has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingFour">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse"
                                                                data-target="#collapseFour">
                                                                Pricing
                                                            </button>
                                                        </div>
                                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum
                                                                    has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingFive">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse"
                                                                data-target="#collapseFive">
                                                                Reservation Request
                                                            </button>
                                                        </div>
                                                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum
                                                                    has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingSix">
                                                            <button class="collapsebtn collapsed" data-toggle="collapse"
                                                                data-target="#collapseSix">
                                                                Your Reservation
                                                            </button>
                                                        </div>
                                                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <p class="text-theme no-margin">
                                                                    Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum
                                                                    has been the industry's standard dummy text.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick-quote bx-wrapper padding-20 mb-xl-30">
                                            <h5 class="text-custom-black">Enquiry Now</h5>
                                            <form method="POST" action="{{ route('save.enquiry') }}">
                                                @csrf
                                                <input type="hidden" name="toor_id" value="{{ $tour->id }}">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">

                                                            <label class="fs-14 text-custom-black fw-500">Your
                                                                Name</label>

                                                            <input type="text" name="name"
                                                                @auth value="{{ auth()->user()->name }}" @endauth
                                                                class="form-control form-control-custom"
                                                                placeholder="Your Name">
                                                        </div>
                                                        <div class="form-group">

                                                            <label class="fs-14 text-custom-black fw-500">Your
                                                                Destination</label>
                                                            <input type="text" name="destination"
                                                                class="form-control form-control-custom"
                                                                placeholder="Your Destination">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Departure</label>
                                                            <div class="input-group group-form">
                                                                <input type="text" name="date"
                                                                    class="form-control form-control-custom datepickr"
                                                                    placeholder="mm/dd/yy">
                                                                <span class="input-group-append">
                                                                    <i class="far fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <button type="submit"
                                                            class="btn-first btn-submit full-width btn-height">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="hotel-grid mb-xl-30">
                                            <div class="hotel-grid-wrapper bx-wrapper">
                                                <div class="image-sec p-relative">
                                                    <a href="#">
                                                        <img src="{{ asset('storage' . $tour->image) }}"
                                                            class="full-width" alt="img">
                                                    </a>
                                                </div>
                                                <div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
                                                    <h4 class="title fs-14"><a href="#"
                                                            class="text-custom-black">{{ $tour->title }}<small
                                                                class="text-light-dark">{{ $tour->destination }}</small></a>
                                                    </h4>
                                                    <span
                                                        class="price"><small>{{ $tour->duration }}</small>₹{{ $tour->price }}</span>
                                                    <div class="feedback">
                                                        <div class="ratings">
                                                            <span class="text-yellow fs-12"><i
                                                                    class="fas fa-star"></i></span>
                                                            <span class="text-yellow fs-12"><i
                                                                    class="fas fa-star"></i></span>
                                                            <span class="text-yellow fs-12"><i
                                                                    class="fas fa-star"></i></span>
                                                            <span class="text-yellow fs-12"><i
                                                                    class="fas fa-star"></i></span>
                                                            <span class="text-light-dark fs-12"><i
                                                                    class="fas fa-star"></i></span>
                                                        </div>
                                                        <span class="review fs-12 text-light-dark">270 reviews</span>
                                                    </div>
                                                    <p class="text-light-dark">{{ $tour->description }}</p>
                                                    <div class="action">
                                                        {{-- <a class="btn-second btn-small" href="#">SELECT</a> --}}
                                                        <a class="btn-first btn-submit yellow" href="{{route('toor.booking',$tour)}}">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="need-help bx-wrapper padding-20">
                                            <h5 class="text-custom-black">Need Help?.</h5>
                                            <p class="text-light-dark">We would be more than happy to help you. Our team
                                                advisor are 24/7 at
                                                your service to help you.</p>
                                            <ul class="custom">
                                                <li class="text-custom-blue fs-18">
                                                    <i class="fas fa-phone-alt"></i>
                                                    <a href="#" class="text-light-dark">+91 7774843561</a>
                                                </li>
                                                <li class="text-custom-blue fs-18">
                                                    <i class="fas fa-envelope"></i>
                                                    <a href="#" class="text-light-dark fs-14"><span
                                                            class="__cf_email__"
                                                            data-cfemail="">kpthebaa@gmail.com</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>




@endsection




