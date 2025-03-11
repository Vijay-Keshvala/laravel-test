<?php

namespace App\Http\Controllers;

use App\Models\UserActivity;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        try{
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if (!Auth::attempt($request->only('email', 'password'))){
                return response([
                    'message' => 'Invalid credentials'
                ], Response::HTTP_UNAUTHORIZED);
            }
            
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;

            UserActivity::create([
                'user_id' => $user->id,
                'jwt_token' => $token,
                'login_time' => now()
            ]);
            
            $myUser = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'myToken' => $token,
            ];
    
            return response([
                'status' => true,
                'message' => 'logged in successfully',
                'user' => $myUser
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'status' => false,
                'message' => $error->getMessage()
            ], 500);
        }
    }

    public function sessionClose(Request $request){
        try{
            UserActivity::where('jwt_token', $request->token)->update([
                'logout_time' => now()
            ]);

            $request->user()->tokens()->delete();

            return response()->json([
                'status' => true,
                'message' => 'session closed successfully'
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'status' => false,
                'message' => $error->getMessage()
            ], 500);
        }
    }
}
