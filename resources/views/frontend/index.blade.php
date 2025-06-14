@extends('frontend.layouts.app')
@section('title', '')

@section('content')

    {{-- <section class="overflow-hidden">
        <div class=""
            data-slick-options='{"slidesToShow": 1,"infinite":true,"autoplay":false,"dots":true,"arrows":false}'>

            <div class="box">
                <div class="d-flex flex-column bg-img-cover-center vh-100 pt-xxl-13 custom-height-sm"
                    style="background-image: url('frontend/banner/home-bg.png')">
                    <div
                        class="d-flex flex-column h-100 align-items-center justify-content-center justify-content-xxl-start pt-xxl-13">
                        <div class="container container-xxl">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-md-6 col-12 text-md-left text-center b-text">
                                    <h1 class="mb-6   lh-1 mb-5 text-capitalize banner-text-font  text-white">Know Your  S<span
                                            class="text-primary">tile</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="container container-xxl">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="overflow-hidden">
        <div class="slick-slider slick-dots-light dots-inner-center"
            data-slick-options='{"slidesToShow": 1,"infinite":true,"autoplay":false,"dots":true,"arrows":false}'>
            <div class="box">
                <div class="d-flex flex-column justify-content-center justify-content-lg-start bg-img-cover-center custom-height-sm vh-600 pt-lg-17"
                    style="background-image: url('frontend/banner/marble-bg.png')">
                    <div
                        class="d-flex flex-column justify-content-center justify-content-lg-start h-100 w-100 align-items-center">
                        <div class="container container-xxl justify-content-center">
                            <div class="d-flex justify-content-center mb-6">
                            </div>
                            <div class="row mt-5 pt-5 justify-content-center banner-div">
                                <div class="col-md-6 mt-sm-5 pt-md-5 ml-0 p-0 m-0 ml--20 mt-5 pt-5 mt-767"><img
                                        src="{{asset('frontend/banner/know-your-stile.png')}}" alt=""
                                        class="banner-side-width mx-auto"></div>
                                <div class="col-1"></div>
                                <div class="col-md-4  mb-5 pb-5 mt-5 pt-5 banner-side-width-div">
                                    <img src="{{asset('frontend/circle.png')}}" alt=""
                                        class="  mx-auto text-center circle-border">
                                    <img src="{{asset('frontend/banner/round-marble.png')}}" alt="" class=" round-marble ">
                                    <img src="{{asset('frontend/banner/vertical-marble.png')}}" alt=""
                                        class=" vertical-marble  mx-auto text-center banner-side-width-rotate">
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="d-flex flex-column justify-content-center justify-content-lg-start bg-img-cover-center vh-100 custom-height-sm pt-lg-17"
                    style="background-image: url('frontend/banner/second-bg-new-1.png')">
                    <div
                        class="d-flex flex-column justify-content-center justify-content-lg-start h-100 w-100 align-items-center">
                        <div class="container container-xxl">
                            <div class="d-flex justify-content-center mb-6">
                            </div>
                            <div class="row second-banner mt-767 justify-content-md-start justify-content-center">
                                <div class="col-1"></div>
                                <div class="col-md-3    mt--767 gray-tile-div">
                                    <img src="{{asset('frontend/banner/gray-curve-stone.png')}}" alt=""
                                        class="gray-side-width mx-auto text-center">
                                    <h2 class="text-left second-banner-text text-white ">Your <br>S<span
                                            class="text-primary">tile</span>, <br> Your <br>Space </h2>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-md-3   white-tile-div">
                                    <img src="{{asset('frontend/banner/white-curve-stone.png')}}" alt=""
                                        class="white-side-width  mx-auto text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="d-flex flex-column   justify-content-center justify-content-lg-start bg-img-cover-center vh-100 custom-height-sm pt-lg-17"
                    style="background-image: url('frontend/banner/third-new.png')">
                    <div
                        class="d-flex flex-column justify-content-center justify-content-lg-start h-100 w-100 align-items-center">
                        <div class="container container-xxl">
                            <div class="d-flex justify-content-center mb-6">

                            </div>
                            <div class="row  mt-third-bg ">
                                <div class="col-sm-4 mt-5 third-bg-left-div">
                                    <img src="{{asset('frontend/banner/marble-tile.png')}}" alt="" class="third-bg-left-tile ">
                                    <img src="{{asset('frontend/banner/white-round-tile.png')}}" alt=""
                                        class="ml-3 mt-2 round-white-tile">
                                    <img src="{{asset('frontend/banner/vertical-stone.png')}}" alt="" class="vertical-stone">
                                </div>
                                <div class="col-2"></div>
                                <div class="col-sm-6 third-bg-right-div">
                                    <img src="{{asset('frontend/banner/x-tile.png')}}" alt="" class="third-bg-right-tile">
                                    <img src="{{asset('frontend/banner/horizontal-tile.png')}}" alt="" class=" x-marble">
                                    <h1 class="text-white third-bg-text text-center">"<span
                                            class="text-primary">Quality</span> Is Priority"</h1>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mt-lg-0">
        <img src="{{asset('frontend/banner/about-bg.png')}}" alt="" class="d-md-block d-none about-img">
        <div class="container mt-5 pt-5 pt-lg-0 mt-lg-0">
            <div class="row ">
                <div class="col-1"></div>
                <div class="col-lg-4 col-md-5 text-center mt-md-5 mt-2 pt-md-3 pt-1">
                    <img src="{{asset('frontend/t.png')}}" alt="" class="t-anim">
                </div>
                <div class="col-lg-7 col-md-7  pt-5 pl-0 about-div">
                    <h4 class="text-uppercase mt-5 pt-5 text-center ">Where S<span class="text-primary">tile</span> is an
                        <span class="text-primary">Expression</span>
                    </h4>
                    <hr class="   py-0 my-0 mb-1  hr-line">
                    <p class="pl-0 ml-0 text-light-black">ileage is a place where you will discover the essence of luxury,
                        blended with affordability and variety. Offering an exquisite collection of tiles for your space, we
                        understand the Art of Tiles and the meaning of “Style” - for it's a medium to express yourself and
                        define who you are!</p>
                    <p class="pl-0 ml-0 text-light-black">living up to international benchmarks and quality checks, we
                        ensure that every effort goes into making and curating a sumptuous selection of porcelain tiles,
                        aptly suited for your surroundings.</p>
                    <div class="row ">

                        <div class=" text-center mx-auto"> <a href="{{ '/about-us' }}"
                                class="  h3 btn learn-btn btn-sm btn-hover">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-3 ">
        @php
            $tiles = [
                [
                    'name' => 'Bathroom Tiles',
                    'img' => 'frontend/products/bathroom.png',
                ],
                [
                    'name' => 'Wall Tiles',
                    'img' => 'frontend/products/wall.png',
                ],
                [
                    'name' => 'Concrete Tiles',
                    'img' => 'frontend/products/concrete.png',
                ],
                [
                    'name' => 'Timber Look Tiles',
                    'img' => 'frontend/products/timber.png',
                ],
                [
                    'name' => 'Stone Effect',
                    'img' => 'frontend/products/stone.png',
                ],
                [
                    'name' => 'Wood Effect',
                    'img' => 'frontend/products/wood.png',
                ],
                [
                    'name' => 'Marble Effect',
                    'img' => 'frontend/products/marble.png',
                ],
                [
                    'name' => 'Metalic Effect',
                    'img' => 'frontend/products/metalic.png',
                ],
            ];

        @endphp

        <img src="frontend/product-img-bg.png" alt="" class="d-md-block d-none product-img">
        <div class="container  mt-lg-5 pt-lg-5">
            <h2 class="text-capitalize text-center mb-3 px-0 mx-0 text-light-gray">create a <span class="text-primary">
                    space</span> to <span class="text-primary">enjoy</span></h2>
            <div class="row slide-div">
                @foreach ($tiles as $item)
                    <div class="col-lg-3  col-sm-6 mb-5 mt-1  ">
                        <div class="card-style">
                            <h6 class="text-primary py-1 text-uppercase font-weight-light">{{ $item['name'] }}</h6>

                            <div class="card">
                                <a href="{{ url('/e-catalogue') }}">
                                    <img class="card-img-top " src="{{ $item['img'] }}" alt="Card image cap">
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="mt-md-5 pt-2">
        <div class="container mt-5 pt-0">
            <h2 class=" font-weight-600 text-center mb-4 ml-4"> <span class="text-primary">Tile</span> Spotlight</h2>
            <div class="row pt-lg-5">
                <div class="col-md-6 pt-4 mt-md-4">
                    <h2 class="gray-clr  ml-4 font-weight-500">Products<br> 35x45cm, 30x60cm</h2>
                    <h4 class="mt-3 mb-3 ml-4   font-weight-600">Authentic Natural Stone</h4>
                    <p class="pb-0 mb-2 text-capitalize text-light-black px-4">Presenting our latest ceramic split face
                        feature wall tiles, boasting remarkable durability and providing an authentic natural stone feel at
                        a fraction of the cost.</p>
                    <a href="{{ url('/authentic-natural-stone') }}"
                        class="ml-4 font-weight-light btn  btn-sm view-all-btn  mt-4"> <span
                            class="three-letters">Vie</span>w All</a>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('frontend/600-bg.png')}}" alt="" class=" bg-600">
                    <div class="text-center">
                        <img src="{{ url('frontend/products/auth-1.png') }}" alt=""
                            class="imgs-600 zoom shadow-hover-2">
                        <img src="{{ url('frontend/products/auth-2.png') }}" alt=""
                            class="imgs-600 mx-2 middle-600 zoom shadow-hover-2">
                        <img src="{{ url('frontend/products/auth-3.png') }}" alt=""
                            class="imgs-600 zoom shadow-hover-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-md-5 pt-md-5 mb-5 pb-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-5 mt-after-md-30">
                    <img src="{{asset('frontend/600-bg.png')}}" alt="" class=" bg-1200">
                    <div class="text-center">
                        <img src="{{ url('frontend/products/por-1.png') }}" alt=""
                            class="imgs-1200 custom-1200-img1 shadow-hover">
                        <img src="{{ url('frontend/products/por-3.png') }}" alt=""
                            class="imgs-1200  custom-1200-img2 shadow-hover">
                        <img src="{{ url('frontend/products/por-2.png') }}" alt=""
                            class="imgs-1200 custom-1200-img3 shadow-hover">
                    </div>
                </div>

                <div class="col-md-6 mt-md-0 order-md-2 order-1 mt-md-0 mt-3">

                    <h2 class="gray-clr  ml-4 font-weight-500">Products<br>
                        30x60cm, 60x60cm, 60x120cm</h2>
                    <h4 class="mt-3 mb-3 ml-4  font-weight-600">Porcelain Tiles</h4>
                    <p class="sub-point ml-4 mb-0">PRACTICALITY WITH ARTISTIC FLAIR</p>
                    <p class="ml-4 pb-0 mb-2 text-capitalize text-light-black">Porcelain tiles have been a reliable
                        technology for decades. Our easy-to-clean, durable porcelain tiles offer a modern touch to your
                        home, combining practicality with artistic flair for a truly unique aesthetic.</p>

                    <a href="{{ url('/porcelain-tiles') }}"
                        class=" mt-4 font-weight-light btn  btn-sm view-all-btn  ml-4"> <span id="span-clr-change"
                            class="three-letters">
                            Vie</span>w All</a>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-md-5 pt-md-5">
        <div class="container mt-md-5 pt-md-5">

            <div class="row">

                <div class="col-md-6 pt-4 mt-md-4">

                    <h2 class="gray-clr  ml-4 font-weight-500">Products<br> 80x80cm, 80x120cm</h2>
                    <h4 class="mt-3 mb-3 ml-4   font-weight-600">Slab Tiles</h4>
                    <p class="sub-points ml-4 mb-0">PERFECT IMITATION OF NATURAL</p>
                    <p class="pb-0 mb-2 text-capitalize text-light-black px-4">Presenting our latest ceramic split face
                        feature wall tiles, boasting remarkable durability and providing an authentic natural stone feel at
                        a fraction of the cost.</p>
                    <a href="{{ url('/slab-tiles') }}" class="ml-4 font-weight-light btn  btn-sm view-all-btn  mt-4">
                        <span class="three-letters">Vie</span>w All</a>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('frontend/600-bg.png')}}" alt="" class=" bg-600">
                    <div class="text-center">
                        <img src="{{ url('frontend/products/slab-1.png') }}" alt=""
                            class="img-top-2 imgs-600 zoom shadow-hover-2">
                        <img src="{{ url('frontend/products/slab-2.png') }}" alt=""
                            class="imgs-600 mx-2 middle-600 zoom img-top  shadow-hover-2">
                        <img src="{{ url('frontend/products/slab-3.png') }}" alt=""
                            class="img-top-2 imgs-600 zoom shadow-hover-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-md-5 pt-md-5 mb-5 pb-5">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-5 mt-after-md-30">
                    <img src="{{asset('frontend/600-bg.png')}}" alt="" class=" bg-1200">
                    <div class="text-center">
                        <img src="{{ url('frontend/products/1200-1.png') }}" alt=""
                            class="imgs-1200 custom-1200-img1 shadow-hover">
                        <img src="{{ url('frontend/products/1200-3.png') }}" alt=""
                            class="imgs-1200  custom-1200-img2 shadow-hover">
                        <img src="{{ url('frontend/products/1200-2.png') }}" alt=""
                            class="imgs-1200 custom-1200-img3 shadow-hover">
                    </div>
                </div>

                <div class="col-md-6 mt-md-0 order-md-2 order-1 mt-md-0 mt-3">

                    <h2 class="gray-clr  ml-4 font-weight-500">Products<br>
                        60x90cm</h2>
                    <h4 class="mt-3 mb-3 ml-4  font-weight-600">Outdoor Tiles</h4>
                    <p class="sub-points ml-4 mb-0">DURABILITY AND MINIMAL</p>
                    <p class="ml-4 pb-0 mb-2 text-capitalize text-light-black">outdoor tiles exhibit exceptional durability
                        and minimal maintenance requirements. Suited for all weather conditions, whether hot or cold, these
                        tiles prove to be a feliable choice for outdoor use.</p>
                    <a href="{{ url('/outdoor-tiles') }}" class=" mt-4 font-weight-light btn  btn-sm view-all-btn  ml-4">
                        <span id="span-clr-change" class="three-letters">
                            Vie</span>w All</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-md-5 pt-md-5">
        <div class="container mt-md-5 pt-md-5">

            <div class="row pt-lg-5">

                <div class="col-md-6 pt-4 mt-md-4">

                    <h2 class="gray-clr  ml-4 font-weight-500">Products<br>60x120cm</h2>
                    <h4 class="mt-3 mb-3 ml-4   font-weight-600">Glass Tiles</h4>
                    <p class="sub-points ml-4 mb-0">STUNNING AND
                        RESILIENT</p>
                    <p class="pb-0 mb-2 text-capitalize text-light-black px-4">Our glass tiles boast a
                        unique technique that bonds glass with porcelain,
                        resulting in stunning and
                        resilient combinations,
                        elevating their durability and beauty</p>
                    <a href="{{ url('/glass-tiles') }}" class="ml-4 font-weight-light btn  btn-sm view-all-btn  mt-4">
                        <span class="three-letters">Vie</span>w All</a>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('frontend/600-bg.png')}}" alt="" class=" bg-600">
                    <div class="text-center">
                        <img src="{{ url('frontend/products/glass-1.png') }}" alt=""
                            class="imgs-600 zoom shadow-hover-2">
                        <img src="{{ url('frontend/products/glass-2.png') }}" alt=""
                            class="imgs-600 mx-2 middle-600 zoom shadow-hover-2">
                        <img src="{{ url('frontend/products/glass-3.png') }}" alt=""
                            class="imgs-600 zoom shadow-hover-2">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-md-5 mb-5 pb-5 pt-lg-5">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-5 mt-after-md-30">
                    <img src="{{asset('frontend/600-bg.png')}}" alt="" class=" bg-1200">
                    <div class="text-center">
                        <img src="{{ url('frontend/products/f-1.png') }}" alt=""
                            class="imgs-1200 custom-1200-img1 shadow-hover feature">
                        <img src="{{ url('frontend/products/f-2.png') }}" alt=""
                            class="imgs-1200  custom-1200-img2 shadow-hover feature">
                        <img src="{{ url('frontend/products/f-3.png') }}" alt=""
                            class="imgs-1200 custom-1200-img3 shadow-hover feature">
                    </div>
                </div>

                <div class="col-md-6 mt-md-0 order-md-2 order-1 mt-md-0 mt-3">

                    <h2 class="gray-clr  ml-4 font-weight-500">Products<br>
                        30x60cm, 30x45cm</h2>
                    <h4 class="mt-3 mb-3 ml-4  font-weight-600">Feature Tiles</h4>
                    <p class="sub-points ml-4 mb-0 text-uppercase">Elevate space with feature tiles</p>
                    <p class="ml-4 pb-0 mb-2 text-capitalize text-light-black">Put simply feature tiles are those that make
                        an eye-catching statement. Added as accents to conventional tiling, these striking designs can help
                        to imbue any interior space with a sense of luxury and sophistication.</p>
                    <a href="{{ url('/feature-tiles') }}" class=" mt-4 font-weight-light btn  btn-sm view-all-btn  ml-4">
                        <span id="span-clr-change" class="three-letters">
                            Vie</span>w All</a>
                </div>
            </div>
        </div>
    </section>

    <section class="client-sec">
        <img src="{{asset('frontend/600-bg.png')}}" alt="" class="client-f-img d-lg-block d-none" width="430px">
        <img src="{{asset('frontend/600-bg.png')}}" alt="" class="client-s-img text-center" width="530px">
        <img src="{{asset('frontend/600-bg.png')}}" alt="" width="430px" class="client-t-img d-lg-block d-none">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-8">

                <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner ">

                        <div class="carousel-item active">
                            <img src="{{asset('frontend/man.png')}}" alt="" class=" mx-auto circle-img" width="90px"
                                height="90px">
                            <div class="col-sm-10 mx-auto">

                                <div class="card client-card-bg card-border py-3">

                                    <h6 class="text-center text-light-gray mt-5 pt-1">Brooke B</h6>

                                    <p class="client-text text-center px-2">Good experience. I got new customer and finally
                                        my 1st deal success. Many others are connected with me I hope I will do good
                                        business in future.</p>
                                    <small class="text-center client-text pb-2">May 08, 2023</small>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('frontend/man.png')}}" alt="" class=" mx-auto circle-img" width="90px"
                                height="90px">
                            <div class="col-sm-10 mx-auto">
                                <div class="card client-card-bg card-border py-3">

                                    <h6 class="text-center text-light-gray mt-5 pt-1">Arianne C. Brisbane QLD</h6>
                                    <p class="client-text text-center px-2">Great stock, prompt delivery of samples and
                                        excellent customer service. Would definitely recommend and use again.</p>
                                    <small class="text-center client-text pb-2">Oct 12, 2023</small>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('frontend/man.png')}}" alt="" class=" mx-auto circle-img" width="90px"
                                height="90px">
                            <div class="col-sm-10 mx-auto">
                                <div class="card client-card-bg card-border py-3">

                                    <h6 class="text-center text-light-gray mt-5 pt-1">Chris C. Regional VIC</h6>
                                    <p class="client-text text-center px-2">Great service and updates from sales team.
                                        Delivered interstate well within a week from order.

                                        Great looking tiles, Highly recommend</p>
                                    <small class="text-center client-text pb-2">Jan 05, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev mt-slider-icon" href="#carouselExampleControls" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next mt-slider-icon" href="#carouselExampleControls" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="pb-5 pb-lg-7 mt-5 pt-5 mb-5 pb-5">
        @php
            $items = [
                [
                    'img' => 'frontend/authentic/11.jpg',
                    'link' => '/authentic-natural-stone',
                ],
                [
                    'img' => 'frontend/products/por-7.jpg',
                    'link' => '/porcelain-tiles',
                ],
                [
                    'img' => 'frontend/products/sla-8.png',
                    'link' => '/slab-tiles',
                ],
                [
                    'img' => 'frontend/products/out-4.jpg',
                    'link' => '/outdoor-tiles',
                ],
                [
                    'img' => 'frontend/products/glass-3.png',
                    'link' => '/glass-tiles',
                ],
                [
                    'img' => 'frontend/feature/6.jpg',
                    'link' => '/feature-tiles',
                ],
            ];

        @endphp
        <div class="container mt-5 pt-5">
            <div class="slick-slider  custom-arrow-1 "
                data-slick-options='{"slidesToShow": 5,"infinite":true,"autoplay":true,"dots":false,"arrows":true,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":4,"dots":true,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 3,"dots":true,"arrows":false}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"dots":true,"arrows":false}}]}'>
                @foreach ($items as $itemtile)
                    <div class="box ">
                        <a href="{{ $itemtile['link'] }}" class=" border-0 align-items-center">
                            <img src="{{ url('frontend/products/new-octa.png') }}" alt="">
                            <img src="{{ $itemtile['img'] }}" alt="" class="first-tile pentagon-hover">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('js')
@endsection
