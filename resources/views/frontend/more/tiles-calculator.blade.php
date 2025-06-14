@extends('frontend.layouts.app')
@section('title', 'Tiles Calculator')


@section('content')
    <main id="content">
        <section style="background-image: url('frontend/new-cal.png');" class="pt-15 pt-lg-18 pb-6 bg-img-cover-center">
            <div class="container">
                <h1 class="fs-40 mb-17 text-center">Tiles Calculator</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">More</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Tiles Calculator</li>
                    </ol>
                </nav>
            </div>
        </section>
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
        <div class="mt-5 pt-lg-5 ">
            <h1 class="text-center "> <span class="text-primary"> Tiles </span> Calculator</h1>

        </div>
        <div class="pb-5 mt-5 pt-5">
            <div class="container mt-lg-5">
                <div class="row no-gutters ">
                    <div class="col-md-7 ">
                        <h2 class="fs-24 mb-2">
                            Box Calculation
                        </h2>
                        <form id="tileCalculator">
                            <div class="row ">
                                <div class="col-12">
                                    <input type="text" id="length" class="form-control input-style"
                                        placeholder="Enter Length In cm" required="">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <input type="text" id="width" class="form-control input-style"
                                        placeholder="Enter Width In cm" required="">
                                </div>
                            </div>
                            <div class="row mt-5 mb-5">
                                <div class="col-12">
                                    <select id="tileSize" class="form-control text-muted input-style">
                                        <option value="">Select Any</option>
                                        <option value="35x45">35 x 45 cm</option>
                                        <option value="30x60">30 x 60 cm</option>
                                        <option value="60x60">60 x 60 cm</option>
                                        <option value="60x120">60 x 120 cm</option>
                                        <option value="80x120">80 x 120 cm</option>
                                        <option value="60x90">60 x 90 cm</option>
                                        <option value="80x120">80 x 80 cm</option>
                                        <option value="60x90">30 x 45 cm</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-primary text-uppercase letter-spacing-05 mb-md-3">Calculate</button>
                        </form>
                        <hr class="d-md-block d-none">
                        <h2 class="fs-24 my-3 pt-3 ">
                            Total Calculations
                        </h2>
                        <form class="box">
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <label for="">Total Area Covered in Meter</label>
                                    <input type="text" id="areaM" class="form-control input-style" placeholder=""
                                        required="">
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-12">
                                    <label for="">Total Area Covered in Sq. M</label>
                                    <input type="text" id="areaSqM" class="form-control input-style" placeholder=""
                                        required="">
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-12 mt-2">
                                    <label for="">Required Tiles</label>
                                    <input type="text" id="requiredTiles" class="form-control input-style" placeholder=""
                                        required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <label for="">Required Boxes</label>
                                    <input type="text" id="requiredBoxes" class="form-control input-style" placeholder=""
                                        required="">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <hr class="mt-5">
                                    <p class="text-center text-md-left">This may vary on basis of your actual need.This is
                                        only approx
                                        calculation.</p>
                                </div>

                            </div>

                            {{-- <div class="custom-control custom-checkbox mb-6">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label fs-15" for="customCheck1"> Save my name, email, and
                            website in this
                            browser for the next time I comment.</label>
                    </div> --}}
                        </form>
                    </div>
                    <div class="col-md-5 pl-xl-13 pl-md-6">
                        <p class="font-weight-bold text-white mb-3 bg-warning p-2">Tips</p>
                        <ul class="list-unstyled">
                            <li class=""><i class="fa fa-check text-primary" aria-hidden="true"></i> &nbsp;Length
                                Width Dimensions Are In cm.</li>
                            <li class="mt-2"><i class="fa fa-check text-primary" aria-hidden="true"></i> &nbsp;100
                                Centimeter =
                                1 Meter</li>
                            <li class="mt-2"><i class="fa fa-check text-primary" aria-hidden="true"></i>&nbsp; 100 Meter
                                =
                                10000 Centimeter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('js')
    <script>
        document.getElementById('tileCalculator').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            let lengthCm = parseFloat(document.getElementById('length').value);
            let widthCm = parseFloat(document.getElementById('width').value);
            let selectedTile = document.getElementById('tileSize').value;

            if (isNaN(lengthCm) || isNaN(widthCm) || lengthCm <= 0 || widthCm <= 0) {
                alert("Please enter valid length and width in cm.");
                return; // Stop if values are invalid
            }

            let tileLength, tileWidth;

            if (selectedTile) {
                let parts = selectedTile.split('x');
                tileLength = parseFloat(parts[0]);
                tileWidth = parseFloat(parts[1]);
            } else {
                tileLength = lengthCm;
                tileWidth = widthCm;
            }

            let areaSqM = (lengthCm / 100) * (widthCm / 100); // Convert cm² to m²
            let areaM = (lengthCm * widthCm) / 100; // Convert cm to m
            let tileAreaSqM = (tileLength / 100) * (tileWidth / 100);
            let requiredTiles = Math.ceil(areaSqM / tileAreaSqM);
            let tilesPerBox = 6; // Adjust if necessary
            let requiredBoxes = Math.ceil(requiredTiles / tilesPerBox);

            // Populate result fields
            document.getElementById('areaSqM').value = areaSqM.toFixed(2);
            document.getElementById('areaM').value = areaM.toFixed(2);
            document.getElementById('requiredTiles').value = requiredTiles;
            document.getElementById('requiredBoxes').value = requiredBoxes;
        });
    </script>


@endsection
@section('cdn')
<style>
    .footer-bg-img {
        display: none;
    }
</style>
@endsection
