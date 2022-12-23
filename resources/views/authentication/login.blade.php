@extends('Layouts.MainLayout',['header'=>true,'footer'=>false,'blog'=>false,'topbar'=>false])
@section('title', 'Login')

@section('content')


    <!-- Register form starts -->


    <div class="login_register text-center">

        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 hero-area"
                    style="">

                </div>
                <div class="col-md-4 loginregister_outer mx-auto">

                    <div class="loginregister_inner align-middle" style="padding-top: 120px">


                        <h1 class="title">Sign In</h1>
                        <div class="loginregisterform">
                            <form action="{{route('login.user')}}" method="POST">
                                @csrf
                              
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

                                <div class="mb-3 loginregisterbtn">
                                    <div class="cta-btn">
                                        <button type="submit" class="btn-first btn-submit">Sign In</button>
                                    </div>
                                </div>

                                <div class="mb-3 loginorregisterlink">
                                    <a href="{{ route('register') }}">Don't have an account ? Click to Register !</a>
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
