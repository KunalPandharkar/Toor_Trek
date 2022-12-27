@extends('Layouts.AdminLayout')

@section('content')
    <!-- Page content-->
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallary</li>
                </ol>
            </nav>
            <!-- <div class="panelheading">
                                        <p>Users</p>
                                    </div> -->


            <div class="dataaddactions">
                <div class="addcategorybtns btn-group">
                    {{-- <button class="btn btn-secondary btn-sm" onclick="location.href=''">Print</button> --}}
                    <button class="btn bluebg btn-sm" data-bs-toggle="modal" data-bs-target="#addAlbumModel">
                        + Add New Album</button>
                </div>

                <!-- searchbar -->
                
            </div>

            <!-- table -->
            <div id="alldatatable" class="bg-white mt-2 table-responsive">
                <table class="table table-bordered table-hover" id="userstable">
                    <thead class="bluebg">
                        <tr>
                            <th>ID</th>
                            <th>Cover Image</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($gallary as $gal)
                            <tr>

                                <td class="col-md-2">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $gal->id }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="brandlogoimg">
                                        <img src="{{ asset('storage' . $gal->cover) }}" alt="">
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $gal->albumtitle }}</p>
                                    </div>
                                </td>

                                <td class="col-md-2">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $gal->location }}</p>
                                    </div>
                                </td>


                                <td class="col-md-2">
                                    <div class="tablecellwidthbq">
                                        <button class="btn btn-success btn-sm"
                                           onclick="location.href='{{ route('album.images', $gal) }}'">
                                            Images {{$gal->images()->count()}}
                                            </span>
                                        </button>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex">

                                        <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editAlbumModel{{ $gal->id }}">
                                            Edit &nbsp;<span class="material-icons">
                                                edit
                                            </span>
                                        </button>

                                        <button class="btn btn-danger btn-sm"
                                            onclick="location.href='{{ route('delete.album', $gal) }}'">
                                            <span class="material-icons">
                                                delete
                                            </span>

                                        </button>



                                    </div>

                                </td>
                            </tr>


                            <!--modal for edit new event type -->
                            <div class="modal fade" id="editAlbumModel{{ $gal->id }}" tabindex="-1"
                                aria-labelledby="editAlbumModelLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('update.album', $gal) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit {{$gal->albumtitle}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Album
                                                        Title</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="exampleFormControlInput1" name="title"
                                                        value="{{ $gal->albumtitle }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="formFileSm" class="form-label">Upload New Album Cover
                                                        Image</label>
                                                    <input class="form-control form-control-sm" id="formFileSm"
                                                        type="file" name="image">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Location</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                    id="exampleFormControlInput1" name="location"
                                                    value="{{ $gal->location }}">
                                                </div>






                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn bluebg btn-sm">Update {{$gal->albumtitle}}</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!--modal for edit new event type-->

                        @empty

                            {{-- <h1>No data Available !</h1> --}}
                        @endforelse


                    </tbody>
                </table>


            </div>

            <!-- pagination -->
         
        </div>

    </div>
    <!-- Page content ends-->


    <!--modal for add new event type -->
    <div class="modal fade" id="addAlbumModel" tabindex="-1" aria-labelledby="addAlbumModelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('store.album') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Album</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Upload Album Cover Image</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Album
                                Title</label>
                            <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                                name="title">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Album
                                Location</label>
                            <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                                name="location">
                        </div>

                       

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bluebg btn-sm">Add/Save Album</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
