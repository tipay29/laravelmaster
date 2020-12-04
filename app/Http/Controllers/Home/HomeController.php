<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello(){

        $data = 'data';

        $users = array('aw1','aw2','aw3');

        return view('welcome.hello', compact('data','users'));
    }
}
