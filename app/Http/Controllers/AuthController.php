<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Use App\User;

class AuthController extends Controller
{
    
    public function __construct()
    {
        //
    }

    public function register(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        $register = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password 
        ]);

        if($register){
            return response()->json([
                'status' => true,
                'message' => 'registered',
                'data' =>$register
            ],201);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Register Fail',
                'data' => ''
            ],401);
        }
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email',$email)->first();

        if(Hash::check($password, $user->password)){
            $apiToken = base64_encode(str_random(40));

            $user->update([
                'api_token' => $apiToken
            ]);
            return response()->json([
                'status'=>true,
                'message' => 'welcome '.$user->name,
                'token' => $apiToken
            ],200);
        }else{
            return response()->json([
                'status' =>false,
                'message' => 'login failed',
                'data' => ''
            ],400);
        }
    }
}
