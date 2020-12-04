<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello(){

        $data = 'data';
        return view('welcome.hello', compact('data'));
    }
}
