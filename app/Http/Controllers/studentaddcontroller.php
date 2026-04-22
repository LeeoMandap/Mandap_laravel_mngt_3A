<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentaddcontroller extends Controller
{
        public function index (){
        return view('student.index');
    }
}
