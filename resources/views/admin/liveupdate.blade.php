@extends('Layouts.AdminLayout')

@section('content')
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.events') }}">Events</a></li>
               
                    <li class="breadcrumb-item active" aria-current="page">Tours</li>
                </ol>
            </nav>
            <!-- <div class="panelheading">
                                                                        <p>Users</p>
                                                                    </div> -->


            <div class="dataaddactions">
                <div class="addcategorybtns btn-group">
                    {{-- <button class="btn btn-secondary btn-sm" onclick="location.href=''">Print</button> --}}
                  
                </div>
                <!-- searchbar -->
                <div id="datasearchbar" class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" placeholder="Search Requests"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn orangebg" type="button" id="button-addon2">
                        <span class="material-icons">
                            search
                        </span>
                    </button>
                </div>
            </div>

            <!-- table -->
            <div id="alldatatable" class="bg-white mt-2 table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="bluebg">
                        <tr>

                            <th>Image</th>
                            <th>Tour Title</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Departure</th>
                            <th>Total Bookings</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>

                            @forelse ($tours as $tour)
                                <td>
                                    <div class="brandlogoimg">
                                        <img src="{{ asset('storage' . $tour->image) }}" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        <p class="mb-0">{{ Str::limit($tour->title,20) }}</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="">
                                        <p class="mb-0">{{ $tour->type }}</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="">
                                        <p class="mb-0">{{ $tour->price }}</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="">
                                        <p class="mb-0">{{ $tour->duration }}</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="">
                                        <p class="mb-0">{{ $tour->departure }}</p>
                                    </div>
                                </td>


                                <td>
                                    @php
                                        $count = \App\Models\Bookings::where('event_info_id', $tour->id)->count();
                                    @endphp
                                    {{$count}}
                                </td>

                                <td>
                                    <div class="d-flex">

                                        <button class="btn bluebg btn-sm" data-bs-toggle="modal" data-bs-target="#addDetail{{ $tour->id }}"
                                           >
                                           Send Live Update
                                        </button>

                                    </div>

                                </td>




                                <!--modal for adding Details -->
                                <div class="modal fade" id="addDetail{{ $tour->id }}" tabindex="-1"
                                    aria-labelledby="addDetailLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="width:600px;word-wrap:break-word;overflow-x: scroll;
                                        white-space: nowrap;">
                                           

                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Details of
                                                        {{ Str::limit($tour->title,25) }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body container">

                                                    <form action="{{ route('store.message',$tour) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea1" class="form-label">Type Message: </label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" ></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn bluebg btn-sm">Send Message</button>
                                                        </div>
                                                    </form>
                                              



                                                </div>
                                               
                                           

                                        </div>
                                    </div>
                                </div>
                                <!--modal for add new offers-->
                        </tr>
                    @empty

                        <h1>No data Available !</h1>
                        @endforelse


                    </tbody>
                </table>




            </div>

         
        </div>

    </div>
    <!-- Page content ends-->


    
@endsection
