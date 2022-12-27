@extends('Layouts.AdminLayout')

@section('content')
    <style>
       
    </style>
    <!-- Page content-->
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
            <!-- <div class="panelheading">
                                                    <p>Users</p>
                                                </div> -->


            <div class="dataaddactions mb-4">
                

                {{-- <!-- searchbar -->
                <div id="datasearchbar" class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" placeholder="Search Requests"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn orangebg" type="button" id="button-addon2">
                        <span class="material-icons">
                            search
                        </span>
                    </button>
                </div> --}}
            </div>
            <br>

            <!-- table -->
            <div id="alldatatable" class="bg-white mt-2 table-responsive">
                <table class="table table-bordered table-hover display" id="userstable">
                    <thead class="bluebg">
                        <tr>
                            <th>User ID</th>
                            <th>Image</th>
                            <th>User Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Contact</th>
                            <th>Mail</th>
                            {{-- <th>City</th> --}}
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>




                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $user->id }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="brandlogoimg">
                                        <img src="{{ asset('storage' . $user->image) }}" alt="">
                                    </div>
                                </td>
                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $user->name }} </p>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $user->age }} </p>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $user->gender }} </p>
                                    </div>
                                </td>

                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $user->contact }} </p>
                                    </div>
                                </td>

                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $user->email }} </p>
                                    </div>
                                </td>

                                {{-- <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{$user->city}} </p>
                                    </div>
                                </td> --}}

                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $user->address }} </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">

                                        {{-- <button class="btn bluebg btn-sm">
                                            Edit &nbsp;<span class="material-icons">
                                                edit
                                            </span>
                                        </button> --}}

                                        <button class="btn btn-danger btn-sm"
                                            onclick="location.href='{{ route('admin.users.delete', $user) }}'">
                                            <span class="material-icons">
                                                delete
                                            </span>

                                        </button>



                                    </div>

                                </td>


                            @empty

                            </tr>
                        @endforelse




                    </tbody>
                </table>


            </div>

            <!-- pagination -->
            
        </div>

    </div>
    <!-- Page content ends-->
@endsection
