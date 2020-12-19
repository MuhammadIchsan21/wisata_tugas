@extends('layouts.app')

@section('title', 'Detail')

@section('content')
<div class="container">
    <div class="section-details-content">
        <div id="googleMap" style="width: 100%; height: 400px"></div>
        <div class="row row-wisata">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-details">
                    <h1>Samboja</h1>
                    <p>Republic of Indonesia Raya</p>
                    <div class="gallery">
                        <div class="xzoom-container">
                            <img src="{{url('assets/images/duduk.jpg')}}" class="xzoom" id="xzoom-default"
                                xoriginal="{{url('assets/images/duudk.jpg')}}" />
                        </div>
                        <div class="xzoom-thumbs">
                            <a href="{{url('assets/images/duduk.jpg')}}">
                                <img src="{{url('assets/images/duduk.jpg')}}" class="xzoom-gallery" width="128"
                                    xpreview="{{url('assets/images/duduk.jpg')}}" />
                            </a>
                            <a href="{{url('assets/images/ansel.jpg')}}">
                                <img src="{{url('assets/images/ansel.jpg')}}" class="xzoom-gallery" width="128"
                                    xpreview="{{url('assets/images/ansel.jpg')}}" />
                            </a>
                            <a href="{{url('assets/images/tidur.jpg')}}">
                                <img src="{{url('assets/images/tidur.jpg')}}" class="xzoom-gallery" width="128"
                                    xpreview="{{url('assets/images/tidur.jpg')}}" />
                            </a>
                        </div>
                    </div>
                    <h2>Tentang Wisata</h2>
                    <p>bali adalah bagus</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-details card-right">
                    <h2>Details</h2>
                    <hr />
                    <h2>Trip Informations</h2>
                    <table class="trip-informations">
                        <tr>
                            <th width="50%">Date of Departure</th>
                            <td width="50%" class="text-right">16 Dec, 2020</td>
                        </tr>
                        <tr>
                            <th width="50%">Duration</th>
                            <td width="50%" class="text-right">4D 3N</td>
                        </tr>
                        <tr>
                            <th width="50%">Type</th>
                            <td width="50%" class="text-right">Open Trip</td>
                        </tr>
                        <tr>
                            <th width="50%">Price</th>
                            <td width="50%" class="text-right">$80,00 / person</td>
                        </tr>
                    </table>
                </div>
                <div class="join-container">
                    <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('addon-style')
<link rel="stylesheet" href="{{url('assets/libraries/xzoom/xzoom.css')}}" />
@endpush
@push('addon-script')
<script defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=myMap"></script>
<script src="{{url('assets/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function () {
    $(".xzoom, .xzoom-gallery").xzoom({
    zoomWidth: 500,
    title: false,
    tint: "#333",
    Xoffset: 15,
    });
    });
    function myMap() {
    				var mapProp = {
    					center: new google.maps.LatLng(-1.2741896679237057, 116.85689054782411),
    					zoom: 13
    				};
    				var map = new google.maps.Map(
    					document.getElementById("googleMap"),
    					mapProp
    				);
                }
</script>
@endpush
