@extends('Layouts.AdminLayout')

@section('content')
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a>Bookings</a>
                    </li>
                    {{-- <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.events.tours',$Pevent) }}">{{$Pevent->title}}</a></li> --}}

                </ol>
            </nav>



            <div class="dataaddactions mb-4">
                
            </div>

            <br>

            <!-- table -->
            <div id="alldatatable" class="bg-white mt-4 table-responsive">
                <table class="table table-bordered table-hover" id="userstable">
                    <thead class="bluebg">
                        <tr>
                            
                            <th>User</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>People</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Tour</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                            <tr>




                
                                <td class="">
                    
                                        <p class="mb-0">{{ $booking->firstname }} {{$booking->lastname}}</p>
                       
                                </td>

                                <td class="">
                              
                                        <p class="mb-0">{{ $booking->contact }}</p>
                           
                                </td>

                                <td class="">
                    
                                        <p class="mb-0">{{$booking->email}}</p>
                                  
                                </td>

                                <td class="">
                        
                                        <p class="mb-0">{{$booking->city}}, {{$booking->postal}}</p>
                                 
                                </td>

                           
                               

                                <td class="">
                                 
                                        <p class="mb-0">Total : {{$booking->people}}</p>
                                        <p class="mb-0">Male : {{$booking->male}}</p>
                                        <p class="mb-0">Female : {{$booking->female}}</p>
                                        <p class="mb-0">Kids : {{$booking->kids}}</p>
                                 
                                </td>

                                <td class="">
                                    
                                        <p class="mb-0">{{ date('h:i A, d/M/y', strtotime($booking->created_at)) }}</p>
                            
                                  
                                </td>

                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">₹{{ $booking->price }}</p>
                            
                                    </div>
                                </td>


                                <td class="">

                                    @if($booking->event_info_id != NULL)

                                    @php
                                        $tour = \App\Models\EventInfo::where('id', $booking->event_info_id)->first();
                                    @endphp

                                    
                                    <div class="tablecellwidthbq" onclick="location.href='{{ route('toor.info', $tour) }}'">
                                        <a class="mb-0"> {{$tour->title}} </a>
                                    </div>

                                    @else

                                    General Query

                                    @endif
                                </td>


                        


                            @empty

                            </tr>
                        @endforelse




                    </tbody>
                </table>


            </div>

            <!-- pagination -->
            {{-- <nav aria-label="Page navigation example">
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
            </nav> --}}





        </div>
    </div>
@endsection
