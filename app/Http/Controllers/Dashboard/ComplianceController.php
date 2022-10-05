<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ComplianceController extends Controller
{
    public function index(): Factory | View | Application
    {
        return view('dashboard.compliance.index');
    }
}
