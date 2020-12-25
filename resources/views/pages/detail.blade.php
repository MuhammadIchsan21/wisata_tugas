@extends('layouts.app')

@section('title', 'Detail')

@section('content')
<div class="container">
    <div class="section-details-content">
        <div id="googleMap" style="width: 100%; height: 400px"></div>
        <div class="row row-wisata">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-details">
                    <h1>{{$item->title}}</h1>
                    <p>{{$item->location}}</p>
                    @if($item->galleries->count())
                    <div class="gallery">
                        <div class="xzoom-container">
                            <img src="{{Storage::url($item->galleries->first()->image)}}" class="xzoom"
                                id="xzoom-default" xoriginal="{{Storage::url($item->galleries->first()->image)}}" />
                        </div>
                        <div class="xzoom-thumbs">
                            @foreach ($item->galleries as $gallery)
                            <a href="{{Storage::url($gallery->image)}}">
                                <img src="{{Storage::url($gallery->image)}}" class="xzoom-gallery" width="128"
                                    xpreview="{{Storage::url($gallery->image)}}" />
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <h2>Tentang Wisata</h2>
                    <p>{!! $item->about!!}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-details card-right">
                    <h2>Details</h2>
                    <hr />
                    <h2>Informasi Wisata</h2>
                    <table class="trip-informations">
                        <tr>
                            <th width="50%">Tanggal Keberangkatan</th>
                            <td width="50%" class="text-right">
                                {{ \Carbon\Carbon::create($item->date_of_departure)->format('F n, Y')}}</td>
                        </tr>
                        <tr>
                            <th width="50%">Berapa Lama?</th>
                            <td width="50%" class="text-right">{{$item->duration}}</td>
                        </tr>
                        <tr>
                            <th width="50%">Tipe</th>
                            <td width="50%" class="text-right">{{$item->type}}</td>
                        </tr>
                        <tr>
                            <th width="50%">Harga</th>
                            <td width="50%" class="text-right">{{$item->price}} / person</td>
                        </tr>
                    </table>
                </div>
                <div class="join-container">
                    @auth
                    <form action="" method="post">
                        <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                            Join Now
                        </button>
                    </form>
                    @endauth
                    @guest
                    <a href="{{route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">Login Or Register</a>
                    @endguest
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
