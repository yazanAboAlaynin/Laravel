<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(\App\User $user){

         auth()->user()->following()->toggle($user->profile);

         return redirect('/profile/' . $user->id);
    }
}
