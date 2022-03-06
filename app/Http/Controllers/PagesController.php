<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\ClaimService;
use App\Http\Services\QuizService;
use App\Http\Services\ResultService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

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
        $data['background_image'] = URL::asset('assets/media/images/background-welcome.png');
        return view('pages.welcome', $data);
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

        Session::put('weight', $resultService->weight());

        $data['result_message'] = $resultService->resultMessage();

        return view('pages.result', $data);
    }

    public function claim(ClaimService $claimService, Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'email', 'max:191'],
            'coffee_shop' => ['required', 'string', 'max:191'],
        ]);

        $data['claim'] = $claimService->claim();
        $data['coffee_shop'] = $claimService->coffeeShop();

        return response()->json($data, 200);
    }
}
