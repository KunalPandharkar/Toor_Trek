@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => false])
@section('title', 'About Us')

@section('content')




    <style>
        input {
            border: none
        }
    </style>


    <section class="section-padding bg-light-white booking-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tabs">

                        <div class="tab-content bg-custom-white bx-wrapper padding-20">
                            <div class="tab-pane fade active show" id="hotel-booking">
                                <div class="tab-inner">
                                    <div class="row">
                                        <div class="col-lg-8" style="border-right: 1px solid #dfdfdf">
                                            <h5 class="text-custom-black">Confirm Your Details </h5>


                                            <div class="row mb-md-80">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">First Name</label>
                                                        <input type="text" name="firstname"
                                                            class="form-control form-control-custom"
                                                            placeholder="First Name" readonly
                                                            value="{{ $booking->firstname }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Last Name</label>
                                                        <input type="text" name="lastname"
                                                            class="form-control form-control-custom" placeholder="Last Name"
                                                            readonly value="{{ $booking->lastname }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Email I'd</label>
                                                        <input type="email" name="email"
                                                            class="form-control form-control-custom" placeholder="Email I'd"
                                                            readonly value="{{ $booking->email }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Phone No.
                                                        </label>
                                                        <input type="text" name="contact"
                                                            class="form-control form-control-custom" placeholder="Phone No."
                                                            readonly value="{{ $booking->contact }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">City</label>
                                                        <input type="text" name="city"
                                                            class="form-control form-control-custom" placeholder="City"
                                                            readonly value="{{ $booking->city }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Postal
                                                            Code</label>
                                                        <input type="text" name="postal"
                                                            class="form-control form-control-custom" placeholder="Postal"
                                                            readonly value="{{ $booking->postal }}">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <hr>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Total People
                                                            (including you)</label>
                                                        <input type="text" name="people"
                                                            class="form-control form-control-custom" placeholder="People"
                                                            readonly value="{{ $booking->people }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Total Males
                                                        </label>
                                                        <input type="text" name="male"
                                                            class="form-control form-control-custom" placeholder="Males"
                                                            readonly value="{{ $booking->male }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Total Females
                                                        </label>
                                                        <input type="text" name="female"
                                                            class="form-control form-control-custom" placeholder="Females"
                                                            readonly value="{{ $booking->female }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Total Kids
                                                        </label>
                                                        <input type="text" name="kids"
                                                            class="form-control form-control-custom" placeholder="Kids"
                                                            readonly value="{{ $booking->kids }}">
                                                    </div>
                                                </div>
                                                <style>
                                                    .razorpay-payment-button {
                                                        display: inline-block;
                                                        padding: 12px 40px;
                                                        position: relative;
                                                        transition: 0.5s all;
                                                        background: transparent;
                                                        color: inherit;
                                                        border: 1px solid transparent;
                                                        font-size: 14px;
                                                        overflow: hidden;
                                                        z-index: 1;
                                                        text-align: center;
                                                        /* border-radius: 50px; */
                                                        text-transform: uppercase;
                                                        border-color: #181c2a;
                                                        color: #ffffff;
                                                        background: #181c2a;
                                                    }
                                                </style>
                                            
                                                <div class="container">
                                                    <form action="{{route('pay.success',$payment)}}" method="get">
                                            
                                                        <script src="https://checkout.razorpay.com/v1/checkout.js"     data-key="{{ env('RAZORPAY_KEY') }}" ,
                                                            data-amount="{{ $payment->amount * 100}}" , data-currency="INR" , data-order_id="{{ $payment->order_id }}"
                                                            data-buttontext="Pay with Razorpay" data-name="Happy Feets Venture" ,
                                                            data-description="Transaction of Booking Happy Feets Venture" , data-theme.color="#018c21"></script>
                                            
                                                        <input type="hidden" custom="Hidden Element" name="hidden">
                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-12">

                                                    <h5 class="text-custom-black">Tour Details</h5>


                                                    <div class="hotel-type mb-xl-20 bg-light-white padding-10">
                                                        <ul class="custom">
                                                            <li class="text-custom-black fs-16 fw-500 no-margin pb-1">Name : <span style="color:#595e63"> {{ $tour->title }} </span></li>
                                                            <li class="text-custom-black fs-16 fw-500 no-margin pb-1">Type : <span style="color:#595e63" >{{ $tour->type }} </span> </li>
                                                            <li class="text-custom-black fs-16 fw-500 no-margin pb-1">Duration :<span style="color:#595e63" > {{ $tour->duration }} </span></li>
                                                            <li class="text-custom-black fs-16 fw-500 no-margin pb-1">Destination : <span style="color:#595e63" >{{ $tour->destination }}</span></li>
                                                            <li class="text-custom-black fs-16 fw-500 no-margin pb-1">MRP : <span style="color:#595e63" >₹{{ $tour->mrp }}/person </span></li>
                                                            <li class="text-custom-black fs-16 fw-500 no-margin pb-1" style="border-bottom: 1px solid black">Discount : <span style="color:#595e63" >₹{{ $tour->discount }} </span></li>
                                                            <li class="text-custom-black fs-20 fw-500 no-margin pb-1">Price : <span style="color:#595e63" >₹{{ $tour->price * $booking->people }} </span></li>
                                                          
                                                        </ul>
                                                    </div>

                                                    {{-- <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Tour Title
                                                            </label>
                                                            <input type="text" name="female"
                                                                class="form-control form-control-custom"
                                                                placeholder="Females" readonly
                                                                value="{{ $tour->title }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Tour Type
                                                            </label>
                                                            <input type="text" name="female"
                                                                class="form-control form-control-custom"
                                                                placeholder="Females" readonly
                                                                value="{{ $tour->type }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Tour Duration
                                                            </label>
                                                            <input type="text" name="female"
                                                                class="form-control form-control-custom"
                                                                placeholder="Females" readonly
                                                                value="{{ $tour->duration }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Tour Destination
                                                            </label>
                                                            <input type="text" name="female"
                                                                class="form-control form-control-custom"
                                                                placeholder="Females" readonly
                                                                value="{{ $tour->destination }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Tour Departure
                                                            </label>
                                                            <input type="text" name="female"
                                                                class="form-control form-control-custom"
                                                                placeholder="Females" readonly
                                                                value="{{ $tour->departure }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Tour Price
                                                            </label>
                                                            <input type="text" name="female"
                                                                class="form-control form-control-custom"
                                                                placeholder="Females" readonly
                                                                value="{{ $tour->price }}">
                                                        </div>
                                                    </div> --}}

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
