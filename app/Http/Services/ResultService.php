<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

class ResultService
{
    protected $quizzes;
    protected $result_messages;
    protected $quiz;
    protected $quiz_id;
    protected $question_answers;
    public $weight;
    protected $result_message;

    public function __construct(Request $request)
    {
        $this->quizzes = collect(config('alnahda.quizzes'));
        $this->result_messages = collect(config('alnahda.result_messages'));
        $this->quiz_id = $request->input('quiz_id');
        $this->question_answers = json_decode($request->input('question_answers'), true);

        if (!$this->quiz_id || !$this->question_answers) {
            return;
        }

        $this->setQuiz();
        $this->setWeight();
        $this->setResultMessage();
    }

    public function setQuiz($quiz = null)
    {
        if ($quiz == null) {
            $quiz = $this->quizzes->where('id', $this->quiz_id)->firstOrFail();
        }

        $this->quiz = $quiz;
    }

    public function setWeight($weight = null)
    {
        if ($weight == null) {
            $weight = 0;
            foreach ($this->quiz['questions'] as $question) {
                $option_id = $this->question_answers[$question['id']] ?? null;
                if (!$option_id) {
                    continue;
                }

                $option = collect($question['options'])->firstWhere('id', $option_id);;
                if (!$option) {
                    continue;
                }

                $weight += $option['weight'];
            }
        }

        $this->weight = $weight;
    }

    public function setResultMessage()
    {
        $result_message_final = null;
        foreach ($this->result_messages as $result_message) {
            if ($this->weight >= $result_message['min_weight']) {
                $result_message_final = $result_message;
            }
        }

        $this->result_message = $result_message_final;
    }

    public function resultMessage()
    {
        return $this->result_message;
    }
}
