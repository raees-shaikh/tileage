@extends('frontend.layouts.app')
@section('title', 'Tiling Terminologies')

@section('content')

    <main id="content" class="bg-white">
        <section style="background-image: url('frontend/banner/tiling.png');" class="pt-10 pt-lg-15 pb-6 bg-img-cover-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5 pt-5">
                        <img src="{{asset('frontend/banner/terminology.png')}}" alt="" class="mt-5">
                    </div>
                    <div class="col-md-2 mt-lg-5 mt-3 pt-3 pt-lg-5 d-md-block d-none">
                        <div class=" mt-5 pt-5 text-center mx-auto">
                            <img src="{{asset('frontend/banner/hr.png')}}" alt="" class="mt-5 pt-5 ">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <img src="{{asset('frontend/banner/termin.png')}}" alt="">

                    </div>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">More</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Tiling Terminologies</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="tile-600-sec  pt-5">
            <div class="container">
                <div class="row justify-content-center mt-lg-5 pt-5">
                    <div class="col-lg-6 ">
                        <h2 class="mt-md-3 mb-0 text-dark-gray">Access Flooring</h2>
                        <p class="text-black  mt-2 mb-2">Raised flooring or access flooring is a type of flooring
                            system used in modern buildings to provide a place for electrical, mechanical, and
                            telecommunications infrastructure to be installed beneath the floor.</p>
                        <p class="text-black"> Apart from its practical benefits, raised flooring can also enhance the
                            aesthetic appeal of a space. The panels can be finished in a variety of materials such as
                            carpet, tile, or laminate, providing a sleek and modern look that can complement any decor.</p>

                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-2">
                        <img src="{{ asset('frontend/terminology/access-floor.png') }}" alt=""
                            class="product-img-hover">
                    </div>
                </div>
                <div class="row justify-content-center mt-lg-5 pt-5">
                    <div class="col-lg-6 ">
                        <h2 class="mt-md-3 mb-0 text-dark-gray">Porcelain Tile</h2>
                        <p class="text-black  mt-2">A type of ceramic tile that is made from finer, more refined clay
                            and fired at higher temperatures than regular ceramic tiles, resulting in a denser, more durable
                            product.</p>

                    </div>
                    <div class="col-lg-4  mt-lg-0 mt-2 ">
                        <img src="{{ asset('frontend/terminology/proclian.png') }}" alt=""
                            class="product-img-hover">
                    </div>

                </div>

                <div class="row justify-content-center mt-lg-5 pt-5">
                    <div class="col-lg-6 ">
                        <h2 class="mt-md-3 mb-0 text-dark-gray">Ceramic Tile</h2>
                        <p class="text-black  mt-2">A type of tile made from clay that is fired at high temperatures.
                            Ceramic tiles are often used for flooring, walls, and backsplashes in kitchens and bathrooms.
                        </p>

                    </div>
                    <div class="col-lg-4   mt-lg-0 mt-2">
                        <img src="{{ asset('frontend/terminology/ceramic.png') }}" alt="" class="product-img-hover">


                    </div>


                </div>
                <div class="row justify-content-center mt-lg-5 pt-5">
                    <div class="col-lg-6 ">
                        <h2 class="mt-md-3 mb-0 text-dark-gray">Expansion Joint</h2>
                        <p class="text-black  mt-2">A gap that is left between tiles or between the flooring and
                            walls to allow for expansion and contraction due to changes in temperature and humidity.</p>


                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-2">
                        <img src="{{ asset('frontend/terminology/expansion.png') }}" alt=""
                            class="product-img-hover">


                    </div>


                </div>
                <div class="row justify-content-center mt-lg-5 pt-5">
                    <div class="col-lg-6 ">
                        <h2 class="mt-md-3 mb-0 text-dark-gray">Surface Finishing</h2>
                        <p class="text-black  mt-2">It is an important element of flooring and tile installation, as
                            it can hugely impact the appearance, durability, and performance of the finished product. Some
                            common surface finishing elements are Glaze, Polishing, Sealing, Waxing, Lappato, etc.</p>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-2">
                        <img src="{{ asset('frontend/terminology/surface.png') }}" alt="" class="product-img-hover">
                    </div>
                </div>
                <div class="row justify-content-center mt-lg-5 pt-5 pb-5">
                    <div class="col-lg-6 ">
                        <h2 class="mt-md-3 mb-0 text-dark-gray">CM2 Outdoor Floor Tiles</h2>
                        <p class="text-black  mt-2 mb-2"> A type of ceramic tile designed for outdoor use, these
                            tiles are known for their durability, moisture resistance, and ability to withstand extreme
                            weather conditions.</p>
                        <p class="text-black"> Typically used for patios, pool decks, walkways, and other outdoor areas, CM2
                            outdoor floor tiles are a popular choice for homeowners and commercial property owners who want
                            to create a beautiful, durable exterior that can withstand heavy and extreme use weather
                            conditions.</p>

                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-2">
                        <img src="{{ asset('frontend/terminology/cm.png') }}" alt="" class="product-img-hover">
                    </div>
                </div>

        </section>
    </main>

@endsection
@section('cdn')
<style>
    .tile-600-sec {
        background-image: url('frontend/banner/product-tile-sec.png') !important;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .text-dark-gray {
        color: #444141;
    }
</style>
@endsection
