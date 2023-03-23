<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\Rules\Password;


class UserController extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function login(Request $request){
            $request->validate([
            'email' => 'required|email',
            'password' => 'required'
          ]);
          $user = User::where('email', $request->email)->first();
          
          if(!$user || !Hash::check($request->password, $user->password)){
            return redirect(route('login'))->with('error','Login Failed, Try Again!');
          }
          //gets the authenticated user name
          Auth::login($user);
          $user =auth()->user()->name;
          return redirect('/')->with('success','Login Success!');

    }
    public function registration(Request $request, User $user){
        $validated =$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
               Password::min(4)
               ->mixedCase()
            ],
            'password_confirmation' => 'required|same:password',
            'phone_number' => 'required','min:11',
            'address' => 'required', 'min:15 '
    
          ]);
            $validated['password'] = Hash::make($validated['password']);
           
         User::create($validated);
          if(!$user){
            return redirect(route('registration'))->with('error','Registration Failed, Try Again!');
          }
          return redirect(route('login'))->with('success','Registration Saved!');
    }

    public function loginpage(){
        return view('/login');
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        
        return redirect('/')->with('success','Logout Success!');
    }
}
