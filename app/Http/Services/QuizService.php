<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class QuizService
{
    protected $request;
    protected $quizzes;
    protected $quizzes_diff;
    protected $cookie;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->setCookie();
        $this->setQuizzes();
        $this->setQuizzesDiff();
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

    public function cookie(): Collection
    {
        return $this->cookie;
    }

    public function quiz()
    {
        if ($this->quizzesDiff()->count() >= 1) {
            return $this->quizzesDiff()->random();
        }

        return $this->quizzes()->random();
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
