@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => false])
@section('title', 'About Us')

@section('content')



   

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">{{$event->title}} Details</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="index.html" class="text-custom-white">Home</a>
                        </li>
                      
                        <li class="active fw-500">
                           {{$event->title}} Tours List
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @livewireStyles

    <livewire:toor-list :event="$event" />

    @livewireScripts


 

@endsection
