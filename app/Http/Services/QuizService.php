<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class QuizService
{
    protected $request;
    protected $quizzes;
    protected $quizzes_diff;
    protected $quiz;
    protected $cookie;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->setCookie();
        $this->setQuizzes();
        $this->setQuizzesDiff();
        $this->setQuiz();
    }

    public function setQuizzes($quizzes = null)
    {
        if ($quizzes === null) {
            $quizzes = collect(config('alnahda.quizzes'));
        }

        $this->quizzes = $quizzes;
    }

    public function setQuizzesDiff($quizzes_diff = null)
    {
        if ($quizzes_diff === null) {
            $quizzes_diff = $this->quizzes()->whereNotIn('id', $this->cookie()->pluck('id'));
        }

        $this->quizzes_diff = $quizzes_diff;
    }

    public function setQuiz($quiz = null)
    {
        if ($quiz === null) {
            if ($this->quizzesDiff()->count() >= 1) {
                $this->quiz = $this->quizzesDiff()->random();
                return;
            }

            $this->quiz = $this->quizzes()->random();
            return;
        }

        $this->quiz = $quiz;
    }

    public function setCookie($cookie = null)
    {
        if ($cookie == null) {
            $cookie = $this->request->cookie(config('alnahda.cookie_name'));
        }

        $this->cookie = collect(json_decode($cookie, true));
    }

    public function quizzes(): Collection
    {
        return $this->quizzes;
    }

    public function quizzesDiff(): Collection
    {
        return $this->quizzes_diff;
    }

    public function quiz(): array
    {
        $this->quiz['questions'] = collect($this->quiz['questions'])
            ->shuffle()
            ->map(function ($question) {
                $question['options'] = collect($question['options'])->shuffle();
                return $question;
            });

        return $this->quiz;
    }

    public function cookie(): Collection
    {
        return $this->cookie;
    }

    public function newCookie()
    {
        $new_quiz_record['id'] = $this->quiz()['id'];
        $new_quiz_record['status'] = 'done';

        if ($this->quizzesDiff()->count() == 0) {
            return json_encode([$new_quiz_record]);
        }

        return json_encode([...$this->cookie(), $new_quiz_record]);
    }
}
