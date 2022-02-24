@extends('layouts.app')

@section('content')
    <div class="claim page">
        <div class="intro-img-container">
            <img class="intro-img" src="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </div>
        <div class="title">@lang('strings.Free coffee!')</div>
        <div class="coupun">@lang('strings.Voucher no.') {{ $claim->id }}</div>
        <div class="description-1">@lang('strings.Screenshot the screen')</div>
        <div class="description-2">@lang('strings.and show it to the barista')</div>
        <div class="flex-grow-1"></div>
        <div class="footer-container">
            <img class="logo-img" src="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
            <div class="social-media-container">
                <div class="social-links-container">
                    <img class="social-img" src="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <img class="social-img" src="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <img class="social-img" src="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <a class="social-link" href="https://alnahda.org">alnahda.org</a>
            </div>
            <img class="logo-img" src="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        </div>
    </div>
@endsection
