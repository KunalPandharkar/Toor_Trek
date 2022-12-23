@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => true])
@section('title', 'About Us')

@section('content')
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Blog Details</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="index.html" class="text-custom-white">Home</a>
                        </li>
                        <li class="fw-500">
                            <a href="blog.html" class="text-custom-white">Blog</a>
                        </li>
                        <li class="active fw-500">
                            Blog Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <section class="section-padding bg-light-white blog-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-details bx-wrapper bg-custom-white padding-20">

                        <article class="post p-relative">
                            <div class="post-wrapper">
                                <div class="post-img animate-img mb-xl-20">
                                    <img src="{{ asset('storage' . $blog->image) }}" class="image-fit" alt="img">
                                </div>
                                <div class="blog-meta bg-custom-white">
                                    <div class="post-meta-box mb-xl-20">
                                        <div class="post-categories">
                                            <a href="#" class="text-custom-black fs-18">{{ $blog->type }}</a>
                                        </div>
                                        <div class="post-meta">
                                            <a href="#" class="text-light-dark mr-2" tabindex="-1">
                                                <span class="text-custom-blue">
                                                    <i class="fas fa-comment"></i>
                                                </span> 20
                                            </a>
                                            <a href="#" class="text-light-dark mr-2" tabindex="-1">
                                                <span class="text-custom-blue">
                                                    <i class="fas fa-thumbs-up"></i>
                                                </span> 50
                                            </a>
                                            <a href="#" class="text-light-dark mr-2" tabindex="-1">
                                                <span class="text-custom-blue">
                                                    <i class="fas fa-eye"></i>
                                                </span> 500
                                            </a>
                                            <div class="post-date">
                                                <div class="text-custom-white bg-custom-blue2 fw-600 date">
                                                    {{ date('d', strtotime($blog->created_at)) }}</div>
                                                <div class="text-custom-white year">
                                                    {{ date('M', strtotime($blog->created_at)) }}
                                                    {{ date('Y', strtotime($blog->created_at)) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-heading p-relative">
                                        <h2><a href="#" class="text-custom-black">{{ $blog->title }}</a></h2>
                                    </div>
                                    <div class="post-author mb-xl-20">
                                        <div class="author-img animate-img">
                                            <a href="#">
                                                <img src="{{ asset('storage' . $blog->userimage) }}" class="rounded-circle"
                                                    alt="#">
                                            </a>
                                        </div>
                                        <span class="text-theme fs-14">By <a href=""
                                                class="text-custom-black fw-500">{{ $blog->user }}</a></span>
                                    </div>
                                    <p class="text-light-dark">
                                        {!! $blog->info !!}
                                    </p>

                                    <div class="quote-box mb-xl-20">
                                        <blockquote class="bg-light-white">
                                            <span> <i class="fa fa-quote-left text-custom-white"></i> </span>
                                            <p class="text-custom-black fs-16 no-margin">{{ $blog->specialtext }}.</p>
                                        </blockquote>
                                    </div>

                                </div>
                            </div>
                        </article>

                        <hr>

                        <div class="post-details-tags-social mb-xl-20">
                            <div class="row no-margin">
                                <div class="col-md-6">
                                    <div class="tags-box">
                                        <span class="fs-18 text-light-dark"><i class="fas fa-tags"></i></span>
                                        <div class="tags">
                                            @php
                                                $myArray = explode(',', $blog->tags);
                                            @endphp
                                            @forelse ($myArray as $my)
                                                <a href="#">{{ $my }}</a>

                                            @empty
                                            @endforelse

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-media-box">
                                        <ul class="custom-flex">
                                            <li>
                                                <a href="#" class="fb">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <span class="social-number bg-light-white">500</span>
                                            </li>
                                            <li>
                                                <a href="#" class="tw">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <span class="social-number bg-light-white">20</span>
                                            </li>
                                            <li>
                                                <a href="#" class="fb">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                                <span class="social-number bg-light-white">46</span>
                                            </li>
                                            <li>
                                                <a href="#" class="bg-custom-blue">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="post-author bg-light-white padding-15 mb-xl-20">
                            <div class="author-img animate-img mb-sm-20">
                                <a href="#">
                                    <img src="{{ asset('storage' . $blog->userimage) }}" class="image-fit" alt="author-img">
                                </a>
                            </div>
                            <div class="author-caption">
                                <h5 class="fw-600"><a href="#" class="text-custom-black">{{ $blog->user }}</a>
                                    <span class="text-custom-blue fs-16 ml-2"><i class="fab fa-twitter"></i></span></h5>

                                <p class="text-light-white">{{ $blog->aboutuser }}.</p>
                            </div>
                        </div>


                     

                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
