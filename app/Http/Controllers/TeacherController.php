<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function __construct(){
        if(Auth::check()){
            view()->share('user',Auth::user());
        }
    }

    public function dashadminn(){

        return view('admin.layout.dashbroad_ad');
    }
}
