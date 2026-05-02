@extends('layouts.website')

@section('title', 'Member Login | Devaneer')

@section('content')
<div class="container" style="margin-top: 80px; margin-bottom: 100px;">
    <div style="max-width: 400px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 32px; font-weight: 700;">Member Login</h2>
            <p style="color: var(--text-muted);">Enter your phone number to receive an OTP.</p>
        </div>

        <div class="income-card" style="padding: 30px; background: #ffffff; border: 1px solid #dee2e6;">
            <form action="{{ route('member.login.otp') }}" method="POST">
                @csrf
                
                <div style="margin-bottom: 30px;">
                    <label for="phone" style="display: block; font-weight: 600; margin-bottom: 8px; color: #0B1C2C;">Phone Number</label>
                    <div style="position: relative;">
                        <span style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;">+91</span>
                        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" placeholder="10-digit mobile number" 
                            style="width: 100%; padding: 12px 12px 12px 45px; border: 1px solid #dee2e6; border-radius: 8px; font-size: 16px; outline: none; background: #f8fafc; color: #0B1C2C;"
                            maxlength="10" required autofocus>
                    </div>
                    @error('phone')
                        <div style="color: #e63946; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-primary" style="width: 100%; border: none; cursor: pointer; padding: 14px; font-size: 16px;">
                    Send OTP <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
                </button>
            </form>
        </div>
        
        <div style="text-align: center; margin-top: 30px;">
            <p style="color: var(--text-muted);">New here? <a href="{{ route('register') }}" style="color: var(--primary); text-decoration: none; font-weight: 600;">Create an account</a></p>
        </div>
    </div>
</div>
@endsection
