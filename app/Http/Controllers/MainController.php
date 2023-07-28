<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
     public function ShowMainView() {
        return view('main');
     }

     public function ShowMain() {
        
     }
}
