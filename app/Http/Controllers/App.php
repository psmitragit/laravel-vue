<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class App extends Controller
{
    public function index(){
        return view('index');
    }
    public function getUsers(){
        $res = User::get();
        return $res;
    }
}
