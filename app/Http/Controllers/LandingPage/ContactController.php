<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(): RedirectResponse
    {
        return redirect()
            ->back()
            ->with('success', 'Seu contato foi enviado, entraremos em contato assim que possível.');
    }
}
