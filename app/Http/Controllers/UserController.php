<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // create an account
    public function register()
    {
        return view('users.register');
    }

    // store the user data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            "name" => ['required', 'min:3', 'max:25'],
            "company" => ['required', 'min:3', 'max:25'],
            "license" => ['required', 'min:8', 'max:25'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => ['required', 'min:8', 'confirmed'],
        ]);

        // hash the password with bCrypt 
        $formFields['password'] = bcrypt($formFields['password']);

        // create the user 
        $user = User::create($formFields);

        // automatically login after succesful creation
        auth()->login($user);

        return redirect('/')->with('message', 'Account created! We have automatically logged you in...');
    }

    // show login form
    public function login()
    {
        return view('users.login');
    }

    // log user in
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Authenticated as ' . $formFields['email']);
        } else {
            return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
        }
    }

    // log user out
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }
}
