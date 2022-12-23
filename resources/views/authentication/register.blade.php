@extends('Layouts.MainLayout',['header'=>true,'footer'=>false,'blog'=>false,'topbar'=>false])
@section('title', 'Register')

@section('content')


    <!-- Register form starts -->


    <div class="login_register text-center">

        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 hero-area"
                    style="">

                </div>
                <div class="col-md-4 loginregister_outer mx-auto">

                    <div class="loginregister_inner align-middle" style="padding-top: 12px">

                        {{-- <img src="{{ asset('assets/images/toor-logo.png') }}" alt="" width="100%" height="80px"> --}}
                        <h1 class="title">Sign Up</h1>
                        <div class="loginregisterform">
                            <form action="{{route('register.user')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-custom"
                                            placeholder="Full name" required="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-custom"
                                            placeholder="Email ID" required="">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-custom"
                                            placeholder="Password" required="">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="form-control form-control-custom"
                                            placeholder="Confirm Password" required="">
                                    </div>
                                </div>


                                <div class="mb-3 loginregisterbtn">
                                    <div class="cta-btn">
                                        <button type="submit" class="btn-first btn-submit">Register Now</button>
                                    </div>
                                </div>

                                <div class="mb-3 loginorregisterlink">
                                    <a href="{{ route('login') }}">Already have an account ? Click to login !</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Register form ends -->



@endsection
