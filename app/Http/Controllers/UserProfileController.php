<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class UserProfileController extends Controller
{
    public function index()
    {
        $a = '';
        return view('profile.user_profile', compact('a'));
    }

    public function address()
    {
        $a = '';
        return view('profile.user_address', compact('a'));
    }

    public function membership()
    {
        $a = '';
        return view('profile.user_membership', compact('a'));
    }

    public function legalPolicy()
    {
        $a = '';
        return view('profile.legal_policy', compact('a'));
    }

    public function helpSupport()
    {
        $a = '';
        return view('profile.help_support', compact('a'));
    }
}
