@extends('Layouts.AdminLayout')

@section('content')
    <!-- Page content-->
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">GetInTouch</li>
                </ol>
            </nav>
            <!-- <div class="panelheading">
                                            <p>Users</p>
                                        </div> -->


            <div class="dataaddactions mb-4">
               
              
            </div>

            <br>

            <!-- table -->
            <div id="alldatatable" class="bg-white mt-2 table-responsive">
                <table class="table table-bordered table-hover" id="userstable">
                    <thead class="bluebg">
                        <tr>
                            <th>Sr.No</th>
                            <th>User</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($getintouch as $msg)
                        <tr>

                           

                            <td>{{$loop->iteration}}</td>
                            <td>{{$msg->name}}</td>
                            <td>{{$msg->subject}}</td>
                            <td>{{$msg->email}}</td>
                            <td>{{$msg->contact}}</td>
                            <td>{{$msg->message}}</td>
                           
                        </tr>
                        @empty
                                
                        @endforelse




                    </tbody>
                </table>


            </div>

          
        </div>

    </div>
    <!-- Page content ends-->
@endsection
