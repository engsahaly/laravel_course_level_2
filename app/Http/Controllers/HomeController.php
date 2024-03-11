<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// dump('stage 11');

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // dd($request->route());
        // dd($request->route()->getName());
        // dd($request->route()->getAction());
        // dd(Route::current());
        // dd(Route::currentRouteName());
        // dd(Route::currentRouteAction());
        // dump('stage 12');

        // Request path & method
        // dd($request->path());
        // dd($request->is('/'));
        // dd($request->routeIs('mahmoud route'));
        // dd($request->url());
        // dd($request->fullUrl());
        // dd($request->fullUrlWithoutQuery(['age', 'name']));
        // dd($request->method());
        // dd($request->isMethod('POST'));

        // Request inputs
        // dd($request->all());
        // dd($request->collect());
        // $request->collect()->each(function ($element) {
        //     dump($element);
        // });
        // dd($request->input());
        // dd($request->query());
        // dd($request->boolean('is_admin'));
        // dd($request->date('welcome_date'));
        // dd($request->only(['name', 'age']));
        // dd($request->except(['name', 'age']));

        // Request input presence has, filled, missing
        // dd($request->has('age'));
        // dd($request->hasAny(['name', 'age']));
        // $request->whenHas('name1', function () {
        //     dd('request has name');
        // }, function () {
        //     dd('request doesn\'t have name');
        // });

        // dd($request->filled('age'));
        // dd($request->anyFilled(['name', 'age']));
        // $request->whenFilled('name', function () {
        //     dd('request has filled name');
        // }, function () {
        //     dd('request doesn\'t have filled name');
        // });

        // dd($request->missing('age1'));
        // $request->whenMissing('name', function () {
        //     dd('name is missing');
        // }, function () {
        //     dd('name exists');
        // });

        return view('welcome');
    }
}
