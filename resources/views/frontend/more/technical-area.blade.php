@extends('frontend.layouts.app')
@section('title','Technical Area')
<style>
     .footer-bg-img{
        display: none;
    }
</style>
@section('cdn')

@endsection
@section('content')


    <main id="content">
        <section style="background-image: url('frontend/images/bg-about-us.jpg');"
        class="pt-15 pt-lg-18 pb-6 bg-img-cover-center">
        <div class="container">
            <h1 class="fs-40 mb-17 text-center text-white">Technical Area</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">More</a></li>
                    <li class="breadcrumb-item active text-primary" aria-current="page">Technical Area</li>
                </ol>
            </nav>
        </div>
    </section>
        <section class="py-10 pb-lg-15">
          <div class="container container-xxl">
            <div class="row no-gutters">
              <div class="col-md-6 col-xl-8 mb-8 mb-md-0">
                <div class="row no-gutters mx-n1">
                  <div class="col-sm-6 px-1">
                    <a href="images/product-17.jpg" data-gtf-mfp="true" data-gallery-id="02">
                      <img class="mb-2" src="frontend/images/product-17.jpg" alt="Image Product">
                    </a>
                  </div>
                  <div class="col-sm-6 px-1">
                    <a href="images/single-product-04.jpg" data-gtf-mfp="true" data-gallery-id="02">
                      <img class="mb-2" src="frontend/images/single-product-04.jpg" alt="Image Product">
                    </a>
                  </div>
                  <div class="col-sm-6 px-1">
                    <a href="images/single-product-05.jpg" data-gtf-mfp="true" data-gallery-id="02">
                      <img class="mb-2" src="frontend/images/single-product-05.jpg" alt="Image Product">
                    </a>
                  </div>
                  <div class="col-sm-6 px-1">
                    <a href="images/single-product-03.jpg" data-gtf-mfp="true" data-gallery-id="02">
                      <img class="mb-2" src="frontend/images/single-product-03.jpg" alt="Image Product">
                    </a>
                  </div>
                  <div class="col-sm-6 px-1">
                    <a href="images/product-17.jpg" data-gtf-mfp="true" data-gallery-id="02">
                      <img class="mb-2" src="frontend/images/product-17.jpg" alt="Image Product">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4 pl-xxl-12 pl-md-6 primary-summary summary-sticky" id="summary-sticky">
                <div class="primary-summary-inner">
                  <p class="text-muted fs-12 font-weight-500 letter-spacing-05">STOOL</p>
                  <h2 class="fs-30 fs-lg-40 mb-2">Partridge Bar Stool</h2>
                  <p class="fs-20 text-primary mb-4">$790.00</p>
                  <div class="d-flex align-items-center flex-wrap">
                    <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0 rating-result">
                      <li class="list-inline-item">
                        <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
                      </li>
                      <li class="list-inline-item">
                        <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
                      </li>
                      <li class="list-inline-item">
                        <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
                      </li>
                      <li class="list-inline-item">
                        <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
                      </li>
                      <li class="list-inline-item">
                        <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
                      </li>
                    </ul>
                    <p class="text-primary mb-0 fs-15 lh-1 overflow-hidden pl-4">
                      <span class="pr-1 mr-1 border-right ">5.0</span><a href="#">See 3 Reviews</a>
                    </p>
                  </div>
                  <p class="mt-3 mb-6">Minimal, yet bold - LYNEA Plug Lamp adds an architectural addition without the
                    pain of a professional installation. Designed to look seamless, it is hardwired lighting,
                    without the hard wiring.
                  </p>
                  <p class="mb-2">
                    Designed by <a href="#" class="text-decoration-underline">Nicholas
                      Karlovasitis</a></p>
                  <form>
                    <div class="form-group shop-swatch mb-6">
                      <label class="mb-3"><span class="text-primary fs-16 font-weight-bold">Color:</span> <span
                          class="var text-capitalize text-primary">black</span></label>
                      <ul class="list-inline d-flex justify-content-start mb-0">
                        <li class="list-inline-item mr-1 selected">
                          <a href="#" class="d-block swatches-item" data-var="black" style="background-color: #000000;">
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="d-block swatches-item" data-var="brown" style="background-color: #68412d;"></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="d-block swatches-item" data-var="green" style="background-color: #9ec8bb;">
                          </a>
                        </li>
                      </ul>
                      <select name="swatches" class="form-select swatches-select d-none"
                        aria-label="Default select example">
                        <option selected="" value="black">Black</option>
                        <option value="brown">Brown</option>
                        <option value="green">Green</option>
                      </select>
                    </div>
                    <div class="row align-items-end no-gutters mx-n2">
                      <div class="col-sm-4 form-group px-2 mb-6">
                        <label class="text-primary fs-16 font-weight-bold mb-3" for="number">Quantity: </label>
                        <div class="input-group position-relative w-100">
                          <a href="#" class="down position-absolute pos-fixed-left-center pl-2 z-index-2"><i
                              class="far fa-minus"></i></a>
                          <input name="number" type="number" id="number"
                            class="form-control w-100 px-6 text-center input-quality bg-transparent text-primary" value="1"
                            required="">
                          <a href="#" class="up position-absolute pos-fixed-right-center pr-2 z-index-2"><i
                              class="far fa-plus"></i>
                          </a>
                        </div>
                      </div>
                      <div class="col-sm-8 mb-6 w-100 px-2">
                        <button type="submit" class="btn btn-primary btn-block ">add to cart
                        </button>
                      </div>
                    </div>
                  </form>
                  <div class="d-flex align-items-center flex-wrap border-bottom pb-5 mb-5">
                    <a href="#" class="text-uppercase font-weight-bold letter-spacing-05 fs-14 mr-6">
                      <i class="fas fa-random fs-16"></i>
                      <span class="ml-1">Compare</span>
                    </a>
                    <a href="#" class="text-uppercase font-weight-bold letter-spacing-05 fs-14">
                      <i class="far fa-heart fs-16"></i>
                      <span class="ml-1">Add to wishlist</span>
                    </a>
                  </div>
                  <ul class="list-inline d-flex justify-content-start mb-8">
                    <li class="list-inline-item">
                      <a class="text-gray-01" href="#"><i class="fab fa-facebook-f mr-1"></i> Facebook</a>
                    </li>
                    <li class="list-inline-item ml-4">
                      <a class="text-gray-01" href="#"><i class="fab fa-instagram mr-1"></i> Instagram</a>
                    </li>
                    <li class="list-inline-item ml-4">
                      <a class="text-gray-01" href="#"><i class="fab fa-pinterest-p mr-1"></i> Pinterest</a>
                    </li>
                  </ul>
                  <div id="accordion-style-01" class="accordion">
                    <div class="card border-0 mb-5">
                      <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="headingOne">
                        <h5 class="mb-0 fs-18 w-100">
                          <a href="#" class="d-flex align-items-center border-bottom pb-3 pr-2" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span>Infomation</span>
                            <span class="icon d-inline-block ml-auto"></span>
                          </a>
                        </h5>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordion-style-01">
                        <div class="card-body py-4 px-0">
                          <ul class="list-unstyled mb-0">
                            <li class="mb-6">
                              <p class="text-primary font-weight-bold mb-2">Material:</p>
                              Powder coated stainless steel, upholstery optional.
                            </li>
                            <li class="mb-6">
                              <p class="text-primary font-weight-bold mb-2"> Dimensions:</p>
                              Without Armrests - 445 W x 508 D x 1005 H mm<br>
                              / Seat height 690 H mm<br>
                              With Armrests - 554 W x 508 D x 1005 H mm / Seat height 690<br>
                              H mm / Armrest height 862 mm
                            </li>
                            <li class="mb-0">
                              <p class="text-primary font-weight-bold mb-2"> Custom:</p>
                              Custom sizing/colouring is available for commercial projects. Minimums
                              apply. Please contact info@designbythem.com or call 02 8005 4805 for more
                              information.
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card border-0 mb-5">
                      <div class="card-header border-0 p-0 bg-transparent" id="headingTwo">
                        <h5 class="mb-0 fs-18 w-100">
                          <a href="#" class="d-flex align-items-center border-bottom pb-3 pr-2 collapsed"
                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                            aria-controls="collapseTwo">
                            <span>Shipping and Returns</span>
                            <span class="icon d-inline-block ml-auto"></span>
                          </a>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-style-01">
                        <div class="card-body py-4 px-0">
                          <p>So beautiful you’ll want to show it off, so comfortable you’ll forget it’s there.
                            Our 24/7™ Lace
                            Contour Plunge Bra combines gorgeous floral lace with sheer overlay straps that
                            hold you in and
                            eliminates gaping. Removable pads let you customize you</p>
                          <ul class="mb-0 fs-16 w-100">
                            <li class="lh-213">Cropped pink crepe knit top</li>
                            <li class="lh-213">Square neckline</li>
                            <li class="lh-213">Embroidered Aje logo</li>
                            <li class="lh-213">Cross back straps</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="pb-11 pb-lg-15">
          <div class="container">
            <h2 class="fs-md-40 fs-30 mb-9 text-center">May You Like This</h2>
            <div class="slick-slider"
              data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
              <div class="box" data-animate="fadeInUp">
                <div class="card border-0 hover-change-content product">
                  <div class="card-img-top position-relative">
                    <div style="background-image: url('images/product-16.jpg')"
                      class="card-img ratio bg-img-cover-center ratio-1-1">
                    </div>
                    <div
                      class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal">
                      <a href="#" data-toggle="tooltip" title="Add to cart"
                        class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-shopping-basket"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to favourite"
                        class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-heart"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to compare"
                        class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-random"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Preview"
                        class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                        <i class="far fa-eye"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                    <div class="mr-auto">
                      <a href="#"
                        class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">chair</a>
                      <a href="#" class="font-weight-bold mt-1 d-block">Bow Chair</a>
                    </div>
                    <p class="text-primary mb-0 font-weight-500">$1390.00</p>
                  </div>
                </div>
              </div>
              <div class="box" data-animate="fadeInUp">
                <div class="card border-0 hover-change-content product">
                  <div class="card-img-top position-relative">
                    <div style="background-image: url('images/product-04.jpg')"
                      class="card-img ratio bg-img-cover-center ratio-1-1">
                    </div>
                    <div
                      class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal">
                      <a href="#" data-toggle="tooltip" title="Add to cart"
                        class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-shopping-basket"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to favourite"
                        class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-heart"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to compare"
                        class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-random"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Preview"
                        class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                        <i class="far fa-eye"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                    <div class="mr-auto">
                      <a href="#"
                        class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">table</a>
                      <a href="#" class="font-weight-bold mt-1 d-block">Piper Bar</a>
                    </div>
                    <p class="text-primary mb-0 font-weight-500">$1390.00</p>
                  </div>
                </div>
              </div>
              <div class="box" data-animate="fadeInUp">
                <div class="card border-0 hover-change-content product">
                  <div class="card-img-top position-relative">
                    <div style="background-image: url('images/product-06.jpg')"
                      class="card-img ratio bg-img-cover-center ratio-1-1">
                    </div>
                    <div
                      class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal">
                      <a href="#" data-toggle="tooltip" title="Add to cart"
                        class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-shopping-basket"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to favourite"
                        class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-heart"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to compare"
                        class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-random"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Preview"
                        class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                        <i class="far fa-eye"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                    <div class="mr-auto">
                      <a href="#"
                        class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">decor</a>
                      <a href="#" class="font-weight-bold mt-1 d-block">Golden Clock</a>
                    </div>
                    <p class="text-primary mb-0 font-weight-500">$1390.00</p>
                  </div>
                </div>
              </div>
              <div class="box" data-animate="fadeInUp">
                <div class="card border-0 hover-change-content product">
                  <div class="card-img-top position-relative">
                    <div style="background-image: url('images/product-05.jpg')"
                      class="card-img ratio bg-img-cover-center ratio-1-1">
                    </div>
                    <div
                      class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal">
                      <a href="#" data-toggle="tooltip" title="Add to cart"
                        class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-shopping-basket"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to favourite"
                        class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-heart"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to compare"
                        class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-random"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Preview"
                        class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                        <i class="far fa-eye"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                    <div class="mr-auto">
                      <a href="#"
                        class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">Table</a>
                      <a href="#" class="font-weight-bold mt-1 d-block">Piper Bar</a>
                    </div>
                    <p class="text-primary mb-0 font-weight-500">$1390.00</p>
                  </div>
                </div>
              </div>
              <div class="box" data-animate="fadeInUp">
                <div class="card border-0 hover-change-content product">
                  <div class="card-img-top position-relative">
                    <div style="background-image: url('images/product-16.jpg')"
                      class="card-img ratio bg-img-cover-center ratio-1-1">
                    </div>
                    <div
                      class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal">
                      <a href="#" data-toggle="tooltip" title="Add to cart"
                        class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-shopping-basket"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to favourite"
                        class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-heart"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to compare"
                        class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-random"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Preview"
                        class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                        <i class="far fa-eye"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                    <div class="mr-auto">
                      <a href="#"
                        class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">decor</a>
                      <a href="#" class="font-weight-bold mt-1 d-block">Golden Clock</a>
                    </div>
                    <p class="text-primary mb-0 font-weight-500">$1390.00</p>
                  </div>
                </div>
              </div>
              <div class="box" data-animate="fadeInUp">
                <div class="card border-0 hover-change-content product">
                  <div class="card-img-top position-relative">
                    <div style="background-image: url('images/product-04.jpg')"
                      class="card-img ratio bg-img-cover-center ratio-1-1">
                    </div>
                    <div
                      class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal">
                      <a href="#" data-toggle="tooltip" title="Add to cart"
                        class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-shopping-basket"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to favourite"
                        class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-heart"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to compare"
                        class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-random"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Preview"
                        class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                        <i class="far fa-eye"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                    <div class="mr-auto">
                      <a href="#"
                        class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">Table</a>
                      <a href="#" class="font-weight-bold mt-1 d-block">Piper Bar</a>
                    </div>
                    <p class="text-primary mb-0 font-weight-500">$1390.00</p>
                  </div>
                </div>
              </div>
              <div class="box" data-animate="fadeInUp">
                <div class="card border-0 hover-change-content product">
                  <div class="card-img-top position-relative">
                    <div style="background-image: url('images/product-26.jpg')"
                      class="card-img ratio bg-img-cover-center ratio-1-1">
                    </div>
                    <div
                      class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal">
                      <a href="#" data-toggle="tooltip" title="Add to cart"
                        class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-shopping-basket"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to favourite"
                        class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-heart"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to compare"
                        class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-random"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Preview"
                        class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                        <i class="far fa-eye"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                    <div class="mr-auto">
                      <a href="#"
                        class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">decor</a>
                      <a href="#" class="font-weight-bold mt-1 d-block">Golden Clock</a>
                    </div>
                    <p class="text-primary mb-0 font-weight-500">$1000.00</p>
                  </div>
                </div>
              </div>
              <div class="box" data-animate="fadeInUp">
                <div class="card border-0 hover-change-content product">
                  <div class="card-img-top position-relative">
                    <div style="background-image: url('images/product-05.jpg')"
                      class="card-img ratio bg-img-cover-center ratio-1-1">
                    </div>
                    <div
                      class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal">
                      <a href="#" data-toggle="tooltip" title="Add to cart"
                        class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-shopping-basket"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to favourite"
                        class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-heart"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Add to compare"
                        class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                        <i class="far fa-random"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Preview"
                        class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                        <i class="far fa-eye"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                    <div class="mr-auto">
                      <a href="#"
                        class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">Table</a>
                      <a href="#" class="font-weight-bold mt-1 d-block">Piper Bar</a>
                    </div>
                    <p class="text-primary mb-0 font-weight-500">$1390.00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="pb-11 pb-lg-15">
          <div class="container">
            <div class="mxw-830 mx-auto">
              <div class="comment-product">
                <h2 class="fs-md-32 fs-30 mb-6 text-center">Ratings and Reviews</h2>
                <ul class="list-inline mb-3 d-flex justify-content-center rating-result">
                  <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-18 text-primary"><i class="fas fa-star"></i></li>
                </ul>
                <p class="text-center mb-9 fs-15 text-primary lh-1"><span
                    class="d-inline-block border-right pr-1 mr-1">5.0</span>Base on 3
                  Reviews</p>
                <div class="media border-bottom pb-6 mb-6 ">
                  <div class="w-70px d-block mr-6">
                    <img src="frontend/images/tes_01.png" alt="Dean. D">
                  </div>
                  <div class="media-body">
                    <div class="row no-gutters mb-2 align-items-center rating-result">
                      <ul class="list-inline mb-0 mr-auto d-flex col-sm-6">
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                      </ul>
                      <div class="col-sm-6 text-sm-right"><span class="fs-12 text-primary">Nov 20, 2020</span></div>
                    </div>
                    <p class="text-gray-01 lh-175 mb-2">It has a really nice fit however it loses many fluffs and is kind of
                      see-through because the fabric is quite wid-meshed. Nevertheless it's a really good and comfy staple
                      that goes with every kind.</p>
                    <span class="font-weight-600 text-primary d-block">Dean. D</span>
                  </div>
                </div>
                <div class="media border-bottom pb-6 mb-6 ">
                  <div class="w-70px d-block mr-6">
                    <img src="frontend/images/tes_02.png" alt="Dean. D">
                  </div>
                  <div class="media-body">
                    <div class="row no-gutters mb-2 align-items-center rating-result">
                      <ul class="list-inline mb-0 mr-auto d-flex col-sm-6">
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                      </ul>
                      <div class="col-sm-6 text-sm-right"><span class="fs-12 text-primary">Nov 20, 2020</span></div>
                    </div>
                    <p class="text-gray-01 lh-175 mb-2">It has a really nice fit however it loses many fluffs and is kind of
                      see-through because the fabric is quite wid-meshed. Nevertheless it's a really good and comfy staple
                      that goes with every kind.</p>
                    <span class="font-weight-600 text-primary d-block">Dean. D</span>
                  </div>
                </div>
                <div class="media ">
                  <div class="w-70px d-block mr-6">
                    <img src="frontend/images/tes_03.png" alt="Dean. D">
                  </div>
                  <div class="media-body">
                    <div class="row no-gutters mb-2 align-items-center rating-result">
                      <ul class="list-inline mb-0 mr-auto d-flex col-sm-6">
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item fs-12 text-primary"><i class="fas fa-star"></i></li>
                      </ul>
                      <div class="col-sm-6 text-sm-right"><span class="fs-12 text-primary">Nov 20, 2020</span></div>
                    </div>
                    <p class="text-gray-01 lh-175 mb-2">It has a really nice fit however it loses many fluffs and is kind of
                      see-through because the fabric is quite wid-meshed. Nevertheless it's a really good and comfy staple
                      that goes with every kind.</p>
                    <span class="font-weight-600 text-primary d-block">Dean. D</span>
                  </div>
                </div>
                <div class="card border-0 mt-9 mt-lg-15">
                  <div class="card-body p-0">
                    <h2 class="fs-40 text-center mb-9">Write A Review</h2>
                    <form>
                      <div class="d-flex flex-wrap">
                        <p class="text-primary font-weight-bold mb-0 mr-2 mb-2">Your
                          Rating</p>
                        <div class="form-group mb-6 d-flex justify-content-start">
                          <div class="rate-input">
                            <input type="radio" id="star5" name="rate" value="5">
                            <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                              <i class="fal fa-star"></i>
                            </label>
                            <input type="radio" id="star4" name="rate" value="4">
                            <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                              <i class="fal fa-star"></i>
                            </label>
                            <input type="radio" id="star3" name="rate" value="3">
                            <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                              <i class="fal fa-star"></i>
                            </label>
                            <input type="radio" id="star2" name="rate" value="2">
                            <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                              <i class="fal fa-star"></i>
                            </label>
                            <input type="radio" id="star1" name="rate" value="1">
                            <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                              <i class="fal fa-star"></i>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group mb-6">
                            <input placeholder="Your Name*" class="form-control" type="text" name="name">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group mb-6">
                            <input type="email" placeholder="Your Email*" name="email" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-8">
                        <textarea class="form-control" placeholder="Your Review" name="message" rows="5"></textarea>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">submit now</button>
                      </div>
                    </form>
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
