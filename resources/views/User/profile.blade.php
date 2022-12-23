@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => false])
@section('title', 'User Profile')

<style>
    .rounded-circle{
        width: unset;
        height: unset;
    }
</style>

@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        @if ($user->image)
                            src="{{ asset('storage' . $user->image) }}"
                        @else
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        @endif
                        class="font-weight-bold">{{ $user->name }}</span><span
                        class="text-black-50">{{ $user->email }}</span><span>
                    </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control form-control-custom"
                                        placeholder="Full Name"  value="{{ $user->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-custom"
                                        placeholder="Full Name"  value="{{ $user->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-custom"
                                        placeholder="Email ID"  value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="contact" class="form-control form-control-custom"
                                        placeholder="Mobile No."  value="{{ $user->contact }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea style="border-radius:1px; " class="form-control form-control-custom" placeholder="Enter Address"
                                        id="exampleFormControlTextarea1" rows="3" name="address">{{ $user->address }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6"><label class="labels">Age</label>
                                <input type="text" class="form-control form-control-custom" placeholder="Enter Age"
                                    value="{{ $user->age }}" name="age">
                            </div>
                            <div class="col-md-6"><label class="labels">Gender</label>
                                <input type="text" class="form-control form-control-custom" placeholder="Enter Gender"
                                    value="{{ $user->gender }}" name="gender">
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <div class="cta-btn">
                                <button type="submit" class="btn-first btn-submit">Update Profile</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Recent Toors</h4>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-custom"
                                    placeholder="Full Name" required="" value="{{ $user->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-custom"
                                    placeholder="Email ID" required="" value="{{ $user->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="contact" class="form-control form-control-custom"
                                    placeholder="Mobile No." required="" value="{{ $user->contact }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea style="border-radius:1px; " class="form-control form-control-custom" placeholder="Enter Address"
                                    id="exampleFormControlTextarea1" rows="3" name="address">{{ $user->address }}</textarea>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="row">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                class="form-control" placeholder="country" value=""></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text"
                                class="form-control" value="" placeholder="state"></div>
                    </div> --}}
                    <div class=" text-center">
                        <div class="cta-btn">
                            <button type="submit" class="btn-first btn-submit">Update Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
