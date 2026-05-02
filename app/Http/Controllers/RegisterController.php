<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('website.register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        return redirect()->route('register')
            ->with('success', 'Registration successful! Your Member ID is: ' . $user->username);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'sponsor_id' => ['required', 'string', 'exists:users,username'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^[6789]\d{9}$/', 'unique:users,phone'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ], [
            'sponsor_id.exists' => 'The Sponsor ID provided does not exist.',
            'phone.regex' => 'Please enter a valid 10-digit Indian phone number.',
            'phone.unique' => 'This phone number is already registered.',
            'email.unique' => 'This email address is already registered.',
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'username' => 'TEMP', // Temporary username
            'sponsor_id' => $data['sponsor_id'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => null,
            'is_admin' => false,
        ]);

        $user->username = 'DEV' . str_pad($user->id, 4, '0', STR_PAD_LEFT);
        $user->save();

        return $user;
    }
}
