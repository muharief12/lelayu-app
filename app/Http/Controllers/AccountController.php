<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function account() 
    {
        $user = Auth::user();

        return view('dashboard.account', compact('user'));
    }
}
