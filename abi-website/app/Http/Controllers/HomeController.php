<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('home.index', [
            'year' => config('abi.year'),
            'school' => config('abi.school'),
            'motto' => config('abi.motto'),
            'info' => config('abi.info'),
            'quotes' => config('abi.quotes'),
            'funfacts' => config('abi.funfacts'),
            'merchandise' => config('abi.merchandise'),
        ]);
    }
}
