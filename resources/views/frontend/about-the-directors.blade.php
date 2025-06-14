@extends('frontend.layouts.app')
@section('title','About The Directors')


@section('content')

<main id="content">
    <section style="background-image: url('frontend/images/bg-about-us.jpg');"
    class="pt-15 pt-lg-18 pb-6 bg-img-cover-center">
    <div class="container">
        <h1 class="fs-40 mb-17 text-center text-white">About The Directors</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb py-0">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Company</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">About The Directors</li>
            </ol>
        </nav>
    </div>
</section>

    <section class="pt-5">
        <div class="container pt-3">
            <h2 class="fs-sm-40 mb-5 text-center">Directors</h2>

            <div class="row mb-5 overflow-hidden">
                {{-- <div class="col-sm-6 col-lg-4 mb-8" data-animate="fadeInUp">
                    <div class="card border-0 hover-change-content product product-03">
                        <div class="card-img-top position-relative " >
                            <div style="background-image: url('frontend/directors/d.png')"
                                class="card-img ratio bg-img-cover-center ratio-1-1 " >
                            </div>
                            <div class="card-img-overlay d-flex d-flex">
                                <div class="ml-auto d-flex flex-column">
                                    <div class="my-auto content-change-vertical">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                            <div class="mr-auto">
                                <a href="javascipt:void(0)"
                                    class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">Director</a>
                                <a href="javascipt:void(0)" class="font-weight-bold mt-1 d-block">Dhruv Rakhasiya</a>
                            </div>
                            <div class="price-wrap">
                                <p class="text-primary mb-0 price font-weight-500">Call</p>

                                    <a href="tel:+917852255488" class="fs-14 font-weight-500 border-bottom border-light-dark border-hover-primary text-uppercase letter-spacing-05 add-to-cart d-inline-block"> +91-7852255488</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-8" data-animate="fadeInUp">
                    <div class="card border-0 hover-change-content product product-03">
                        <div class="card-img-top position-relative">
                            <div style="background-image: url('frontend/directors/n.png')"
                                class="card-img ratio bg-img-cover-center ratio-1-1">
                            </div>
                            <div class="card-img-overlay d-flex d-flex">
                                <div class="ml-auto d-flex flex-column">
                                    <div class="my-auto content-change-vertical">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                            <div class="mr-auto">
                                <a href="javascipt:void(0)"
                                    class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">Director</a>
                                <a href="javascipt:void(0)" class="font-weight-bold mt-1 d-block">Nimish Patel</a>
                            </div>
                            <div class="price-wrap">
                                <p class="text-primary mb-0 price font-weight-500">Call</p>

                                    <a href="tel:+917440693569" class="fs-14 font-weight-500 border-bottom border-light-dark border-hover-primary text-uppercase letter-spacing-05 add-to-cart d-inline-block"> +91-7440693569</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6 col-lg-4 mb-8" data-animate="fadeInUp">
                    <div class="card border-0 hover-change-content product product-03">
                        <div class="card-img-top position-relative">
                            <div style="background-image: url('frontend/directors/v1.png')"
                                class="card-img ratio bg-img-cover-center ratio-1-1">
                            </div>
                            <div class="card-img-overlay d-flex d-flex">
                                <div class="ml-auto d-flex flex-column">
                                    <div class="my-auto content-change-vertical">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                            <div class="mr-auto">
                                <a href="javascipt:void(0)"
                                    class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">Director</a>
                                <a href="javascipt:void(0)" class="font-weight-bold mt-1 d-block">Virendra Nakrani</a>
                            </div>
                            <div class="price-wrap">
                                <p class="text-primary mb-0 price font-weight-500 text-right">Call</p>

                                    <a href="tel:447912029275" class="fs-14 font-weight-500 border-bottom border-light-dark border-hover-primary text-uppercase letter-spacing-05 add-to-cart d-inline-block"> +44-7912029275</a>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>

        </div>
    </section>
</main>
 @endsection
@section('js')
@endsection
