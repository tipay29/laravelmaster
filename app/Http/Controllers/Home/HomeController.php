<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello(){

        $data = config('admin.admin')[0];
        $data2 = config('app.admin');
        return view('welcome.hello', compact('data', 'data2'));
    }
}
