<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\QuizService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function quiz(QuizService $quizService, Request $request)
    {
        Cookie::queue(config('alnahda.cookie_name'), $quizService->newCookie(), config('alnahda.cookie_expiration'));
        $data['quiz'] = $quizService->quiz();

        return view('pages.quiz', $data);
    }

    public function submit(Request $request)
    {
        return $request->all();
    }

    public function result()
    {
        return view('pages.result');
    }

    public function claim()
    {
        return view('pages.claim');
    }
}
