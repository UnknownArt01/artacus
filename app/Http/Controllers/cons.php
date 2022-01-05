<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cons extends Controller
{
    //
    public function homeindex(){

        return view('home',[
            "titleup" =>"Project",
            "titledown" =>"My Project"
        ]);
    }

    public function showindex($code){
        return view('showproject',[
            "titleup" =>"Project",
            "titledown" =>"My Project"
        ]);
    }
}
