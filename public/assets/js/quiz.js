const app = new Vue({
    el: '#app',
    data: {
        quiz: quiz,
        question: 0,
        question_index: 0,
        question_answers: [],
        question_next_delay: 750, // ms
        fade_animation_delay: 250, // ms
    },
    methods: {
        setCurrentQuestion: function (index) {
            this.question = this.quiz.questions[index];
        },
        setQuestionAnswer: function (questionIndex, optionIndex) {
            this.question_answers[questionIndex] = optionIndex;
            console.log({ question_answers: this.question_answers });
        },
        onNextQuestion: function (optionIndex) {
            this.setQuestionAnswer(this.question_index, optionIndex);
            this.addOptionChosen(optionIndex);
            if (this.question_index == this.quiz.questions.length - 1) {
                alert('quiz is done.');
                return;
            }

            setTimeout(() => {
                this.removeOptionChosen(optionIndex);
                this.addCurrentQuestionFade(this.question_index);
                setTimeout(() => {
                    this.question_index++;
                    this.setCurrentQuestion(this.question_index);
                    this.removeNextQuestionFade();
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
    },
    created() {
        this.setCurrentQuestion(0);
    },
})
