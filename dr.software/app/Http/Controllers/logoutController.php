<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutController extends Controller
{
    //logout operations
    public function logout(){


        Auth::logout();

        return redirect(route(name:'welcome'));


    }
}
