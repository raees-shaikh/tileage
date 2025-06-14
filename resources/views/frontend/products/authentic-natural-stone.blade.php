@extends('frontend.layouts.app')
@section('title', 'Authentic Natural Stone')


@section('content')

    <main id="content" class="bg-white">
        <section style="background-image: url('frontend/banner/product-bg.png');"
            class="pt-15 pt-lg-18 pb-6 bg-img-cover-center">


            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/banner/redefine.png') }}" alt="">
                    </div>
                </div>
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item "><a href="javascript:void(0)">Products</a></li>
                        <li class="breadcrumb-item active text-capitalize text-primary" aria-current="page">Authentic
                            Natural Stone</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="tile-600-sec  pt-5">
            <h1 class="text-center mt-5 mb-5"> <span class="text-primary"> Tile</span> Spotlight</h1>
            @php
                $products600 = [
                    ['img' => 'frontend/authentic/1.png', 'name' => 'matt rock finish', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/2.png', 'name' => 'brickstone natural', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/3.png', 'name' => 'matt rock black & white', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/4.png', 'name' => 'jaisalmer baige', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/5.png', 'name' => 'Moonstone grey ', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/6.png', 'name' => 'stone age light grey ', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/7.png', 'name' => 'Moonstone gris', 'sub-name' => 'glossy finish'],
                    [
                        'img' => 'frontend/authentic/8.png',
                        'name' => 'stone age dark grey ',
                        'sub-name' => 'glossy finish',
                    ],
                    ['img' => 'frontend/authentic/9.jpg', 'name' => 'Eternal Satuario ', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/10.jpg', 'name' => 'Spectra Bianco Endless ', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/11.jpg', 'name' => 'Spectra Griss Endless ', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/12.jpg', 'name' => 'Spectra Brown Endless ', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/13.jpg', 'name' => 'Onyx White ', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/14.jpg', 'name' => 'Royal Griss ', 'sub-name' => ''],
                    ['img' => 'frontend/authentic/15.jpg', 'name' => 'Royal Bianco ', 'sub-name' => ''],
                ];
            @endphp



            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2 pb-5">
                        <h4 class="product-title mb-3">Products<br>
                            30x45cm, 30x60cm </h4>

                        <div class="bg-white pb-5 rounded shadow-lg">
                            <div class="row ">

                                <div class="col-3  ml-4">
                                    <img src="{{ asset('frontend/new-imgs/filter-icon.png') }}" alt="">
                                </div>
                                <div class="col-7 mt-5">
                                    <h5> Product Filter</h5>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col ml-2 mt-5">
                                    <p class="my-0 py-0">SORT BY</p>
                                    <div class="mt-1"> <small class=""><a href=""
                                                class="other-btn">All</a></small> <small class="mx-2"><a href=""
                                                class="other-btn">New</a></small> <small><a href=""
                                                class="other-btn">Old</a></small> <small class="mx-2"><a href=""
                                                class="other-btn">Most Viewed</a></small> </div>
                                </div>

                            </div>
                            <hr class="mx-2">
                            <div class="row">
                                <div class="col ml-2 ">
                                    <p class="my-0 py-0">FINISH</p>
                                    <div class="mt-1"> <small class=""><a href=""
                                                class="other-btn">All</a></small> <small class="mx-2"><a href=""
                                                class="other-btn">Wooden</a></small> <small><a href=""
                                                class="other-btn">Glossy</a></small> <small class="mx-2"><a href=""
                                                class="other-btn">Polished</a></small> </div>
                                </div>

                            </div>
                            <hr class="mx-2">
                            <div class="row">
                                <div class="col ml-2">
                                    <p class="my-0 py-0">CATEGORY</p>
                                    <div class="mt-1"> <small class=""><a href=""
                                                class="other-btn">All</a></small> <small class="mx-2 "><a href=""
                                                class="other-btn"> Indian</a></small> <small><a href=""
                                                class="other-btn">Import</a></small> <small class="mx-2"><a href=""
                                                class="other-btn">Export</a></small> </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-9 order-lg-2 order-1">
                        <h4 class=" mb-3  text-center ml--30auth">Authentic Natural Stone</h4>
                        <div class="row pb-5 text-lg-left text-center">

                            @foreach ($products600 as $product600)
                                <div class="col-lg-4 col-md-6 mt-4 animate fadeInRight four">
                                    <img src="{{ $product600['img'] }}" alt="" class="product-img-hover">
                                    <h5 class="mt-5 text-capitalize">{{ $product600['name'] }}</h5>
                                    {{-- <p class="text-capitalize">{{ $product600['sub-name'] }}</p> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>

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
</style>
@endsection
