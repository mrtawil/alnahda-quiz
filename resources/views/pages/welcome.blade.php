@extends('layouts.app')

@section('content')
    <div class="welcome page">
        <div class="title-container">
            <div class="title">@lang('strings.Are you biased?')</div>
            <div class="title-description">@lang('strings.Participate and win')</div>
        </div>
        <div class="flex-grow-1"></div>
        <div class="action-container">
            <a class="action-button" href="{{ route('pages.quiz') }}">@lang('strings.Start')</a>
            <div class="action-description">@lang('strings.It only take 2 minutes')</div>
        </div>
    </div>
@endsection
