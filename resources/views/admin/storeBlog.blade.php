@extends('Layouts.AdminLayout')

@section('content')
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.blogs') }}">Blogs</a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">AddBlog</li>
                </ol>
            </nav>


            <!--add product form-->
            <div class="bg-white mt-2 pt-3 p-lg-3">
                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <hr>



                    <div class="row">




                        <div class="mb-3 col-md-6">
                            <label class="form-label small">Blog Title :</label>
                            <input type="text" class="form-control form-control-sm" name="title">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label small">Blog Type :</label>
                            <input type="text" class="form-control form-control-sm" name="type">
                        </div>
                    </div>

                    <div class="mb-4 mt-2">
                        <label class="form-label small mb-0">Blog Image :</label>
                        <p class="mb-2 mt-0 small text-secondary"><small>(To be displayed on Blog Card)</small></p>
                        <input type="file" class="form-control form-control-sm" name="image">
                    </div>

                    <hr>







                    <div class="row">

                        <div class="mb-3 col-md-6">
                            <label class="form-label small">User Name :</label>
                            <input type="text" class="form-control form-control-sm" name="username">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label small">User Image :</label>
                            <input type="file" class="form-control form-control-sm" name="userimage">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small">User Info :</label>
                            <textarea class="form-control" name="userinfo" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </div>

                    <hr>

                    <div class="mb-3">
                        <label class="form-label small">Special Text  :</label>
                        <p class="mb-2 mt-0 small text-secondary"><small>(quote,notice etc)</small></p>
                        <textarea class="form-control" name="specialtext" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <hr>

                    <div class="mb-3">
                        <label class="form-label small">Blog Tags :</label>
                        <p class="mb-2 mt-0 small text-secondary"><small>(Enter tags by , seperated)</small></p>
                        <textarea class="form-control" name="tags" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <hr>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label small">Blog Details:</label>
                        <textarea id="editor2" name="details" class="small" placeholder="Type here...">
                         
                        </textarea>
                    </div>

                    <hr>



                    <div class="prodsubmitbtn">
                        <button class="btn btn-sm bluebg" type="submit">Add Blog</button>
                    </div>

                </form>

            </div>


        </div>
    </div>
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
