@extends('Layouts.MainLayout', ['header' => true, 'footer' => true, 'topbar' => true, 'blog' => true])
@section('title', 'About Us')

@section('content')

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">About Us</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500">
                            <a href="index.html" class="text-custom-white">Home</a>
                        </li>
                        <li class="active fw-500">
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <div class="section-heading" style="max-width: none">
                    <h3 class="text-custom-black">About Us</h3>
                    <div class="section-description">
                        <p class="text-light-dark">

                            It all began with the trek in 1992. A Susegado Goan man headed to the Himalayas for his soul
                            trek where he met a met a sharp Delhi woman on the same mission. Their shared love for travel,
                            discovering the world through authentic local experiences, and walking the road less travelled
                            culminated in the start of Soul Travels. They created tours which existed outside the realm of
                            standard travel itineraries. And rest, as they say, was history.

                            Starting off with one tour in Delhi, we have now grown to 10 tours covering two of the most
                            radically different locations in this country - Delhi & Goa. You can experience the country's
                            capital with us, walking through the bylanes of Chandni Chowk, marvelling at the magnificence of
                            Mughal architecture, and sampling authentic Chicken Tikka Masala (and many other mouth-watering
                            dishes). On the other hand, far away from the maddening crowd, you can discover Goa - where
                            India goes to party, and relax, in equal measure. A completely different cuisine. Diametrically
                            opposite history. And local culture that is poles apart.

                            More than 10,000 travellers over the past decade have discovered India with us. They loved it.
                            And so will you.

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
