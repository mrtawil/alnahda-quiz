@extends('layouts.app')

@section('content')
    <div class="quiz page">
        <div class="question-container fade-in" id="question-container" v-if="question">
            <div class="question-counter">@{{ quiz.questions.length }}/@{{ question_index + 1 }}</div>
            <div class="question-text-container">
                <div class="question-text">@{{ question['text_' + locale] }}</div>
            </div>
            <div class="question-options-container">
                <div class="option-container" :id="'option-container-'+index" v-for="(option, index) in question.options" v-on:click="onNextQuestion(index, question.id, option.id)">
                    <span class="option-counter">@{{ index + 1 }}</span>
                    <span class="d-inline-block" style="width: 10px;"></span>
                    <span class="option-text">@{{ option['text_' + locale] }}</span>
                </div>
            </div>
        </div>
        <form action="{{ route('pages.result') }}" method="POST" id="quiz-form">
            @csrf
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        const quiz = @json($quiz);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="{{ URL::asset('assets/js/quiz.js') }}"></script>
@endsection
