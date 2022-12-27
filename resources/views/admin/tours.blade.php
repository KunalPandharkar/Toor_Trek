@extends('Layouts.AdminLayout')

@section('content')
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.events') }}">Events</a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">{{ $main_event->title }}</li>
                </ol>
            </nav>
            <!-- <div class="panelheading">
                                                                            <p>Users</p>
                                                                        </div> -->


            <div class="dataaddactions">
                <div class="addcategorybtns btn-group">
                    {{-- <button class="btn btn-secondary btn-sm" onclick="location.href=''">Print</button> --}}
                    <button class="btn bluebg btn-sm" onclick="location.href='{{ route('admin.tour.add', $main_event) }}'">
                        + Add New Tour</button>
                </div>
                <!-- searchbar -->
                {{-- <div id="datasearchbar" class="input-group mt-3 mb-3">
                    <input type="text" class="form-control" placeholder="Search Requests"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn orangebg" type="button" id="button-addon2">
                        <span class="material-icons">
                            search
                        </span>
                    </button>
                </div> --}}
            </div>

            <!-- table -->
            <div id="alldatatable" class="bg-white mt-2 table-responsive">
                <table class="table table-bordered table-hover" id="userstable">
                    <thead class="bluebg">
                        <tr>

                            <th>Image</th>
                            <th>Tour Title</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Departure</th>
                            <th>Others</th>
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
                                        <p class="mb-0">{{ Str::limit($tour->title, 20) }}</p>
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
                                    <div class=" d-flex">
                                        <button class="btn btn-success btn-sm" style="font-size: 12px"
                                            data-bs-toggle="modal" data-bs-target="#addDetail{{ $tour->id }}">
                                            details
                                        </button>
                                        <button class="btn btn-success btn-sm" style="font-size: 12px"
                                            data-bs-toggle="modal" data-bs-target="#addOffer{{ $tour->id }}">
                                            offers
                                        </button>



                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex">

                                        <button class="btn bluebg btn-sm"
                                            onclick="location.href='{{ route('admin.tour.edit', $tour) }}'">
                                            <span class="material-icons">
                                                edit
                                            </span>
                                        </button>

                                        <button class="btn btn-danger btn-sm"
                                            onclick="location.href='{{ route('delete.tour', $tour) }}'">
                                            <span class="material-icons">
                                                delete
                                            </span>

                                        </button>



                                    </div>

                                </td>




                                <!--modal for adding Details -->
                                <div class="modal fade" id="addOffer{{ $tour->id }}" tabindex="-1"
                                    aria-labelledby="addDetailLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content"
                                            style="width:600px;word-wrap:break-word;overflow-x: scroll;
                                        white-space: nowrap;">


                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Offers of
                                                    {{ $tour->title }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">


                                                {!! $tour->offers !!}




                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!--modal for add new offers-->

                                <!--modal for adding Details -->
                                <div class="modal fade" id="addDetail{{ $tour->id }}" tabindex="-1"
                                    aria-labelledby="addDetailLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content"
                                            style="width:600px;word-wrap:break-word;overflow-x: scroll;
                                        white-space: nowrap;">


                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Details of
                                                    {{ $tour->title }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body container">


                                                {!! $tour->details !!}



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



    <!-- texteditor js cdn -->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(editor => {

            })
            .catch(error => {

            });
    </script>
@endsection
