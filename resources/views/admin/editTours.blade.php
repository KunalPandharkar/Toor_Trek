@extends('Layouts.AdminLayout')

@section('content')
    <div class="container-fluid">



        <div class="allcontents bg-white p-2 mt-2">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumblinks">
                    <li class="breadcrumb-item"><a href="{{ route('user.admin') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.events') }}">Events</a>
                    </li>
                    {{-- <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.events.tours',$Pevent) }}">{{$Pevent->title}}</a></li> --}}

                    <li class="breadcrumb-item active" aria-current="page">Edit {{$tour->title}}</li>
                </ol>
            </nav>


            <!--add product form-->
            <div class="bg-white mt-2 pt-3 p-lg-3">
                <form action="{{ route('update.event.tours', $tour) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <hr>



                    <div class="row">


                        <div class="mb-3 col-md-6">
                            <label class="form-label small">Event Name :</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                name="Parentevent">

                                @forelse ($events as $event)
                                    <option @if ($event->id == $tour->event_category_id) selected @endif value="{{ $event->id }}">
                                        {{ $event->title }}</option>
                                @empty

                                    <option value="0">No Events</option>
                                @endforelse

                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label small">Tour Title :</label>
                            <input type="text" class="form-control form-control-sm" name="title"
                                value="{{ $tour->title }}">
                        </div>
                    </div>

                    <div class="mb-4 mt-2">
                        <label class="form-label small mb-0">Main Tour Image :</label>
                        <p class="mb-2 mt-0 small text-secondary"><small>(To be displayed on Tour Card)</small></p>
                        <input type="file" class="form-control form-control-sm" name="image">
                    </div>

                    <div class="mb-4 mt-2">
                        <label class="form-label small mb-0">Secondary Tour Images :</label>
                        <p class="mb-2 mt-0 small text-secondary"><small>(To be displayed on Tour Page)</small></p>
                        <input type="file" class="form-control form-control-sm" name="images[]" multiple>
                    </div>


                    <div class="row mt-4">
                        <div class="mb-3 col-md-6 col-lg-3">
                            <label class="form-label small">MRP:</label>
                            <input type="text" class="form-control form-control-sm" name="mrp"
                                value="{{ $tour->mrp }}">
                        </div>
                        <div class="mb-3 col-md-6 col-lg-3">
                            <label class="form-label small">Discount :</label>
                            <input type="text" class="form-control form-control-sm" name="discount"
                                value="{{ $tour->discount }}">
                        </div>
                        <div class="mb-3 col-md-6 col-lg-3">
                            <label class="form-label small">Final Price :</label>
                            <input type="text" name="price" class="form-control form-control-sm"
                                value="{{ $tour->price }}">
                        </div>
                        <div class="mb-3 mt-3 col-sm-2 col-md-6">
                            <label class="form-label small">Tour Type :</label>
                            <div class="prodavialverified">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="inlineRadio1"
                                        value="shared" @if ($tour->type == 'shared') checked @endif>
                                    <label class="form-check-label small" for="inlineRadio1">Shared Tour</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="inlineRadio2"
                                        value="private" @if ($tour->type != 'shared') checked @endif>
                                    <label class="form-check-label small" for="inlineRadio2">Private Tour</label>
                                </div>
                            </div>
                        </div>



                    </div>


                    <div class="row">

                        <div class="mb-3 col-md-4">
                            <label class="form-label small">Tour Destination :</label>
                            <input type="text" class="form-control form-control-sm" name="destination"
                                value="{{ $tour->destination }}">
                        </div>


                        <div class="mb-3 col-md-4">
                            <label class="form-label small">Tour Duration :</label>
                            <input type="text" class="form-control form-control-sm" name="duration"
                                value="{{ $tour->duration }}">
                        </div>

                        <div class="mb-3 col-md-4">
                            <label class="form-label small">Tour Departure :</label>
                            <input type="date" class="form-control form-control-sm" name="departure"
                                value="{{ $tour->departure }}">
                        </div>
                    </div>


                    <hr>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label small">Tour Details:</label>
                        <textarea id="editor2" name="details" class="small" placeholder="Type here...">
                         {{ $tour->details }}
                        </textarea>
                    </div>

                    <hr>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label small">Tour Offers:</label>
                        <textarea id="editor" name="offers" class="small" placeholder="Type here...">
                        {{ $tour->offers }}
                        </textarea>
                    </div>


                    <hr>

                    @php
                        $datesRates = \App\Models\EventDatesRate::where('event_info_id', $tour->id)->get();
                    @endphp

                    <div class="mb-4 mt-4">
                        <label class="form-label small">Add Dates & Rates :</label>
                        <div class="field_wrapperpn">
                            <div class="mb-3">
                                <input type="date" class="form-control form-control-sm d-inline m-1" name="dates[]">

                                <input type="text" class="form-control form-control-sm d-inline m-1"
                                    placeholder="Enter Variant" name="variants[]">

                                <input type="text" class="form-control form-control-sm d-inline m-1"
                                    placeholder="Enter Duration" name="durations[]">

                                <input type="text" class="form-control form-control-sm d-inline m-1"
                                    placeholder="Enter Price" name="prices[]">

                                <a href="javascript:void(0);" class="add_buttonpn" title="Add field">
                                    <span class="material-icons text-success">
                                        add_circle_outline
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    @if ($datesRates)
                        <div class="mb-4 mt-4">
                            {{-- <label class="form-label small">Add Dates & Rates :</label> --}}
                            <div class="field_wrapperpn">
                                @forelse ($datesRates as $datesRate)
                                    <div class="mb-3">

                                        <input type="date" class="form-control form-control-sm d-inline m-1"
                                            name="dates[]" value="{{ $datesRate->date }}">

                                        <input type="text" class="form-control form-control-sm d-inline m-1"
                                            placeholder="Enter Variant" name="variants[]"
                                            value="{{ $datesRate->variant }}">

                                        <input type="text" class="form-control form-control-sm d-inline m-1"
                                            placeholder="Enter Duration" name="durations[]"
                                            value="{{ $datesRate->duration }}">

                                        <input type="text" class="form-control form-control-sm d-inline m-1"
                                            placeholder="Enter Price" name="prices[]" value="{{ $datesRate->price }}">

                                        <a href="
                                            javascript:void(0);"
                                            class="remove_button"><span
                                                class="material-icons text-danger">remove_circle_outline</span></a>
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    @else
                    @endif



                    <div class="prodsubmitbtn">
                        <button class="btn btn-sm orangebg" type="submit">Update {{ $tour->title }}</button>
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

            ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
