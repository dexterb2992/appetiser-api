<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use JWTFactory;
use JWTAuth;
use Validator;

class RegisterController extends Controller
{
	/**
     * Create a new user instance after a valid registration.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required',
            'password'=> 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
            	'success' => false,
            	'message' => $validator->errors()->first(),
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = JWTAuth::fromUser($user);

        if (empty($token)) {
        	return response()->json([
        		'success' => false,
        		'message' => "Could not generate a token. Please try again later."
        	], 500);
        }
        
        return response()->json([
        	'success' => true,
        	'token' => $token
        ]);
    }
}
