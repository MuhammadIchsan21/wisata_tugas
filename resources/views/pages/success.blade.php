@extends('layouts.checkout')
@section('title', 'Success')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{url('/assets/images/ic_mail.png')}}" alt="" />
            <h1>Yay! Success</h1>
            <p>
                We've sent you email for trip instructions
                <br />
                please read it as well
            </p>
            <a href="{{route('home')}}" class="btn btn-home-page mt-3 px-5"> Home Page </a>
        </div>
    </div>
</main>
@endsection
