@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => true])
@section('title', 'Contact Us')

@section('content')

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Gallary</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="index.html" class="text-custom-white">Home</a>
                        </li>
                        <li class="active fw-500">
                            Gallary
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <section class="section-padding bg-light-white gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tabs filter-gallery">
                        <ul class="custom-flex nav nav-tabs mb-xl-40">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-filter="*">All</a>
                            </li>
                            @forelse ($albums as $album)
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        data-filter=".{{ $album->id }}-gallery">{{ $album->albumtitle }}</a>
                                </li>
                            @empty
                            @endforelse

                        </ul>
                    </div>
                    <div class="row gallery-grid">
                        @forelse ($images as $img)
                            <div class="col-lg-4 col-md-6 filter-box {{ $img->gallary_id }}-gallery">
                                <div class="gallery-item mb-xl-30">
                                    <a href="{{ asset('storage' . $img->image) }}" class="popup">
                                        <img src="{{ asset('storage' . $img->image) }}" class="image-fit" alt="img">
                                    </a>
                                </div>
                            </div>
                        @empty
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
