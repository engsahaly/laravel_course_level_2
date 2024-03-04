<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// dump('stage 11');

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // dump('stage 12');
        return view('welcome');
    }
}
