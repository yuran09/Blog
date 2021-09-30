<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController2 extends Controller
{
    public function store(){
        auth()->logout();

        return redirect()->route('/');
    }
}
