<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Response
    {
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'date_of_birth' => ['required'],
            'country' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
       

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'country' => $request->country,
            'profile_image' => 'profile.jpg',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
          return response()->noContent();
        return redirect()->route('dashboard');
    }
}
