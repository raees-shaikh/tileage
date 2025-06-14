@extends('frontend.layouts.app')
@section('title', 'E-Catalouge')

@section('content')

    <main id="content">
        <section style="background-image: url('frontend/banner/about.png');" class="pt-15 pt-lg-18 pb-6 bg-img-cover-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-5 pb-5">
                        <img src="{{asset('frontend/banner/about-text.png')}}" alt="">
                    </div>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">E-Catalog</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="pt-5 pb-5">
            <div class="container">
                <h1 class="text-center mb-5"> <span class="text-primary"> E-</span>Catalogue</h1>
                <div class="row e-cat">
                    <div class="col-sm-6 col-lg-4 mb-6" data-animate="fadeInUp">
                        <div class="card border-0">
                            <a href="{{ url('/authentic-natural-stone') }}" class="hover-shine card-img-top">
                                <img src="{{ asset('frontend/catalog/authentic-natural-stone.jpg') }}"
                                    alt="Under the sun in Cape Town">
                            </a>
                            <div class="card-body px-0 pt-6 pb-0">
                                <h3 class="card-title my-2 fs-20">
                                    <a href="{{ url('/authentic-natural-stone') }}">Authentic Natural Stone</a>
                                </h3>
                                <p class="card-text mb-4 font-weight-500"> Presenting our latest ciramic split face feature
                                    wall tiles, boasting remarkable durability and providing an authentic natural stone feel
                                    at a fraction of the cost. </p>
                                <a href="{{ url('/authentic-natural-stone') }}"
                                    class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-6" data-animate="fadeInUp">
                        <div class="card border-0">
                            <a href="{{ url('/porcelain-tiles') }}" class="hover-shine card-img-top">
                                <img src="{{ asset('frontend/catalog/practicality.jpg') }}" alt="Hats to Suit Your Mood">
                            </a>
                            <div class="card-body px-0 pt-6 pb-0">
                                <h3 class="card-title my-2 fs-20">
                                    <a href="{{ url('porcelain-tiles') }}"> Practicality With Artistic Flair </a>
                                </h3>
                                <p class="card-text mb-4 font-weight-500">Porcelain tiles have been
                                    reliable technology for
                                    decades. Our easy-to-clean,
                                    durable porcelain tiles offer
                                    a modern touch to your
                                    home, combining practicality
                                    with artistic flair for a truly
                                    unique aesthetic.</p>
                                <a href="{{ url('/porcelain-tiles') }}"
                                    class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-6" data-animate="fadeInUp">
                        <div class="card border-0">
                            <a href="{{ url('/slab-tiles') }}" class="hover-shine card-img-top">
                                <img src="{{ asset('frontend/catalog/perfect.jpg') }}" alt="Meet the Model - Tropics">
                            </a>
                            <div class="card-body px-0 pt-6 pb-0">
                                <h3 class="card-title my-2 fs-20">
                                    <a href="{{ url('/slab-tiles') }}">Perfect Imitation Of Natual</a>
                                </h3>
                                <p class="card-text mb-4 font-weight-500">Introducing our new prac
                                    porcelain slabs, measuring
                                    80x120cm, ideal for walls and
                                    floors. With a rectangular
                                    appearance that exudes a
                                    square-like charm, these tiles
                                    offer a perfect imitation of
                                    natural products on both
                                    surfaces.</p>
                                <a href="{{ url('/slab-tiles') }}"
                                    class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-6" data-animate="fadeInUp">
                        <div class="card border-0">
                            <a href="{{ url('/outdoor-tiles') }}" class="hover-shine card-img-top">
                                <img src="{{ asset('frontend/catalog/durability.jpg') }}" alt="Under the sun in Cape Town">
                            </a>
                            <div class="card-body px-0 pt-6 pb-0">
                                <h3 class="card-title my-2 fs-20">
                                    <a href="{{ url('/outdoor-tiles') }}">Durability And Minimal</a>
                                </h3>
                                <p class="card-text mb-4 font-weight-500">Outdoor porcelain tiles
                                    exhibit exceptional durability and minimal maintenance requirements. Suited for all
                                    weather conditions, weather hot oe cold, these tiles prove to be a reliable choice for
                                    outdoor use.</p>
                                <a href="{{ url('/outdoor-tiles') }}"
                                    class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-6" data-animate="fadeInUp">
                        <div class="card border-0">
                            <a href="{{ url('/glass-tiles') }}" class="hover-shine card-img-top">
                                <img src="{{ asset('frontend/catalog/stuning.jpg') }}" alt="Hats to Suit Your Mood">
                            </a>
                            <div class="card-body px-0 pt-6 pb-0">
                                <h3 class="card-title my-2 fs-20">
                                    <a href="{{ url('/glass-tiles') }}">Stunning
                                        And
                                        Resilient</a>
                                </h3>
                                <p class="card-text mb-4 font-weight-500">Our glass tiles boast a
                                    unique technique that bonds
                                    glass with porcelain,
                                    resulting in stunning and
                                    resilient combinations,
                                    elevating their durability and
                                    beauty.</p>
                                <a href="{{ url('/glass-tiles') }}"
                                    class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-6" data-animate="fadeInUp">
                        <div class="card border-0">
                            <a href="{{ url('/feature-tiles') }}" class="hover-shine card-img-top">
                                <img src="{{ asset('frontend/catalog/feature.jpg') }}" class="w-100"
                                    alt="Under the sun in Cape Town">
                            </a>
                            <div class="card-body px-0 pt-6 pb-0 ">
                                <h3 class="card-title my-2 fs-20">
                                    <a href="{{ url('/feature-tiles') }}">Elevate Space With Feature Tiles</a>
                                </h3>
                                <p class="card-text mb-4 font-weight-500">Put simply feature tiles are those that make an
                                    eye-catching statement. Added as accents to conventional tiling, these striking designs
                                    can help to imbue any interior space with a sense of luxury and sophistication.</p>
                                <a href="{{ url('/feature-tiles') }}"
                                    class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
