@extends('frontend.layouts.app')
@section('title', 'About Us')

@section('content')
    <main id="content" class="bg-white">
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Company</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="mt-5 pt-0">
            <img src="{{asset('frontend/banner/about-bg.png')}}" alt="" class="d-md-block d-none about-us-img">
            <img src="{{asset('frontend/banner/red-stone.png')}}" alt="" class="d-md-block d-none red-stone right-slide ">
            <div class="container pt-5">
                <h4 class="text-uppercase mt-lg-5 pt-md-5 pt-2 text-center ">About Us</h4>
                <hr class="   py-0 my-0 mb-1  hr-line-about">
                <div class="row ">
                    <div class="col-2 d-none d-lg-block"></div>
                    <div class="col-lg-4 col-md-5 text-center   pt-1">
                        <img src="{{asset('frontend/banner/about-t.png')}}" alt="" class="about-t p-5 text-center t-anim">
                    </div>

                    <div class="col-lg-4 col-md-7  pt-5 pl-0 about-div">
                        <p class="pl-0 ml-0 text-light-black">iles Knowledge (abbreviated as Tileage), is a premium tile
                            manufacturing venture based in the UK which aims to bring and reflect the diverse cultural
                            aspects from around the world, right in your space.
                        </p>

                        <div class="row ">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=" ">

            <img src="{{asset('frontend/product-img-bg.png')}}" alt="" class="d-md-block d-none product-img2">
            <img src="{{asset('frontend/banner/dark-red-stone.png')}}" alt=""
                class="d-md-block d-none dark-red-stone left-slide">
            <div class="container  ">

                <div class="row justify-content-center">

                    <div class="col-lg-8   mt-5  ">
                        <p class="text-light-black">Founded by a team of passionate and zealous entrepreneurs, who are
                            dedicated towards revolutionizing the contemporary interior décor trends in the industry,
                            Tileage features an assorted collection of tiles for homes, office workspaces, and wherever one
                            would like to add an aesthetic personal touch to the ambience.</p>
                        <p class="text-light-black"> Our dedication and commitment to excellence are evident in everything
                            we do. That's why we're not just another vendor - but rather a one-stop emporium for all your
                            needs when it comes to tiles! Be it for walls, ceilings, floors, etc. our tiles are ready to
                            become an indispensable part of your zone.</p>
                    </div>


                </div>
            </div>
        </section>
        <section class="mt-100px">
            <img src="{{asset('frontend/banner/banner-new.png')}}" alt="" class="w-100">
        </section>
        <section class="mission-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/new-imgs/v-marble.png')}}" alt="" class="v-marble">
                        <img src="{{asset('frontend/new-imgs/x-red-stone.png')}}" alt="" class="x-red-stone d-sm-block d-none">
                    </div>
                    <div class="col-1 d-md-block d-none"></div>
                    <div class="col-md-6 mt-lg-5 mt-sm-0 pt-sm-0  pt-lg-5 mt-5 pt-5 ">
                        <h2 class="mt-lg-5 mt-sm-0  mt-5 pt-5 pt-lg-5"> OUR <span class="text-primary">
                                MISSION</span></h2>
                        <p class="text-light-gray">By providing you with a range of deluxe tiles at an affordable price,
                            Tileage’s objective is to elevate your zone with artful, elegant pieces that are not only
                            stunning but also serve as a reflection of you and your aura.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="vission-sec">
            <div class="container">
                <div class="row mt-md-0 mt-5">
                    <div class="col-md-6 order-md-1 order-2">
                        <h2 class="mt-lg-5  pt-lg-5 mt-5"> OUR <span class="text-primary"> VISION</span></h2>
                        <p class="text-light-gray">By providing you with a range of deluxe tiles at an affordable price,
                            Tileage’s objective is to elevate your zone with artful, elegant pieces that are not only
                            stunning but also serve as a reflection of you and your aura.</p>
                    </div>

                    <div class="col-md-6 mt-lg-5   pt-lg-5 order-md-2 order-1">
                        <img src="{{asset('frontend/new-imgs/hall-tile.png')}}" alt="" class="hall-tile">

                    </div>
                </div>
            </div>
        </section>

        <section class="ethos-sec  mt-5 pt-5">
            <div class="container mt-5 pt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <img src="{{asset('frontend/600-bg.png')}}" alt="" class="ethos-bg">
                        <h2 class="text-center mb-3">ETHOS OF <span class="text-primary"> TILE</span>AGE</h2>
                        <p class="text-light-gray text-center">Our foundation is based on strong attributes that have
                            established a unique identity in our niche. We have become the foremost choice in the premium
                            tile segment because of:</p>
                    </div>
                </div>
            </div>


            <img src="{{asset('frontend/new-imgs/side-red-stone.png')}}" alt="" class="d-md-block d-none side-red-bg">

        </section>
        <section class="ethos-sec">
            <img src="{{asset('frontend/new-imgs/red-right-stone.png')}}" alt="" class="d-md-block d-none red-right-stone">
            <img src="{{asset('frontend/600-bg.png')}}" alt="" class="client-f-img d-md-block d-none" width="430px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-1 d-md-block d-none"></div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{asset('frontend/new-imgs/afford.png')}}" alt="">
                    </div>
                    <div class="col-md-6 mt-md-5 mt-0">
                        <h6 class="text-sm-left text-center">Affordability</h6>
                        <p class="text-light-gray text-sm-left text-center">Supporting the concept of “affordable luxury”,
                            we make every effort to provide an enchanting experience that’s also economical.</p>
                    </div>
                    <div class="col-2 d-md-block d-none"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-1 d-md-block d-none"></div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{asset('frontend/new-imgs/varierty.png')}}" alt="">
                    </div>
                    <div class="col-md-6 mt-md-5 mt-0">
                        <h6 class="text-sm-left text-center">Variety</h6>
                        <p class="text-light-gray text-sm-left text-center">Having a variegated cumulation of tiles, with
                            new design pattern additions happening continuously, Tileage is on the path to becoming a
                            central hub for a plethora of tile sizes and motifs.</p>
                    </div>
                    <div class="col-2 d-md-block d-none"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-1 d-md-block d-none"></div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{asset('frontend/new-imgs/quality.png')}}" alt="">
                    </div>
                    <div class="col-md-6 mt-md-5 mt-0">
                        <h6 class="text-sm-left text-center">Quality</h6>
                        <p class="text-light-gray text-sm-left text-center">Absolute precision and unmatched craftsmanship
                            are synonymous with Tileage. Using the highest grade raw materials to manufacture our tiles,
                            durability and long-lasting performance are ascertained by us.</p>
                    </div>
                    <div class="col-2 d-md-block d-none"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-1 d-md-block d-none"></div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{asset('frontend/new-imgs/innovation.png')}}" alt="">
                    </div>
                    <div class="col-md-6 mt-md-5 mt-0">
                        <h6 class="text-sm-left text-center">Creativity And Innovation</h6>
                        <p class="text-light-gray text-sm-left text-center">By constantly fueling ourselves with elixirs of
                            creativity, innovation is a necessity at Tileage.   </p>
                    </div>
                    <div class="col-2 d-md-block d-none"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-1 d-md-block d-none"></div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{asset('frontend/new-imgs/support.png')}}" alt="">
                    </div>
                    <div class="col-md-6 mt-md-5 mt-0">
                        <h6 class="text-sm-left text-center">Swift Customer Support</h6>
                        <p class="text-light-gray text-sm-left text-center">Affirming Ralph Waldo Emerson’s quote, “Luxury
                            is to be understood”, we at Tileage devote tremendous amounts of time and effort to exactly
                            understand our customer’s needs.</p>
                        <p class="text-light-gray text-sm-left text-center"> Committed to providing the best possible
                            solutions when it comes to addressing their queries, grievances, etc. - we follow a proactive
                            approach in consulting them so that can consider a perfect choice and go for the right purchase.
                        </p>
                    </div>
                    <div class="col-2 d-md-block d-none"></div>
                </div>
            </div>
            <img src="{{asset('frontend/banner/about-bg.png')}}" alt="" class="ethos-right-bg d-md-block d-none">
        </section>
        <section class=" pb-5 pb-md-0 team-sec mt-sm-0 mt-5">
            <div class="container">
                <h2 class="text-center ">THE TEAM</h2>
                <div class="row mt-5">
                    <div class="col">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                                               <div class="carousel-item active">
                                    <div class="row justify-content-center" class="p-5" id="team">

                                        <div class="col-lg-4 ml-5 mt-0 pt-lg-0 pt-5 text-center">
                                            <img src="{{ url('frontend/directors/new-img-v.png') }}" alt=""
                                                class=" ml-xl-5 pl-xl-5 ml-3 team-img">
                                            <img src="{{ url('frontend/directors/white-box.png') }}" alt=""
                                                class=" mt-105 box-height-400">
                                        </div>
                                        <div class="col-lg-7  mt-0 pt-0 ">
                                            <h6 class="mt-sm-5 p-5">Virendra Nakrani</h6>
                                            <p class="text-light-gray px-3">An accomplished individual with an impressive
                                                academic and professional background, Nimish holds a Master's degree in
                                                Engineering with a specialization in Construction from the UK and has over
                                                15 years of experience in the construction business abroad. He has
                                                demonstrated exceptional leadership skills, managing teams of over 400
                                                people per site with ease, and is highly skilled at overseeing multiple
                                                sites simultaneously, exhibiting his multi-organizational abilities.</p>
                                            <p class="text-light-gray px-3">His extensive experience in the field has led
                                                him to work with some of the top builders and contractors internationally,
                                                earning him a reputation for excellence in his field. Nimish's dedication to
                                                his work and ability to handle complex projects has facilitated Tileage in
                                                setting up a round-the-clock distribution system.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="container d-md-block d-none about-bottom-hr ">
            <img src="{{asset('frontend/600-bg.png')}}" alt="" class="d-md-block d-none about-bottom-bg">
        </section>
    </main>
@endsection
