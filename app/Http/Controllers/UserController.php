<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $items = User::all();
        return view('user.index', ['items' => $items]);
        
    }
}
