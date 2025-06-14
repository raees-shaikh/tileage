@extends('frontend.layouts.app')
@section('title', 'Feature Tiles')

@section('content')

    <main id="content" class="bg-white">
        <section style="background-image: url('frontend/banner/product-bg.png');"
            class="pt-15 pt-lg-18 pb-6 bg-img-cover-center">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-6">
                        <img src="{{asset('frontend/banner/redefine.png')}}" alt="">
                    </div>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item "><a href="javascript:void(0)">Products</a></li>
                        <li class="breadcrumb-item active text-capitalize text-primary" aria-current="page">Feature Tiles
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="tile-600-sec  py-5">
            <h1 class="text-center my-5"> <span class="text-primary"> Tile</span> Spotlight</h1>
            @php
                $products1200 = [
                    ['img' => 'frontend/feature/1.jpg', 'name' => 'Brickstone Grey'],
                    ['img' => 'frontend/feature/2.jpg', 'name' => 'Brickstone Natural'],
                    ['img' => 'frontend/feature/3.jpg', 'name' => 'Jaisalmer Beigue '],
                    ['img' => 'frontend/feature/4.jpg', 'name' => 'Stoneage Dark Grey  '],
                    ['img' => 'frontend/feature/5.jpg', 'name' => 'Stoneage Light Grey  '],
                    ['img' => 'frontend/feature/6.jpg', 'name' => 'Matt Rock Black & White  '],
                    ['img' => 'frontend/feature/7.jpg', 'name' => 'Matt Rock  White  '],
                    ['img' => 'frontend/feature/8.jpg', 'name' => 'Moonstone Griss  '],
                    ['img' => 'frontend/feature/9.jpg', 'name' => 'Moonstone Terra  '],
                    ['img' => 'frontend/feature/10.jpg', 'name' => 'Moonstone Griss (030)  '],
                    ['img' => 'frontend/feature/11.jpg', 'name' => 'Moonstone White  '],
                ];
            @endphp
            <div class="container ">

                <h4 class="text-center ">Feature Tiles</h4>
                <div class="row justify-content-center mt-5 text-lg-left text-center">

                    <div class="col-lg-3 mt-5 order-lg-1 order-2">
                        <h4 class="product-title mb-3">Products<br>

                            30x60cm, 30x45cm </h4>
                        <div class="bg-white pb-5 rounded shadow-lg text-left">
                            <div class="row ">

                                <div class="col-3 mt-3 ml-4">
                                    <img src="{{asset('frontend/new-imgs/filter-icon.png')}}" alt="">
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
                                    <div class="mt-1"><small class=""><a href=""
                                                class="other-btn">All</a></small><small class="mx-2 "><a href=""
                                                class="other-btn"> Indian</a></small> <small><a href=""
                                                class="other-btn">Import</a></small> <small class="mx-2"><a href=""
                                                class="other-btn">Export</a></small> </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="row">
                            @foreach ($products1200 as $product1200)
                                <div class=" col-lg-4 col-md-6 mt-4 animate fadeInRight four ">
                                    <img src="{{ $product1200['img'] }}" alt="" class="product-img-hover w-100">
                                    <h5 class="m-5">{{ $product1200['name'] }}</h5>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- <section class="mt-5">
            @php
                $vitrified = [
                    [
                        'img' => 'frontend/product1200/crystal.png',
                        'name' => 'Crystal Venice Grey',
                        'sub-name' => 'Polished Finish',
                    ],
                    [
                        'img' => 'frontend/product1200/silkon.png',
                        'name' => 'Silken Venice Grey',
                        'sub-name' => 'Silken Finish',
                    ],
                    [
                        'img' => 'frontend/product1200/liner.png',
                        'name' => 'Liner Venice Grey',
                        'sub-name' => 'Rustic Punch',
                    ],
                ];
            @endphp
            <div class="container ">
                <h4 class="text-center">Glazed Vitrified Tiles </h4>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-3 d-lg-block d-none"></div>
            @foreach ($vitrified as $vitrify)
            <div class="col-lg-3 col-md-6 animate fadeInRight four">
                <img src="{{ $vitrify['img'] }}" alt="" class="product-img-hover">
                    <h5 class="mt-5">{{ $vitrify['name'] }}</h5>
                    <p>{{ $vitrify['sub-name'] }}</p>
            </div>
            @endforeach

        </div>
    </div>
        </section> --}}
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
