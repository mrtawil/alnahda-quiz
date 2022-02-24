@extends('layouts.app')

@section('content')
    <div class="welcome page">
        <div class="title-container">
            <div class="title">هل أنت متحيز؟</div>
            <div class="title-description">شارك و اربح!</div>
        </div>
        <div class="flex-grow-1"></div>
        <div class="action-container">
            <a class="action-button" href="{{ route('pages.quiz') }}">إبدا</a>
            <div class="action-description">يستغرق دقيقتين فقط</div>
        </div>
    </div>
@endsection
