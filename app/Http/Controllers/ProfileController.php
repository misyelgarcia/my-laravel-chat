<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class ProfileController extends Controller
{
    public function create() {
        $user = Auth::user();
        if ($user == null) { return redirect()->to('/login'); }
        return view('auth.passwords.create');
    }

    public function changePassword(){
        $validatedData = request()->validate([
            'new-password' => 'required|string|min:8|max:200|confirmed',
            'new-password_confirmation' => 'required|string|min:8|max:200'
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = request()->get('new-password');
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
   
    }
}
