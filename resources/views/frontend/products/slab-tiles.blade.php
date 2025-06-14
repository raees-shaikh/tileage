@extends('frontend.layouts.app')
@section('title', 'Slab Tiles')

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
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item "><a href="javascript:void(0)">Products</a></li>
                        <li class="breadcrumb-item active text-capitalize text-primary" aria-current="page">Slab Tiles</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="tile-600-sec  py-5">
            <h1 class="text-center my-5"> <span class="text-primary"> Tile</span> Spotlight</h1>
            @php
                $products1200 = [
                    ['img' => 'frontend/products/sla-1.jpg', 'name' => 'Emerald Grey Endless'],
                    ['img' => 'frontend/products/sla-2.jpg', 'name' => 'Emperial Beige '],
                    ['img' => 'frontend/products/sla-3.jpg', 'name' => 'Elegant Statuario Endless'],
                    ['img' => 'frontend/products/sla-4.jpg', 'name' => 'Onyx  White'],
                    ['img' => 'frontend/products/sla-5.jpg', 'name' => 'Astronished Gray Carving'],
                    ['img' => 'frontend/products/sla-6.jpg', 'name' => 'Onyx Pearl'],
                    ['img' => 'frontend/products/sla-7.jpg', 'name' => 'Concrete Bianco'],
                    ['img' => 'frontend/products/sla-8.png', 'name' => 'Allure Grey'],
                    ['img' => 'frontend/products/sla-9.png', 'name' => 'Dappled Grey'],
                    ['img' => 'frontend/products/sla-10.png', 'name' => 'Real Satuario '],
                ];
            @endphp
            <div class="container ">

                <h4 class="text-center ">Slab Tiles</h4>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-3 mt-5 d-lg-block d-none">
                        <h4 class="product-title mb-3">Products<br>
                            80x80cm, 80x120cm </h4>
                        <div class="bg-white pb-5 rounded shadow-lg">
                            <div class="row ">

                                <div class="col-3 mt-3 ml-4">
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
                                    <div class="mt-1"><small class=""><a href=""
                                                class="other-btn">All</a></small><small class="mx-2 "><a href=""
                                                class="other-btn"> Indian</a></small> <small><a href=""
                                                class="other-btn">Import</a></small> <small class="mx-2"><a href=""
                                                class="other-btn">Export</a></small> </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @foreach ($products1200 as $product1200)
                        <div class=" col-lg-3 col-md-6 mt-4 animate fadeInRight four text-lg-left text-center">
                            <img src="{{ $product1200['img'] }}" alt="" class="product-img-hover">
                            <h5 class="m-5">{{ $product1200['name'] }}</h5>
                        </div>
                    @endforeach
                    <div class="col-lg-3 mt-5 d-lg-none d-block">
                        <h4 class="product-title mb-3">Products<br>
                            80x80cm, 80x120cm </h4>
                        <div class="bg-white pb-5 rounded shadow-lg">
                            <div class="row ">

                                <div class="col-3 mt-3 ml-4">
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
                                                class="other-btn">Glossy</a></small> <small class="mx-2"><a
                                                href="" class="other-btn">Polished</a></small> </div>
                                </div>

                            </div>
                            <hr class="mx-2">
                            <div class="row">
                                <div class="col ml-2">
                                    <p class="my-0 py-0">CATEGORY</p>
                                    <div class="mt-1"><small class=""><a href=""
                                                class="other-btn">All</a></small><small class="mx-2 "><a href=""
                                                class="other-btn"> Indian</a></small> <small><a href=""
                                                class="other-btn">Import</a></small> <small class="mx-2"><a
                                                href="" class="other-btn">Export</a></small> </div>
                                </div>

                            </div>
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
