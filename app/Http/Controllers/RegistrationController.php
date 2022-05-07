<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
     public function create()
    {
        return view ('registration.create');
    }


    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3|max:200',
            'email' => 'required|email|max:200|unique:users,email',
            'password' => 'required|confirmed|min:6|max:200',
            'password_confirmation' => 'required|same:password|max:200'
        ]);

        $user = User::create(request(['name','email', 'password']));

        auth()->login($user);

        return redirect()->to('/privatechats');
    }
}

