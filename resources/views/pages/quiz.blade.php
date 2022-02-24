@extends('layouts.app')

@section('content')
    <div class="quiz page">
        <div class="question-container fade-in" id="question-container" :data-question-id="question.id">
            <div class="question-counter">@{{ quiz.questions.length }}/@{{ question_index + 1 }}</div>
            <div class="question-text-container">
                <div class="question-text">@{{ question.text_ar }}</div>
            </div>
            <div class="question-options-container">
                <div class="option-container" :id="'option-container-'+index" :data-option-id="question.id" v-for="(option, index) in question.options" v-on:click="onNextQuestion(index, option.id)">
                    <span class="option-counter">@{{ index + 1 }}</span>
                    <span class="option-text">@{{ option.text_ar }}</span>
                </div>
            </div>
        </div>
        <form action="{{ route('pages.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="quiz_id" :value="quiz.id">
            <input type="hidden" :name="'question_answers['+question_answer.question_id+']'" :value="question_answer.option_id" v-for="question_answer in question_answers">
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
