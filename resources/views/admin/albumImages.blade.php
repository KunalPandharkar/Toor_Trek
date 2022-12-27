@extends('Layouts.AdminLayout')

@section('content')
    <!-- Page content-->
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.gallary') }}">{{$album->albumtitle}}</a></li>
                </ol>
            </nav>
            <!-- <div class="panelheading">
                                        <p>Users</p>
                                    </div> -->


            <div class="dataaddactions">
                <div class="addcategorybtns btn-group">
                    {{-- <button class="btn btn-secondary btn-sm" onclick="location.href=''">Print</button> --}}
                    <button class="btn bluebg btn-sm" data-bs-toggle="modal" data-bs-target="#addAlbumModel">
                        + Add New Image</button>
                </div>

                
            </div>

            <!-- table -->
            <div id="alldatatable" class="bg-white mt-2 table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="bluebg">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($images as $img)
                            <tr>

                                <td class="col-md-2">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $img->id }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="brandlogoimg">
                                        <img src="{{ asset('storage' . $img->image) }}" alt="">
                                    </div>
                                </td>
                    


                                <td>
                                    <div class="d-flex">

                                       

                                        <button class="btn btn-danger btn-sm"
                                            onclick="location.href='{{ route('delete.album.image', $img) }}'">
                                            <span class="material-icons">
                                                delete
                                            </span>

                                        </button>



                                    </div>

                                </td>
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


    <!--modal for add new event type -->
    <div class="modal fade" id="addAlbumModel" tabindex="-1" aria-labelledby="addAlbumModelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('store.album.images',$album) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Images in {{$album->albumtitle}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Upload Album Images (multiple)</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="images[]" multiple>
                        </div>

                      

                       

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bluebg btn-sm">Add Images</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
