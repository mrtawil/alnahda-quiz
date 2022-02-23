<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PagesController extends Controller
{
    public function welcome()
    {
        // Cookie::queue(config('alnahda.cookie_name'), 'gg', config('alnahda.cookie_expiration'));

        return view('website.pages.welcome');
    }

    public function quiz(Request $request)
    {
        // return $request->cookie(config('alnahda.cookie_name'));

        return view('website.pages.quiz');
    }

    public function result()
    {
        return view('website.pages.result');
    }

    public function claim()
    {
        return view('website.pages.claim');
    }
}
