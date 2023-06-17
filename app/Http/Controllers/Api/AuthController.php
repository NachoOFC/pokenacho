<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function register(Request $request){


        $request->validate([ //entradas no son nulas o vacias
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|confirmed'
       ]);

       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->save();
       return response($user, Response::HTTP_OK);
   }

   public function login(Request $request){

       $credentials = $request->validate([
           'email' => ['required', 'email'],
           'password' => ['required']
       ]);

       if(Auth::attempt($credentials)){
           $user = Auth::user();
           $token = $user->createToken('token')->plainTextToken;
           $cookie = cookie('cookie_token', $token, 60*24);
           return response(["token"=>$token], Response::HTTP_OK)->withoutCookie($cookie);
       } else {
           return response(["Message" => "Las credenciales no son válidas"],Response::HTTP_UNAUTHORIZED);
       }

   }

   public function verificarEmail(Request $request)
   {
       $email = $request->input('email');

       $exists = User::where('email', $email)->exists();

       return response()->json(['exists' => $exists]);
   }

   public function userProfile(Request $request){

   }

   public function allUsers(Request $request){

   }

   public function logout(){
       $cookie = Cookie::forget('cookie_token');
       return response(["Message" => "Cierre de sesion"], Response::HTTP_OK)->withCookie($cookie);

   }
}
