@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<!-- Header -->
<div class="container">
    <div class="row d-flex flex-column">
        <header class="text-center">
            <h1>
                Explore The Beautiful World
                <br />
                As Easy One Click
            </h1>
            <p class="mt-3">
                You will see beautiful
                <br />
                moment you never see before
            </p>
            <a href="#" class="btn btn-get-started px-4 mt-4"> Get Started </a>
        </header>
    </div>
</div>
<!-- End of header -->

<!-- content -->
<main>
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center section-birth-death" id="Pariwisata">
                <h2 class="text-center mt-3 travel">Travel</h2>
                <!-- Search form -->
                <div class="active-cyan-3 active-cyan-4 mb-4">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" />
                </div>
                <section class="section-popular-content" id="popularContent">
                    <div class="container">
                        <div class="section-popular-travel row justify-content-center">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column"
                                    style="background-image: url('assets/images/tes.jpg')">
                                    <div class="travel-country">INDONESIA</div>
                                    <div class="travel-location">DERATAN, BALI</div>
                                    <div class="travel-button mt-auto">
                                        <a href="details.html" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column"
                                    style="background-image: url('assets/images/travel-2.jpg')">
                                    <div class="travel-country">INDONESIA</div>
                                    <div class="travel-location">BROMO, MALANG</div>
                                    <div class="travel-button mt-auto">
                                        <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column"
                                    style="background-image: url('assets/images/travel-3.jpg')">
                                    <div class="travel-country">INDONESIA</div>
                                    <div class="travel-location">NUSA PENIDA</div>
                                    <div class="travel-button mt-auto">
                                        <a href="details.html" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-travel text-center d-flex flex-column"
                                    style="background-image: url('assets/images/travel-4.jpg')">
                                    <div class="travel-country">INDONESIA</div>
                                    <div class="travel-location">DUBAI</div>
                                    <div class="travel-button mt-auto">
                                        <a href="details.html" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End of Content-->
</main>
<!-- End of content -->
@endsection
