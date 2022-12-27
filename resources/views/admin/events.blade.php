@extends('Layouts.AdminLayout')

@section('content')
    <!-- Page content-->
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
            <!-- <div class="panelheading">
                                        <p>Users</p>
                                    </div> -->


            <div class="dataaddactions">
                <div class="addcategorybtns btn-group">
                    {{-- <button class="btn btn-secondary btn-sm" onclick="location.href=''">Print</button> --}}
                    <button class="btn bluebg btn-sm" data-bs-toggle="modal" data-bs-target="#addEventModel">
                        + Add New Event</button>
                </div>

               
            </div>

          

            <!-- table -->
            <div id="alldatatable" class="bg-white mt-2 table-responsive">
                <table class="table table-bordered table-hover" id="userstable">
                    <thead class="bluebg">
                        <tr>
                            <th>Event ID</th>
                            <th>Image</th>
                            <th>Event Title</th>
                            <th>Tours</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($event_categories as $event)
                            <tr>

                                <td class="col-md-2">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">eve/{{ $event->id }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="brandlogoimg">
                                        <img src="{{ asset('storage' . $event->image) }}" alt="">
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $event->title }}</p>
                                    </div>
                                </td>


                                <td class="col-md-2">
                                    <div class="tablecellwidthbq">
                                        <button class="btn btn-success btn-sm"
                                            onclick="location.href='{{ route('admin.events.tours', $event) }}'">
                                            Tours {{$event->Eventinfos()->count()}}
                                                
                                           
                                        </button>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex">

                                        <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editEventModel{{ $event->id }}">
                                            Edit &nbsp;<span class="material-icons">
                                                edit
                                            </span>
                                        </button>

                                        <button class="btn btn-danger btn-sm"
                                            onclick="location.href='{{ route('delete.event', $event) }}'">
                                            <span class="material-icons">
                                                delete
                                            </span>

                                        </button>



                                    </div>

                                </td>
                            </tr>


                            <!--modal for edit new event type -->
                            <div class="modal fade" id="editEventModel{{ $event->id }}" tabindex="-1"
                                aria-labelledby="editEventModelLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('update.event', $event) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Event
                                                        Title</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="exampleFormControlInput1" name="title"
                                                        value="{{ $event->title }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="formFileSm" class="form-label">Upload New Event
                                                        Image</label>
                                                    <input class="form-control form-control-sm" id="formFileSm"
                                                        type="file" name="image">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$event->description}}</textarea>
                                                </div>






                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn bluebg btn-sm">Update Event</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!--modal for edit new event type-->

                        @empty

                            <h1>No data Available !</h1>
                        @endforelse


                    </tbody>
                </table>


            </div>

            <!-- pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-sm justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
    <!-- Page content ends-->


    <!--modal for add new event type -->
    <div class="modal fade" id="addEventModel" tabindex="-1" aria-labelledby="addEventModelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('store.event') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Upload Event Image</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Event
                                Title</label>
                            <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                                name="title">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bluebg btn-sm">Add/Save Event</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
