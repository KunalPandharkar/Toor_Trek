@extends('Layouts.AdminLayout')

@section('content')
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a>Enquiries</a>
                    </li>
                    {{-- <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.events.tours',$Pevent) }}">{{$Pevent->title}}</a></li> --}}

                </ol>
            </nav>



            <div class="dataaddactions">
                <div class="addcategorybtns btn-group">
                    {{-- <button class="btn btn-secondary btn-sm" onclick="location.href=''">Print</button> --}}
                    <button class="btn btn-secondary btn-sm">
                        Export Users</button>
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
                            <th>Sr.No</th>
                            <th>User</th>
                            <th>Destination</th>
                            <th>Date</th>
                            <th>Tour (Reference)</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($enquiry as $enq)
                            <tr>




                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $loop->iteration }}</p>
                                    </div>
                                </td>

                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $enq->name }}</p>
                                    </div>
                                </td>

                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ $enq->destination }}</p>
                                    </div>
                                </td>

                                <td class="">
                                    <div class="tablecellwidthbq">
                                        <p class="mb-0">{{ date('d-m-y', strtotime($enq->date)) }}</p>
                                    </div>
                                </td>

                                <td class="">

                                    @if($enq->toor_id != NULL)

                                    @php
                                        $tour = \App\Models\EventInfo::where('id', $enq->toor_id)->first();
                                    @endphp

                                    
                                    <div class="tablecellwidthbq" onclick="location.href='{{ route('toor.info', $tour) }}'">
                                        <a class="mb-0"> {{$tour->title}} </a>
                                    </div>

                                    @else

                                    General Query

                                    @endif
                                </td>


                                {{-- <td>
                                    <div class="d-flex">

                                  

                                        <button class="btn btn-danger btn-sm"
                                            onclick="location.href='{{ route('admin.users.delete', $user) }}'">
                                            <span class="material-icons">
                                                delete
                                            </span>

                                        </button>



                                    </div>

                                </td> --}}


                            @empty

                            </tr>
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
@endsection
