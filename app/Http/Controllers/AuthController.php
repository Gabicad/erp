<?php

namespace App\Http\Controllers;



use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email',
            'password' =>'required'
        ]);
        $user = User::create($fields);
        //create token
        $token = $user->createToken('erpToken')->plainTextToken;
        $response = [
            'status'=>true,
            'message'=>'registered successfully!',
            'data' =>[
                'user'=>$user,
                'token'=>$token
            ]
        ];
        return response($response,201);
    }


    public function getAuthUser(Request $request){
        return $request->user();
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|string|email',
            'password' =>'required'
        ]);
        //check email
        $user = User::where('email',$fields['email'])->first();

        //check password
        if(!$user || !Hash::check($fields['password'],$user->password)){
            return response(['status'=>false,'message'=>'Hibás Email vagy jelszó'],401);
        }

        //create token
        $token = $user->createToken('erpToken')->plainTextToken;

        $response = [
            'user'=>$user,
            'access_token'=>$token
        ];
        return response($response,201);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        $response = [
            'status'=>true,
            'message'=>'Logout successfully',
        ];
        return response($response,201);
    }

}
