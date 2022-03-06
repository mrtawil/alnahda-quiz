const app = new Vue({
    el: '#app',
    data: {
        locale: locale,
        quiz: quiz,
        question: null,
        question_index: 0,
        question_answers: {},
        question_next_delay: 750, // ms
        quiz_finish_delay: 750, // ms
        fade_animation_delay: 250, // ms
        safe_margin: 800,
        safe_height: 0,
        question_loading: false,
        quiz_ended: false,
    },
    methods: {
        onQuizFinish: function () {
            var quiz_id_el = document.createElement('input');
            quiz_id_el.setAttribute('type', 'hidden');
            quiz_id_el.setAttribute('name', 'quiz_id');
            quiz_id_el.setAttribute('value', this.quiz.id);

            var question_answers_el = document.createElement('input');
            question_answers_el.setAttribute('type', 'hidden');
            question_answers_el.setAttribute('name', 'question_answers');
            question_answers_el.setAttribute('value', JSON.stringify(this.question_answers));

            document.getElementById('quiz-form').appendChild(quiz_id_el);
            document.getElementById('quiz-form').appendChild(question_answers_el);
            document.getElementById('quiz-form').submit();
        },
        setCurrentQuestion: function (index) {
            this.question = this.quiz.questions[index];
        },
        setQuestionAnswer: function (questionId, optionId) {
            this.question_answers[questionId] = optionId;
        },
        onNextQuestion: function (optionIndex, questionId, optionId) {
            if (this.quiz_ended || this.question_loading) {
                return;
            }

            this.question_loading = true;
            this.setQuestionAnswer(questionId, optionId);
            this.addOptionChosen(optionIndex);
            if (this.question_index == this.quiz.questions.length - 1) {
                this.quiz_ended = true;

                setTimeout(() => {
                    this.onQuizFinish();
                }, this.quiz_finish_delay);
                return;
            }

            setTimeout(() => {
                this.removeOptionChosen(optionIndex);
                this.addCurrentQuestionFade(this.question_index);
                setTimeout(() => {
                    this.question_index++;
                    this.setCurrentQuestion(this.question_index);
                    this.removeNextQuestionFade();
                    setTimeout(() => {
                        this.updateSafeHeight();
                    }, 1);

                    this.question_loading = false;
                }, this.fade_animation_delay);
            }, this.question_next_delay);
        },
        addCurrentQuestionFade: function () {
            document.getElementById('question-container').classList.add('fade-out');
            document.getElementById('question-container').classList.remove('fade-in');
        },
        removeNextQuestionFade: function () {
            document.getElementById('question-container').classList.add('fade-in');
            document.getElementById('question-container').classList.remove('fade-out');
        },
        addOptionChosen: function (index) {
            document.getElementById('option-container-' + index).classList.add('option-chosen');
        },
        removeOptionChosen: function (index) {
            document.getElementById('option-container-' + index).classList.remove('option-chosen');
        },
        updateSafeHeight: function () {
            this.safe_height = this.safe_margin - $('.question-container').height();
        },
    },
    created() {
        this.setCurrentQuestion(0);
    },
    mounted() {
        this.updateSafeHeight();
    },
})
