@extends('Layouts.MainLayout', ['header' => true, 'footer' => false, 'topbar' => true, 'blog' => false])
@section('title', 'About Us')

@section('content')

<style>
 
.card {
    background: #fff;
    transition: .5s;
    border: 0;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}
.chat-app .people-list {
    width: 280px;
    position: absolute;
    left: 0;
    top: 0;
    padding: 20px;
    z-index: 7
}

.chat-app .chat {
    margin-left: 280px;
    border-left: 1px solid #eaeaea
}

.people-list {
    -moz-transition: .5s;
    -o-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s
}

.people-list .chat-list li {
    padding: 10px 15px;
    list-style: none;
    border-radius: 3px
}

.people-list .chat-list li:hover {
    background: #efefef;
    cursor: pointer
}

.people-list .chat-list li.active {
    background: #efefef
}

.people-list .chat-list li .name {
    font-size: 15px
}

.people-list .chat-list img {
    width: 55px;
    height: 54px;
    border-radius: 50%
}

.people-list img {
    float: left;
    border-radius: 50%
}

.people-list .about {
    float: left;
    padding-left: 8px
}

.people-list .status {
    color: #999;
    font-size: 13px
}

.chat .chat-header {
    padding: 15px 20px;
    border-bottom: 2px solid #f4f7f6
}

.chat .chat-header img {
    float: left;
    border-radius: 40px;
    width: 40px;
    height: 40px;
}

.chat .chat-header .chat-about {
    float: left;
    padding-left: 10px
}

.chat .chat-history {
    padding: 20px;
    border-bottom: 2px solid #fff
}

.chat .chat-history ul {
    padding: 0
}

.chat .chat-history ul li {
    list-style: none;
    margin-bottom: 30px
}

.chat .chat-history ul li:last-child {
    margin-bottom: 0px
}

.chat .chat-history .message-data {
    margin-bottom: 15px
}

.chat .chat-history .message-data img {
    border-radius: 40px;
    width: 40px
}

.chat .chat-history .message-data-time {
    color: #434651;
    padding-left: 6px
}

.chat .chat-history .message {
    color: #444;
    padding: 18px 20px;
    line-height: 26px;
    font-size: 16px;
    border-radius: 7px;
    display: inline-block;
    position: relative
}

.chat .chat-history .message:after {
    bottom: 100%;
    left: 7%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #fff;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .my-message {
    background: #efefef
}

.chat .chat-history .my-message:after {
    bottom: 100%;
    left: 30px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #efefef;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .other-message {
    background: #e8f1f3;
    text-align: right
}

.chat .chat-history .other-message:after {
    border-bottom-color: #e8f1f3;
    left: 93%
}

.chat .chat-message {
    padding: 20px
}

.online,
.offline,
.me {
    margin-right: 2px;
    font-size: 8px;
    vertical-align: middle
}

.online {
    color: #86c541;
    margin-top: -3px;
}

.offline {
    color: #e47297
}

.me {
    color: #1d8ecd
}

.float-right {
    float: right
}

.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

@media only screen and (max-width: 767px) {
    .chat-app .people-list {
        height: 465px;
        width: 100%;
        overflow-x: auto;
        background: #fff;
        left: -400px;
        display: none
    }
    .chat-app .people-list.open {
        left: 0
    }
    .chat-app .chat {
        margin: 0
    }
    .chat-app .chat .chat-header {
        border-radius: 0.55rem 0.55rem 0 0
    }
    .chat-app .chat-history {
        height: 300px;
        overflow-x: auto
    }
}

@media only screen and (min-width: 768px) and (max-width: 992px) {
    .chat-app .chat-list {
        height: 650px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: 600px;
        overflow-x: auto
    }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
    .chat-app .chat-list {
        height: 480px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: calc(100vh - 350px);
        overflow-x: auto
    }
}

.header .navigation.sticky{
    position: initial;
}
</style>

<div class="subheader normal-bg " style="padding-top:50px;padding-bottom:50px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-custom-white">@if ($isNull) You Dont Have Any Bookings ! @else Live Tour Updates @endif</h1>
                <ul class="custom-flex justify-content-center">
                   
                </ul>
            </div>
        </div>
    </div>

 
    @if ($isNull)
        
    @else

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                {{-- <span class="input-group-text"><i class="fa fa-search"></i></span> --}}
                            </div>
                            {{-- <input type="text" class="form-control" placeholder="Search..."> --}}
                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            @forelse ($allBookings as $book)
                            <li class="clearfix @if($book->event_info_id == $ActiveTour->id) active @endif" onclick="location.href='{{route('user.messages',$book->event_info_id)}}'">
                                <img src="{{asset('storage'.$book->image)}}"
                                    alt="avatar">
                                <div class="about"  style="text-align: start">
                                    <div class="name">{{ Str::limit($book->title,15, '...')}}</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> {{ date('d-M-y', strtotime($book->departure)) }} </div>
                                </div>
                            </li>
                          
                            @empty
                                
                            @endforelse
                            
                        </ul>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal"
                                        data-target="#view_info">
                                        <img src="{{asset('storage'.$ActiveTour->image)}}"
                                            alt="avatar">
                                    </a>
                                    <div class="chat-about" style="text-align: start">
                                        <h6 class="mb-0">{{Str::limit($ActiveTour->title,30, '...')}}</h6>
                                        <small>Last seen: 2 hours ago</small>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="chat-history">
                            <ul class="m-b-0">

                                @forelse ($messages as $message)
                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">{{ date('h:i A', strtotime($message->created_at)) }}, {{ date('d-M-y', strtotime($message->created_at)) }}</span>
                                    </div>
                                    <div class="message my-message float-left">{{$message->message}}</div>
                                </li>
                               
                                @empty

                                <h1>No Messages</h1>
                                    
                                @endforelse
                               
                             
                               
                            </ul>
                        </div>
                        <div class="chat-message clearfix">
                            <div class="input-group mb-0">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif

@endsection
