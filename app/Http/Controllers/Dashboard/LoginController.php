<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Psy\Util\Str;

class LoginController extends Controller
{
    public function index()
    {
        \Illuminate\Support\Str::ulid();
    }
}
