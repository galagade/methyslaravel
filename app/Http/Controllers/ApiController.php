<?php

namespace App\Http\Controllers;

use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vehicle;

class ApiController extends Controller
{
   
  	public function __construct()
	{
		$this->middleware('guest', ['except'=> 'getLogout']);
	}

	public function authenticate(Request $request){
		$credentials = $request->only('email', 'password');

		try{
			if(! $token = JWTAuth::attempt($credentials)){
				return response()->json(['error'=> 'User credentials are not correct'], 401);
			}
		}catch(JWTException $ex) {
			return response()->json(['error'=>'something went wrong'],500);//errorInternal();//
		}
		return response()->json(['token' =>$token]);
	}

	public function autheticateUser(){
		try{
			if(! $user = JWTAuth::perseToken()->toUser()){
				return response()->json(['user not found'], 404);
			}
		}catch(JWTException $e){
			return $this->response->errorInternal();
		}
		return $this->response->item($user, new UserTransformer)->setStatusCode(200);
	}

   	public function index()
   	{
   		try{
   			return User::all();
   		}catch(JWTException $ex){
   			return $ex;
   		}

   		/*$user = JWTAuth::parseToken()->authenticate();
        $userId = $user->id;

        return $userId;*/

   	}

   	public function show(){
   		
		try{
			$user = JWTAuth::perseToken()->toUser();
			if(! $user){
				return response()->json(['user not found']);
			}
		}catch(\Tymon\JWTAuth\Exceptions\TokenExpiredException $e){
			return response()->json(['Token has expired']);
		}catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
           return response()->json(['Token is invalid']);
        } catch (\Tymon\JWTAuth\Exceptions\TokenBlacklistedException $e) {
            return response()->json(['Token is blacklisted']);
        }
		return response()->json($user);
	}

	public function getToken(){
		$token = JWTAuth::getToken();
		return $token;
	}
}
