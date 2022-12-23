@extends('Layouts.AdminLayout')

@section('content')
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.events') }}">Blogs</a></li>

                </ol>
            </nav>



            <div class="dataaddactions">
                <div class="addcategorybtns btn-group">
                    <button class="btn bluebg btn-sm" onclick="location.href='{{ route('admin.blogs.load') }}'">
                        + Add New Blog</button>
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
                            <th>Title</th>
                            <th>Type</th>
                            <th>User</th>
                            <th>User Profile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>

                            @forelse ($blogs as $blog)
                                <td>
                                    <div class="brandlogoimg">
                                        <img src="{{ asset('storage' . $blog->image) }}" alt="">
                                    </div>
                                </td>

                                <td>
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $blog->title }}</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $blog->type }}</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $blog->user }}</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="brandlogoimg">
                                        <img src="{{ asset('storage' . $blog->userimage) }}" alt="">
                                    </div>
                                </td>





                                <td>
                                    <div class="tablecellwidthbq d-flex">
                                        <button class="btn btn-success btn-sm" style="font-size: 12px"
                                            data-bs-toggle="modal" data-bs-target="#showInfo{{ $blog->id }}">
                                            details
                                        </button>

                                        <button class="btn btn-danger btn-sm"
                                            onclick="location.href='{{ route('delete.blog', $blog) }}'">
                                            <span class="material-icons">
                                                delete
                                            </span>

                                        </button>

                                    </div>
                                </td>





                                <!--modal for adding Details -->
                                <div class="modal fade" id="showInfo{{ $blog->id }}" tabindex="-1"
                                    aria-labelledby="addDetailLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content"
                                            style="width:600px;word-wrap:break-word;overflow-x: scroll;
                                        white-space: nowrap;">


                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Details of
                                                    {{ $blog->title }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <h3>Special Text</h3>
                                                {!! $blog->specialtext !!}
                                                    <hr>
                                                <h3>Tags</h3>
                                                {!! $blog->tags !!}
                                                <hr>
                                                <h3>User Info</h3>
                                                {!! $blog->aboutuser !!}
                                                <hr>
                                                <h3>blog Info</h3>

                                                {!! $blog->info !!}




                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!--modal for add new offers-->
                                {{-- 
                                <!--modal for adding Details -->
                                <div class="modal fade" id="addDetail{{ $tour->id }}" tabindex="-1"
                                    aria-labelledby="addDetailLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="width:600px;word-wrap:break-word;overflow-x: scroll;
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
                                <!--modal for add new offers-->  --}}
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
