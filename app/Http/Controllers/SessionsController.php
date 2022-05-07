<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
   public function create()
   {
       return view('sessions.create');
   }

   public function store()
   {
        if(auth()->attempt(request(['email', 'password'])) == false)        
        {
            return back()->withErrors(
                [
                    'message' => 'Invalid credentials, please try again'
                ]
            );
        }
        
        Auth::user();
        request()->session()->regenerate();
        return redirect()->intended('/privatechats');
   }

   public function destroy()
   {
       // auth()->logout();
       // return redirect()->to('/');

       Auth::logout();
 
       request()->session()->invalidate();
    
       request()->session()->regenerateToken();
    
       return redirect('/');
   }

}
