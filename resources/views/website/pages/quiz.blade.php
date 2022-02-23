@extends('website.layouts.app')

@section('content')
    <div class="quiz page">
        <div class="questions-container">
            <div class="question-counter">05/01</div>
            <div class="question-text">إذا كنت تنوي أن تستثمر في واحدة من هذه الشركات الناشئة، أي واحدة ستختار؟</div>
            <div class="question-options-container">
                <div class="option-container">
                    <span class="option-counter">01</span>
                    <span class="option-text">تطبيق يعنى بخدمات التجميل يملكه رائظ أعمال</span>
                </div>
                <div class="option-container">
                    <span class="option-counter">02</span>
                    <span class="option-text">تطبيق يعنى بالاستثمار تملكه رائدة أعمال</span>
                </div>
                <div class="option-container option-chosen">
                    <span class="option-counter">03</span>
                    <span class="option-text">أحتاج تقارير تفصيلية لكلتا الشركتين قبل اتخاذ قرار</span>
                </div>
            </div>
        </div>
    </div>
@endsection
