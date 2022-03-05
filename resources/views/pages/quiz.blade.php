@extends('layouts.app')

@section('content')
    <div class="quiz page">
        <div class="question-container fade-in" id="question-container" v-if="question">
            <div class="question-counter-container">
                <img src="{{ URL::asset('assets/media/images/question-icon.png') }}" alt="" class="question-icon">
                <div class="question-counter"><span>@{{ question_index + 1 }}</span>/<span>@{{ quiz.questions.length }}</span></div>
            </div>
            <div class="question-text-container">
                <div class="question-text">@{{ question['text_' + locale] }}</div>
            </div>
            <div class="question-options-container">
                <div class="option-container" :id="'option-container-'+index" v-for="(option, index) in question.options" v-on:click="onNextQuestion(index, question.id, option.id)">
                    <span class="option-text">@{{ option['text_' + locale] }}</span>
                </div>
            </div>
        </div>
        <form action="{{ route('pages.result') }}" method="POST" id="quiz-form">
            @csrf
        </form>
        <div id="safe-height" class="d-block" :style="{'height': `${safe_height}px`}"></div>
    </div>
@endsection

@section('scripts')
    <script>
        const quiz = @json($quiz);
    </script>
    <script src="{{ URL::asset('assets/js/quiz.js') }}"></script>
@endsection
