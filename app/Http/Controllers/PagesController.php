<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\ClaimService;
use App\Http\Services\QuizService;
use App\Http\Services\ResultService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function language(Request $request, $locale)
    {
        $langauges = collect(config('alnahda.languages'));
        if ($langauges->contains($locale)) {
            Session::put('locale', $locale);
        }

        return to_route('pages.welcome');
    }

    public function welcome()
    {
        return view('pages.welcome');
    }

    public function quiz(QuizService $quizService)
    {
        Cookie::queue(config('alnahda.cookie_name'), $quizService->newCookie(), config('alnahda.cookie_expiration'));
        $data['quiz'] = $quizService->quiz();

        return view('pages.quiz', $data);
    }

    public function result(ResultService $resultService, Request $request)
    {
        if (!$request->input('quiz_id') || !$request->input('question_answers')) {
            return to_route('pages.welcome');
        }

        $request->validate([
            'quiz_id' => ['required', 'min:1', 'max:3'],
            'question_answers' => ['required', 'string'],
        ]);

        $data['result_message'] = $resultService->resultMessage();

        return view('pages.result', $data);
    }

    public function claim(ClaimService $claimService, Request $request)
    {
        if (!$request->input('name') || !$request->input('email') || Session::get('claim_loaded')) {
            return to_route('pages.welcome');
        }

        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'email', 'max:191'],
        ]);

        $data['claim'] = $claimService->claim();

        Session::flash('claim_loaded', true);

        return view('pages.claim', $data);
    }
}
