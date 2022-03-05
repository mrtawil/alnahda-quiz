@extends('layouts.app')

@section('content')
    <div class="welcome page">
        <div class="title-container">
            <div class="title">@lang('strings.LET’S BREAK THE BIAS')</div>
            <div class="title-description">@lang("strings.Are your choices biased? Test yourself & your coffee is on us!")</div>
        </div>
        <div class="flex-grow-1"></div>
        <div class="action-container">
            <a class="action-button" href="{{ route('pages.quiz') }}">@lang('strings.TEST YOURSELF')</a>
            <div class="action-description">@lang('strings.The quiz will only take a few minutes')</div>
        </div>
    </div>
@endsection
