@extends('layouts.layouts')
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col text-center ">
                <p class="text-bold text-size">Website For Learning English</p>
                <a href="/vocabulary"><button type="button" class="btn primary-color-web" style="color: white;">Learn Now</button></a>
                @if (!session()->has('name'))
                    <p class="pt-3">You can <a href="/login"><span class="text-underline">login here</span></a> to save your progress</p>
                    <p>Or if you don’t have account, you can <a href="/register"><span class="text-underline">create one</span></a> for free </p>
                @endif

            </div>
            <div class="col align-items-center">
                <img src="{{ asset('images/english-logo.png') }}" width="752" height="313" />
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col text-center text-bold" style="font-size: 24px;">
                <p>Try our app on mobile devices for more features</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col d-flex justify-content-end me-5">
                <div class="box text-center">
                    <img src="{{ asset('images/Apple Logo.png') }}" alt="" width="96" height="96"/>
                    <p class="text-bold">iOS App</p>
                    <p>Create account and learn on your go.</p>
                </div>
            </div>
            <div class="col d-flex justify-content-start ms-5">
                <div class="box text-center">
                    <img src="{{ asset('images/Android OS.png') }}" alt="" width="96" height="96"/>
                    <p class="text-bold">Android App</p>
                    <p>Useful app in your pocket, learn anywhere, anytime.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
