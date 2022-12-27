@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => true])
@section('title', 'Contact Us')

@section('content')

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Blogs </h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="index.html" class="text-custom-white">Home</a>
                        </li>
                        <li class="active fw-500">
                            Blogs
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <section class="section-padding bg-light-white our_articles">
        <div class="container">
            <div class="row">

                @forelse ($blogs as $blog)
                <article class="col-lg-4 col-md-6 post mb-xl-30">
                    <div class="post-wrapper bx-wrapper">
                        <div class="post-img animate-img">
                            <a href="{{route('blog.info',$blog)}}">
                                <img src="{{ asset('storage' . $blog->image) }}" class="full-width"
                                    alt="img">
                            </a>
                           
                        </div>
                        <div class="blog-meta padding-20 bg-custom-white p-relative">
                            <div class="post-meta mb-xl-20">
                                <a href="{{route('blog.info',$blog)}}" class="text-light-dark mr-1">
                                    <span class="text-custom-blue">
                                        <i class="fas fa-comment"></i>
                                    </span> 10 Comments
                                </a>
                                <a href="{{route('blog.info',$blog)}}" class="text-light-dark mr-1">
                                    <span class="text-custom-blue">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span> 2 Likes
                                </a>
                            </div>
                            <div class="post-heading">
                                <h2>
                                    <a href="{{route('blog.info',$blog)}}l"
                                        class="text-custom-black fw-600 fs-20">{{$blog->title}}</a>
                                </h2>
                                <p class="text-light-dark no-margin">{{$blog->specialtext}}</p>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="post-author">
                                <cite class="text-custom-black">Post By <a href="{{route('blog.info',$blog)}}">{{$blog->user}}</a></cite>
                            </div>
                            <a href="{{route('blog.info',$blog)}}" class="text-custom-blue fs-14 fs-600">Read
                                More</a>
                        </div>
                    </div>
                </article>
                @empty
                    
                @endforelse

               


                


               

            </div>
            <div class="row">
                <div class="col-12">
                    <nav class="section-padding-top">
                        <ul class="pagination justify-content-center">
                            {{ $blogs->appends(request()->query())->links('pagination::bootstrap-4') }}

                            {{-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> --}}
                    </nav>
                </div>
            </div>
        </div>
    </section>






@endsection
