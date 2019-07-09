<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Story;

class IndexController extends Controller
{
    //
    public function index(){
        $data= Story::all();
        $users = User::all();
        return view('welcome',['data'=>$data, 'users'=>$users]);
    }
}
