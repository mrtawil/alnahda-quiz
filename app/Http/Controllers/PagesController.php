<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function quiz(Request $request)
    {
        // Cookie::queue(config('alnahda.cookie_name'), 'gg', config('alnahda.cookie_expiration'));
        // return $request->cookie(config('alnahda.cookie_name'));

        return view('pages.quiz');
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
