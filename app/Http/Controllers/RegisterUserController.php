<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store()
    {
        $validate = request()->validate([
            'username' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min('6'), 'confirmed'],
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5760',
        ]);

        if (request()->hasFile('profile_image')) {
            $validate['profile_image'] = request()->file('profile_image')->store('profile_images', 'public');
        }

        $user = User::create($validate);

        Auth::login($user);

        return redirect('/');
    }
}
