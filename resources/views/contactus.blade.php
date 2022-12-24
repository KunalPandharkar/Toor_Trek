@extends('Layouts.MainLayout',['header'=>true,'footer'=>true,'topbar'=>true,'blog'=>true,])
@section('title', 'Contact Us')

@section('content')

<div class="subheader normal-bg section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-custom-white">Contact Us</h1>
          <ul class="custom-flex justify-content-center">
            <li class="fw-500">
              <a href="index.html" class="text-custom-white">Home</a>
            </li>
            <li class="active fw-500">
              Contact Us
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <section class="section-padding bg-light-white contact-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="contact-info-box mb-md-40">
            <i class="flaticon-placeholder"></i>
            <h6 class="text-theme fw-600">13th Street. 47 W 13th St,<br> New York, NY 10011, USA</h6>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="contact-info-box mb-md-40">
            <i class="flaticon-telephone-1"></i>
            <h6 class="text-theme fw-600"><a href="#" class="text-theme">(+347) 123 4567 890</a><br> Mon-Sat
              9:00am-5:00pm</h6>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="contact-info-box">
            <i class="flaticon-envelope"></i>
            <h6 class="text-theme fw-600"><a href="#" class="text-theme"><span class="__cf_email__"
                  data-cfemail="cda4a3aba28da9a2a0aca4a3e3aea2a0">[email&#160;protected]</span></a><br> 24 X 7 online
              support</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section-padding contact-form-map">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="section-header">
            <div class="section-heading">
              <h3 class="text-custom-black">Get In Touch</h3>
              <div class="section-description">
                <p class="text-light-dark">It all began with the trek in 1992. A Such existed outside the
                  realm of standard travel itineraries. And rest, as they say, was history...</p>
              </div>
            </div>
          </div>
          <form class="mb-md-80" method="POST" action="{{route('store.getintouch')}}">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-custom" placeholder="Name" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-custom" placeholder="Email I'd"
                    required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="subject" class="form-control form-control-custom" placeholder="Subject"
                    required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="contact" class="form-control form-control-custom" placeholder="Phone No."
                    required="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="message" rows="5" class="form-control form-control-custom" placeholder="Message"
                    required=""></textarea>
                </div>
                <button type="submit" class="btn-first btn-submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-5">
          <div class="contact-map full-height">
            <iframe class="full-height"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15008.22709817109!2d75.34780080987191!3d19.879824414143105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba296c53600ab%3A0xf93e15739fc74b8a!2sM%20G%20M%2C%20Aurangabad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1671709634294!5m2!1sen!2sin"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

