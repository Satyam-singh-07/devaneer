<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MemberAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('website.login');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => ['required', 'string', 'regex:/^[6789]\d{9}$/'],
        ], [
            'phone.regex' => 'Please enter a valid 10-digit Indian phone number.',
        ]);

        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            return back()->withErrors(['phone' => 'This phone number is not registered.']);
        }

        // Generate 6-digit OTP
        $otp = rand(100000, 999999);
        $user->otp = $otp;
        $user->otp_expires_at = Carbon::now()->addMinutes(10);
        $user->save();

        return view('website.verify-otp', ['phone' => $request->phone, 'otp' => $otp]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'otp' => 'required|numeric',
        ]);

        $user = User::where('phone', $request->phone)
            ->where('otp', $request->otp)
            ->where('otp_expires_at', '>', Carbon::now())
            ->first();

        if (!$user) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        // Clear OTP and login
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        Auth::login($user);

        return redirect()->route('member.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
