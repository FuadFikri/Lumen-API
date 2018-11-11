<?php

namespace App\Http\Controllers;
use App\User;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return response()->json([
            'status'=>true,
            'message'=>'users list',
            'data'=>$users
        ],200);
    }
}
