<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        // dd(Auth::user());
        if(Auth::user()->UserType =='student'){
            return view('dashboard.student');
            // echo 'student';
        }
        else if(Auth::user()->UserType =='teacher'){
            return view('dashboard.teacher');
            // echo 'teacher';

        }
        else if(Auth::user()->UserType=='admin'){
            return view('dashboard.admin');
            // echo 'admin';

        }
        else {
            return redirect('/');
        }
    }
}
