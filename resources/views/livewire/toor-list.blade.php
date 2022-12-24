<div>
    {{-- Success is as dangerous as failure. --}}



    <section class="section-padding bg-light-white">
        <div class="container">
            <div class="row">
                <aside class="col-lg-4">
                    <div class="sidebar_wrap mb-md-80">
                        <div class="sidebar">
                            <div class="sidebar_widgets mb-xl-30">
                                <div class="widget_title bg-custom-blue">
                                    <h5 class="no-margin text-custom-white">Modify Search</h5>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label class="fs-14 text-custom-black fw-500">Your Destination</label>
                                        <input type="search" name="destination" wire:model="destination"
                                            class="form-control form-control-custom" placeholder="Your Destination">
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-14 text-custom-black fw-500">Tour Departure Date</label>
                                        <div class="input-group group-form">
                                            <input type="date" name="date" wire:model="date" class="form-control "
                                                placeholder="mm/dd/yy">
                                            <span class="input-group-append">
                                                <i class="far fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="fs-14 text-custom-black fw-500">Tour Type</label>
                                        <div class="group-form">
                                            <select class="custom-select form-control form-control-custom"
                                                name="type" wire:model="type">
                                                <option value="">All</option>
                                                <option value="shared">Shared</option>
                                                <option value="private">Private</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="reset" wire:click="Resetdata" class="btn-first btn-submit full-width btn-height">Reset</button>
                                </form>
                            </div>
                            <div class="sidebar_widgets mb-xl-30">
                                <div class="widget_title bg-custom-blue">
                                    <h5 class="no-margin text-custom-white">Price Range</h5>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {{-- <label class="fs-14 text-custom-black fw-500">Min : </label> --}}
                                            <input type="search" name="minPrice" wire:model="minPrice"
                                                class="form-control form-control-custom" placeholder="Min :">
                                        </div>
                                    
                                    </div>

                                    

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {{-- <label class="fs-14 text-custom-black fw-500">Low : </label> --}}
                                            <input type="search" name="maxPrice" wire:model="maxPrice"
                                                class="form-control form-control-custom" placeholder="Max :">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </aside>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="listing-top-heading mb-xl-20">
                                <h6 class="no-margin text-custom-black">Showing {{ $tours->count() }}
                                    Results</h6>
                                
                            </div>
                        </div>


                        @forelse ($tours as $tour)
                            <div class="col-md-6">
                                <div class="hotel-grid mb-xl-30">
                                    <div class="hotel-grid-wrapper bx-wrapper">
                                        <div class="image-sec animate-img">
                                            <a href="{{ route('toor.info', $tour) }}">
                                                <img src="{{ asset('storage' . $tour->image) }}" class="full-width"
                                                    alt="img">
                                            </a>
                                        </div>
                                        <div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
                                            <h4 class="title fs-16"><a href="{{ route('toor.info', $tour) }}"
                                                    class="text-custom-black">{{ Str::limit($tour->title,20) }}
                                                    <small class="text-light-dark">{{ $tour->destination }} </small></a>
                                            </h4>
                                            <span
                                                class="price"><small>{{ $tour->duration }}</small>₹{{ $tour->price }}</span>
                                            <div class="action">
                                                <a class="btn-first btn-submit"
                                                    href="{{ route('toor.info', $tour) }}">View</a>
                                                <a class="btn-second btn-small" href="{{ route('toor.booking', $tour) }}">Book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse




                    </div>


                    <div class="row">
                        <div class="col-12">
                            <nav class="section-padding-top">
                                <ul class="pagination justify-content-center">
            {{ $tours->appends(request()->query())->links('pagination::bootstrap-4') }}
                                
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
            </div>
        </div>
    </section>


</div>
