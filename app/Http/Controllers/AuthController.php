<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function signOut()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
