<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Story;
class UserController extends Controller
{
    //
   public function index($handle){
       $profile = User::where('handle','=',$handle)->first();
       $story = Story::where('owner_id','=',$profile->id)->get();
       abort_if(!$profile, 404);
       return view('users.profile',['profile'=>$profile, 'story'=>$story]);
   }
}
