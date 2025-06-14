@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('cdn')

@endsection
@section('content')
    <main id="content">
        <section style="background-image: url('frontend/banner/home-bg.png');"
            class="pt-15 pt-lg-18 pb-6 bg-img-cover-center">
            <div class="container">
<div class="row justify-content-center">
    <div class="col-md-6 mb-5 pb-5">

        <img src="{{asset('frontend/banner/redefine.png')}}" alt="">
    </div>
</div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Company</a></li> --}}
                        <li class="breadcrumb-item active text-primary" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </section>
        {{-- <section style="background-image: url('frontend/images/bg-about-us.jpg');"
            class="pt-5 pt-lg-18 pb-6 bg-img-cover-center">
            <div class="container">
                <h1 class="fs-40 mb-5 text-center text-white">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Contact Us</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </section> --}}
        {{-- <section class="pt-10 pb-10">
        <div class="container">
            <h2 class="fs-sm-40 mb-10 text-center">Contact Us</h2>
            <div id="map" class="mapbox-gl map-point-animate" style="height: 535px"
                data-mapbox-access-token="pk.eyJ1IjoiZHVvbmdsaCIsImEiOiJjanJnNHQ4czExMzhyNDVwdWo5bW13ZmtnIn0.f1bmXQsS6o4bzFFJc8RCcQ"
                data-mapbox-options='{"center":[-106.53671888774004, 35.12362056187368],"setLngLat":[-106.53671888774004, 35.12362056187368],"zoom":5}'
                data-mapbox-marker='[{"position":[-106.53671888774004, 35.12362056187368],"className":"marker","backgroundImage":"images/marker-01.png","backgroundRepeat":"no-repeat","width":"70px","height":"70px"}]'>
            </div>
        </div>
    </section> --}}
        <div class="mt-5 pt-5 ">

            <h1 class="text-center "> <span class="text-primary"> Contact</span> Us</h1>
        </div>
        <div class="pb-8 mt-5 pt-md-2 ">
            <div class="container mt-5">
                <div class="row no-gutters ">
                    <div class="col-md-7 mb-8 mb-md-0">
                        <h2 class="fs-24 mb-2">
                            We Would Love To Hear From You.
                        </h2>
                        <p class="mb-sm-5 mb-7">If you’ve got great products your making or looking to contact with us then
                            drop us
                            a line.</p>
                        <form action ="{{ route('frontend.contact.submit') }}" method="POST" class="text-md-left text-center">
                            @csrf
                            <div class="row ">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name*"
                                        minlength="3" maxlength="30" required>
                                    @if ($errors->has('name'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

                            </div>

                            <div class="row mb-5">
                                <div class="col-sm-6  mt-5">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address*"
                                        minlength="5" maxlength="40" required>
                                    @if ($errors->has('email'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-sm-6 mt-5">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number*"
                                        minlength="10" maxlength="10" required>
                                    @if ($errors->has('phone'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group mb-4">
                                <textarea name="message" class="form-control" rows="6" placeholder="Your Message*" minlength="5" maxlength="250"></textarea>
                                @if ($errors->has('message'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('message') }}
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary text-uppercase letter-spacing-05">submit
                                now</button>
                        </form>
                    </div>
                    <div class="col-md-5 pl-xl-13 pl-md-6">
                        <p class="font-weight-bold text-primary mb-2">Address</p>
                        <address class="mb-2">
                            9 Garthway, Greater, London N12 0QY.
                        </address>
                        <p class="font-weight-bold text-primary mb-2">Contact Info</p>
                        {{-- <p class="mb-0"><a href="tel:+917440693569" class="text-gray hover-primary   "> +91-7440693569</a></p> --}}
                        <p class="mb-2"><i class="fas fa-mobile-alt  text-primary"></i> &nbsp; <a href="tel:447912029275" class="text-gray hover-primary ">+44-7912029275</a>
                        </p>
                        <p class="mb-2"><i class="fas fa-mobile-alt  text-primary"></i> &nbsp; <a href="tel:917762730519" class="text-gray hover-primary ">+91-7762730519</a>
                        </p>
                        {{-- <p class="mb-0"><a href="tel:+917852255488" class="text-gray hover-primary "> +91-7852255488</a></p> --}}
                        <p class="mb-0"> <i class="far fa-envelope text-primary"></i> &nbsp;<a href="mailto:info@tileage.co.uk" class="text-gray hover-primary  ">
                                info@tileage.co.uk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('js')
@endsection
