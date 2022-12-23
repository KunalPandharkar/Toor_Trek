@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => false])
@section('title', 'About Us')

@section('content')



    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">{{ $tour->title }} Booking</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="{{ route('Home') }}" class="text-custom-white">Home</a>
                        </li>

                        <li class="active fw-500">
                            Booking
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <section class="section-padding bg-light-white booking-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tabs">
                        <ul class="custom-flex nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#hotel-booking">{{ $tour->title }}
                                    Booking</a>
                            </li>
                        </ul>
                        <div class="tab-content bg-custom-white bx-wrapper padding-20">
                            <div class="tab-pane fade active show" id="hotel-booking">
                                <div class="tab-inner">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h5 class="text-custom-black">Your Personal Information</h5>
                                            <form action="{{route('booking.store',$tour)}}" method="POST">
                                                @csrf

                                                <div class="row mb-md-80">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">First Name</label>
                                                            <input type="text" name="firstname"
                                                                class="form-control form-control-custom"
                                                                placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Last Name</label>
                                                            <input type="text" name="lastname"
                                                                class="form-control form-control-custom"
                                                                placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Email I'd</label>
                                                            <input type="email" name="email"
                                                                class="form-control form-control-custom"
                                                                placeholder="Email I'd"
                                                                @auth value="{{ auth()->user()->email }}" @endauth>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Phone No.
                                                            </label>
                                                            <input type="text" name="contact"
                                                                class="form-control form-control-custom"
                                                                placeholder="Phone No."
                                                                @auth value="{{ auth()->user()->contact }}" @endauth>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">City</label>
                                                            <input type="text" name="city"
                                                                class="form-control form-control-custom" placeholder="City"
                                                                @auth value="{{ auth()->user()->city }}" @endauth>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Postal
                                                                Code</label>
                                                            <input type="text" name="postal"
                                                                class="form-control form-control-custom"
                                                                placeholder="Postal">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="custom-checkbox mb-0">
                                                            <input type="checkbox" name="#">
                                                            <span class="checkmark"></span>
                                                            I want to receive <a href="#"> Happy Tours </a>
                                                            promotional
                                                            offers in the future
                                                        </label>
                                                    </div>
                                                    <div class="col-12">
                                                        <hr>
                                                    </div>
                                                    <div class="col-12">
                                                        <h5 class="text-custom-black">Your Group Information</h5>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Total People
                                                                (including you)</label>
                                                            <input type="text" name="people"
                                                                class="form-control form-control-custom"
                                                                placeholder="People">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Total Males
                                                            </label>
                                                            <input type="text" name="male"
                                                                class="form-control form-control-custom"
                                                                placeholder="Males">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Total Females
                                                            </label>
                                                            <input type="text" name="female"
                                                                class="form-control form-control-custom"
                                                                placeholder="Females">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Total Kids
                                                            </label>
                                                            <input type="text" name="kids"
                                                                class="form-control form-control-custom"
                                                                placeholder="Kids">
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <hr class="mt-0">
                                                        <div class="form-group">
                                                            <label class="custom-checkbox">
                                                                <input type="checkbox" name="#">
                                                                <span class="checkmark"></span>
                                                                By continuing, you agree to the<a href="#">Terms and
                                                                    Conditions.</a>
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn-first btn-submit">Confirm
                                                            Booking</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hotel-grid mb-xl-30">
                                                        <div class="hotel-grid-wrapper bx-wrapper">
                                                            <div class="image-sec p-relative">
                                                                <a href="#">
                                                                    <img src="{{ asset('storage' . $tour->image) }}"
                                                                        class="full-width" alt="img">
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="hotel-grid-caption padding-20 bg-custom-white p-relative">
                                                                <h4 class="title fs-16"><a
                                                                        href="{{ route('toor.info', $tour) }}"
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
                                                                    <span class="review fs-12 text-light-dark">270
                                                                        reviews</span>
                                                                </div>
                                                                <p class="text-light-dark">Nunc cursus libero purus ac
                                                                    congue arcu cursus ut sed vitae pulvinar massa idporta
                                                                    nequetiam.</p>
                                                                <div class="action">

                                                                    <a class="btn-first btn-submit yellow"
                                                                        href="{{ route('toor.info', $tour) }}">VIEW</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="need-help bx-wrapper padding-20">
                                                        <h5 class="text-custom-black">Need Help?.</h5>
                                                        <p class="text-light-dark">We would be more than happy to help you.
                                                            Our team advisor are 24/7 at your service to help you.</p>
                                                        <ul class="custom">
                                                            <li class="text-custom-blue fs-18">
                                                                <i class="fas fa-phone-alt"></i>
                                                                <a href="#" class="text-light-dark">(+347) 123 456
                                                                    7890</a>
                                                            </li>
                                                            <li class="text-custom-blue fs-18">
                                                                <i class="fas fa-envelope"></i>
                                                                <a href="#" class="text-light-dark fs-14"><span
                                                                        class="__cf_email__"
                                                                        data-cfemail="056d60697545616a68646c6b2b666a68">[email&#160;protected]</span></a>
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
                </div>
            </div>
        </div>
    </section>






@endsection
