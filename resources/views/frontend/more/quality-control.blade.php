@extends('frontend.layouts.app')
@section('title', 'Quality Control')

@section('content')

    <main id="content" class="bg-white">
        <section style="background-image: url('frontend/banner/quality.png');"
            class="pt-15 pt-lg-8 pb-5 bg-img-cover-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5 pt-5">
                        <div class="mt-md-5 pt-md-5"> <img src="{{asset('frontend/banner/q-control.png')}}" alt="" class="mt-5">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <img src="{{asset('frontend/banner/hand.png')}}" alt="" class="cssanimation sequence fadeInBottom">
                    </div>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">More</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Quality Control</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="tile-600-sec  pt-md-5">
            <div class="container">
                <div class="row justify-content-center mt-md-5 pt-5 custom-quality-height-800">
                    <div class="col-lg-4 col-md-6  p-md-0 p-5">
                        <img src="{{asset('frontend/new-imgs/quality-v-tile.png')}}" alt="">
                        <img src="{{asset('frontend/new-imgs/bathtub.png')}}" alt=""
                            class="bathtub  animate fadeInRight four product-img-hover">

                    </div>
                    <div class="col-1 d-lg-block d-none"></div>
                    <div class="col-lg-6 quality-mt">
                        <h1 class="mt-md-3">Quality Control</h1>
                        <p class="text-light-black mt-5">We believe that quality is everyone's responsibility and it starts
                            with our commitment to exceeding our client’s expectations. Well-coordinated working with our
                            company members, suppliers, and customers enables us to maintain the highest levels of
                            production standards.</p>
                        <p class="text-light-black">Complying with all the relevant regulations and policies related to
                            product quality, health, and safety, we regularly review and evaluate our quality management
                            systems to ensure that we meet our objectives and deliver state-of-the-art tiles to our
                            customers. Holding a significant collective background in interior designing and construction,
                            and after successfully executing several projects, our founders have imbued all their knowledge
                            and experience in structuring Tileage.</p>

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

    .footer-bg-img {
        display: none;
    }
</style>
@endsection
