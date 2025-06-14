<header class="main-header navbar-light header-sticky header-sticky-smart position-absolute fixed-top">
    <div class="sticky-area">
      <div class="container container-xxl">
        <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 d-block">
          <div class="d-none d-xl-block">
            <div class="row align-items-center">

              <div class="col-xl-12 mx-auto position-static">
                <div class="d-flex mt-3 mt-xl-0 align-items-center w-100 justify-content-center">
                  <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                    <li aria-haspopup="true" aria-expanded="false"
                                    class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0 hvr-reveal {{ URL::current() == url('/') ? 'active' : '' }}" href="{{url('/')}}">
                                        Home
                                        <span class="caret"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link dropdown-toggle p-0 hvr-reveal  {{ URL::current() == url('/about-us')||URL::current() == url('/about-the-directors') ? 'active' : '' }}" href="#" data-toggle="dropdown">
                                      Company
                                      <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                                      <li class="dropdown-item">
                                        <a class="dropdown-link  {{ URL::current() == url('/about-us') ? 'active' : '' }}" href="{{url('/about-us')}}">
                                          About Us
                                        </a>
                                      </li>
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/about-the-directors') ? 'active' : '' }}" href="{{url('/about-the-directors')}}">
                                          About The Directors
                                        </a>
                                      </li>

                                    </ul>
                                              </li>
                                <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link dropdown-toggle p-0 hvr-reveal {{ URL::current() == url('/authentic-natural-stone')|| URL::current() == url('/porcelain-tiles')  || URL::current() == url('/slab-tiles')  || URL::current() == url('/outdoor-tiles')   || URL::current() == url('/glass-tiles') || URL::current() == url('/feature-tiles') ? 'active' : '' }}" href="#" data-toggle="dropdown">
                                      Products
                                      <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                                      <li class="dropdown-item">
                                        <a class="dropdown-link  {{ URL::current() == url('/authentic-natural-stone')? 'active' : '' }}" href="{{url('/authentic-natural-stone')}}">
                                            Authentic Natural Stone
                                        </a>
                                      </li>
                                      <li class="dropdown-item">
                                        <a class="dropdown-link  {{ URL::current() == url('/porcelain-tiles') ? 'active' : '' }}" href="{{url('/porcelain-tiles')}}">
                                            Porcelain Tiles
                                        </a>
                                      </li>


                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/slab-tiles') ? 'active' : '' }}" href="{{url('/slab-tiles')}}">
                                            Slab Tiles
                                        </a>
                                      </li>


                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/outdoor-tiles') ? 'active' : '' }}" href="{{url('/outdoor-tiles')}}">
                                            Outdoor Tiles
                                        </a>
                                      </li>


                                    <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/glass-tiles') ? 'active' : '' }}" href="{{url('/glass-tiles')}}">
                                          Glass Tiles
                                        </a>
                                      </li>

                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/feature-tiles') ? 'active' : '' }}" href="{{url('/feature-tiles')}}">
                                          Feature Tiles
                                        </a>
                                      </li>
                                    </ul>
                                              </li>
                  </ul>
                  <a class="navbar-brand mx-8 mr-0 d-inline-block py-0" href="{{url('/')}}">
                    <img src="{{asset('frontend/logo/tilelogo.png')}}" alt="Tileage" class="p-3">
                  </a>
                  <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                    <li aria-haspopup="true" aria-expanded="false"
                                    class="nav-item dropdown-item-pages dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link hvr-reveal p-0 {{URL::current()==url('/e-catalogue')?'active':''}}" href="{{url('/e-catalogue')}}" >
                                        E-Catalogue
                                        <span class="caret"></span>
                                    </a>

                                </li>

                                <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link dropdown-toggle p-0 hvr-reveal {{ URL::current() == url('/quality-control')||URL::current() == url('/technical-area')||URL::current() == url('/tiles-calculator') || URL::current() == url('/tiling-terminologies')? 'active' : '' }}" href="#" data-toggle="dropdown">
                                      More
                                      <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/quality-control') ? 'active' : '' }}" href="{{url('/quality-control')}}">
                                          Quality Control
                                        </a>
                                      </li>
                                      {{-- <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/technical-area') ? 'active' : '' }}" href="{{url('/technical-area')}}">
                                          Technical Area
                                        </a>
                                      </li> --}}
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/tiles-calculator') ? 'active' : '' }}" href="{{url('/tiles-calculator')}}">
                                          Tiles Calculator
                                        </a>
                                      </li>
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/tiling-terminologies') ? 'active' : '' }}" href="{{url('/tiling-terminologies')}}">
                                          Tiling Terminologies
                                        </a>
                                      </li>
                                    </ul>
                                              </li>
                           <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                      <a class="px-2  btn-custom-contact  p-0 hvr-reveal " href="{{url('/contact-us')}}">
                        Contact Us
                        {{-- <span class="caret"></span> --}}
                      </a>
                      {{-- <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                        <li class="dropdown-item">
                          <a class="dropdown-link {{ URL::current() == url('/contact-us') ? 'active' : '' }}" href="{{url('/contact-us')}}">
                            Get In Touch
                          </a>
                        </li>
                        <li class="dropdown-item">
                          <a class="dropdown-link {{ URL::current() == url('/join-our-team') ? 'active' : '' }}" href="{{url('/join-our-team')}}">
                            Join Our Team
                          </a>
                        </li>
                  </ul> --}}
                </div>
              </div>
              <div class="col-2">
                <ul class="navbar-nav flex-row justify-content-xl-end d-flex flex-wrap text-body py-0 navbar-right">

                </ul>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center d-xl-none">
            <button class="navbar-toggler border-0 px-0 canvas-toggle" type="button" data-canvas="true"
              data-canvas-options='{"width":"250px","container":".sidenav"}'>
              <span class="fs-24 toggle-icon"></span>
            </button>
            <div class="mx-auto"><a class="navbar-brand d-inline-block mr-0" href="{{url('/')}}">
                <img src="{{asset('frontend/logo/tilelogo.png')}}" alt="Tileage" >
              </a></div>
            {{-- <a href="#search-popup" data-gtf-mfp="true"
              data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
              class="nav-search d-flex align-items-center"><i class="far fa-search"></i></a> --}}
          </div>
        </nav>
      </div>
    </div>
  </header>

 {{--<header class="main-header navbar-light header-sticky header-sticky-smart position-absolute fixed-top">
        <div class="sticky-area">
            <div class="container container-xxl">
                <div class="d-none d-xl-block">
                    <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 row no-gutters">
                        <div class="col-xl-2"><a class="navbar-brand mr-0 py-2" href="{{url('/')}}">
                                <img src="frontend/logo/tilelogo.png" alt="Tileage">
                            </a></div>
                        <div class="col-xl-8 d-flex justify-content-end position-static">
                            <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4 ">
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0 {{ URL::current() == url('/') ? 'active' : '' }}" href="{{url('/')}}">
                                        Home
                                        <span class="caret"></span>
                                    </a>

                                </li>
                                <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link dropdown-toggle p-0 {{ URL::current() == url('/about-us')||URL::current() == url('/about-the-directors') ? 'active' : '' }}" href="#" data-toggle="dropdown">
                                      Company
                                      <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/about-us') ? 'active' : '' }}" href="{{url('/about-us')}}">
                                          About Tilesage
                                        </a>
                                      </li>
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/about-the-directors') ? 'active' : '' }}" href="{{url('/about-the-directors')}}">
                                          About The Directors
                                        </a>
                                      </li>

                                    </ul>
                                              </li>
                                <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link dropdown-toggle p-0 {{ URL::current() == url('/authentic-natural-stone')||URL::current() == url('/600-x-1200-mm') ? 'active' : '' }}" href="#" data-toggle="dropdown">
                                      Products
                                      <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                                      <li class="dropdown-item">
                                        <a class="dropdown-link  {{ URL::current() == url('/authentic-natural-stone')? 'active' : '' }}" href="{{url('/authentic-natural-stone')}}">
                                          600 x 600 mm
                                        </a>
                                      </li>
                                      <li class="dropdown-item">
                                        <a class="dropdown-link  {{ URL::current() == url('/600-x-1200-mm') ? 'active' : '' }}" href="{{url('/600-x-1200-mm')}}">
                                          600 x 1200 mm
                                        </a>
                                      </li>
                                    </ul>
                                              </li>
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="nav-item dropdown-item-pages dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link  p-0 {{URL::current()==url('/e-catalog')?'active':''}}" href="{{url('/e-catalog')}}" >
                                        E-Catalog
                                        <span class="caret"></span>
                                    </a>

                                </li>

                                <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link dropdown-toggle p-0 {{ URL::current() == url('/quality-control')||URL::current() == url('/technical-area')||URL::current() == url('/tiles-calculator') || URL::current() == url('/tiling-terminologies')? 'active' : '' }}" href="#" data-toggle="dropdown">
                                      More
                                      <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/quality-control') ? 'active' : '' }}" href="{{url('/quality-control')}}">
                                          Quality Control
                                        </a>
                                      </li>
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/technical-area') ? 'active' : '' }}" href="{{url('/technical-area')}}">
                                          Technical Area
                                        </a>
                                      </li>
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/tiles-calculator') ? 'active' : '' }}" href="{{url('/tiles-calculator')}}">
                                          Tiles Calculator
                                        </a>
                                      </li>
                                      <li class="dropdown-item">
                                        <a class="dropdown-link {{ URL::current() == url('/tiling-terminologies') ? 'active' : '' }}" href="{{url('/tiling-terminologies')}}">
                                          Tiling Terminologies
                                        </a>
                                      </li>
                                    </ul>
                                              </li>
                           <li aria-haspopup="true" aria-expanded="false" class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                      <a class="nav-link dropdown-toggle p-0 {{ URL::current() == url('/contact-us') ||URL::current() == url('/join-our-team') ? 'active' : '' }}" href="#" data-toggle="dropdown">
                        Contact Us
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp">
                        <li class="dropdown-item">
                          <a class="dropdown-link {{ URL::current() == url('/contact-us') ? 'active' : '' }}" href="{{url('/contact-us')}}">
                            Get In Touch
                          </a>
                        </li>
                        <li class="dropdown-item">
                          <a class="dropdown-link {{ URL::current() == url('/join-our-team') ? 'active' : '' }}" href="{{url('/join-our-team')}}">
                            Join Our Team
                          </a>
                        </li>
                      </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="col-xl-2 position-relative">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="frontend/#search-popup" data-gtf-mfp="true"
                                    data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
                                    class="nav-search d-block py-0 pr-2 mr-5" title="Search"><i
                                        class="far fa-search"></i></a>
                                {{--<ul
                                    class="navbar-nav flex-row justify-content-xl-end d-flex flex-wrap text-body py-0 navbar-right">
                                    <li class="nav-item">
                                        <a class="nav-link pr-3 py-0" href="frontend/#">
                                            <i class="far fa-user-alt"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link position-relative px-3 py-0" href="frontend/#"><i
                                                class="far fa-heart"></i>
                                            <span class="position-absolute number">0</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link position-relative px-3 menu-cart py-0" href="frontend/#"
                                            data-canvas="true" data-canvas-options='{"container":".cart-canvas"}'>
                                            <i class="far fa-shopping-basket"></i>
                                            <span class="position-absolute number">0</span>
                                        </a>
                                    </li>
                                </ul>--}}
                            {{--</div>
                        </div>
                    </nav>
                </div>
                <div class="d-block d-xl-none">
                    <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 w-100 align-items-center">
                        <button class="navbar-toggler border-0 px-0 canvas-toggle" type="button" data-canvas="true"
                            data-canvas-options='{"width":"250px","container":".sidenav"}'>
                            <span class="fs-24 toggle-icon"></span>
                        </button>
                        <a class="navbar-brand d-inline-block mx-auto" href="{{url('/')}}">
                            <img src="frontend/logo/tilelogo.png" alt="Tileage">
                        </a>
                        <a href="frontend/#search-popup" data-gtf-mfp="true"
                            data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
                            class="nav-search d-block py-0" title="Search"><i class="far fa-search"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>--}}
