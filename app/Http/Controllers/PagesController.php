<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class PagesController extends Controller
{
    public function index()
    {
        $a = '';
        return view('profile.user_profile', compact('a'));
    }

    public function legalPolicy()
    {
        $a = '';
        return view('pages.legal_policy', compact('a'));
    }

    public function helpSupport()
    {
        $a = '';
        return view('pages.help_support', compact('a'));
    }
}
