<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class LoginController extends Controller
{
    public function index(): Factory | View | Application
    {
        return view('login.index');
    }
}
