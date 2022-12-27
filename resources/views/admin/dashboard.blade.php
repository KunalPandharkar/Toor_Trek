@extends('Layouts.AdminLayout')

@section('content')
    <!-- Page content-->
    <div class="container-fluid">

        <!-- dashboard starts -->
        <div id="dashboardboxes">

            <div class="dbboxouter" onclick="location.href='{{route('admin.events')}}'">
                <div class="dbbox">
                    <div class="dbboxleft">
                        <div class="dbicon">
                            <span class="material-icons">
                                event
                            </span>
                        </div>
                    </div>
                    <div class="dbboxright">
                        <div class="dbboxcount">
                            <p class="mb-0">{{ $event_count }}</p>
                        </div>
                        <div class="dbboxname">
                            <p class="mb-0">Total Events</p>
                        </div>
                    </div>
                </div>
                <div class="dbboxbottom">

                    <span class="material-icons rightarrow">
                        arrow_right_alt
                    </span>
                </div>
            </div>

            <div class="dbboxouter" onclick="location.href='{{route('admin.gallary')}}'">
                <div class="dbbox">
                    <div class="dbboxleft">
                        <div class="dbicon">
                            <span class="material-icons">
                                photo_camera
                            </span>

                        </div>
                    </div>
                    <div class="dbboxright">
                        <div class="dbboxcount">
                            <p class="mb-0">{{ $albums_count }}</p>
                        </div>
                        <div class="dbboxname">
                            <p class="mb-0">Total Albums</p>
                        </div>
                    </div>
                </div>
                <div class="dbboxbottom">

                    <span class="material-icons rightarrow">
                        arrow_right_alt
                    </span>
                </div>
            </div>

            <div class="dbboxouter">
                <div class="dbbox">
                    <div class="dbboxleft">
                        <div class="dbicon">
                            <span class="material-icons">
                                description
                            </span>
                        </div>
                    </div>
                    <div class="dbboxright">
                        <div class="dbboxcount">
                            <p class="mb-0">{{ $enquiry_count }}</p>
                        </div>
                        <div class="dbboxname">
                            <p class="mb-0">Total Enquiries</p>
                        </div>
                    </div>
                </div>
                <div class="dbboxbottom">

                    <span class="material-icons rightarrow">
                        arrow_right_alt
                    </span>
                </div>
            </div>

            <div class="dbboxouter" onclick="location.href='{{route('admin.users')}}'">
                <div class="dbbox">
                    <div class="dbboxleft">
                        <div class="dbicon">
                            <span class="material-icons">
                                people
                            </span>
                        </div>
                    </div>
                    <div class="dbboxright">
                        <div class="dbboxcount">
                            <p class="mb-0">{{ $users_count }}</p>
                        </div>
                        <div class="dbboxname">
                            <p class="mb-0">Total Users</p>
                        </div>
                    </div>
                </div>
                <div class="dbboxbottom">

                    <span class="material-icons rightarrow">
                        arrow_right_alt
                    </span>
                </div>
            </div>

        </div>
        <!-- dashboard ends -->

        <div class="allcontents bg-white p-2 mt-2">

        
  
  
  
          <div class="dataaddactions">
              <div class="addcategorybtns btn-group">
                  {{-- <button class="btn btn-secondary btn-sm" onclick="location.href=''">Print</button> --}}
                  <button class="btn bluebg btn-sm">
                      Latest Tour Enquiries </button>
              </div>
  
              <!-- searchbar -->
              <div id="datasearchbar" class="input-group mt-3 mb-3">
                  
              </div>
          </div>

          <br>  
          <!-- table -->
          <div id="alldatatable" class="bg-white  table-responsive">
              <table class="table table-bordered table-hover" id="userstable">
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
  
                                  @if ($enq->toor_id != null)
                                      @php
                                          $tour = \App\Models\EventInfo::where('id', $enq->toor_id)->first();
                                      @endphp
  
  
                                      <div class="tablecellwidthbq" onclick="location.href='{{ route('toor.info', $tour) }}'">
                                          <a class="mb-0"> {{ $tour->title }} </a>
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
  
     
  
  
  
  
  
  
      </div>




    </div>
    <!-- Page content ends-->





   
@endsection
