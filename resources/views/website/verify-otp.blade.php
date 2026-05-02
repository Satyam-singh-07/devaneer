@extends('layouts.website')

@section('title', 'Verify OTP | Devaneer')

@section('content')
<div class="container" style="margin-top: 80px; margin-bottom: 100px;">
    <div style="max-width: 400px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 32px; font-weight: 700;">Verify OTP</h2>
            <p style="color: #495057;">Enter the 6-digit code sent to +91 {{ $phone }}</p>
        </div>

        <div style="background: #e1f5fe; border: 1px solid #01579b; color: #01579b; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
            <i class="fas fa-info-circle" style="margin-right: 8px;"></i> 
            <strong>Your OTP is: {{ $otp }}</strong>
            <p style="font-size: 12px; margin: 5px 0 0;">(This is shown for testing purposes)</p>
        </div>

        <div class="income-card" style="padding: 30px;">
            <form action="{{ route('member.verify.otp') }}" method="POST">
                @csrf
                <input type="hidden" name="phone" value="{{ $phone }}">
                
                <div style="margin-bottom: 30px;">
                    <label for="otp" style="display: block; font-weight: 600; margin-bottom: 8px; color: #0B1C2C;">Enter OTP</label>
                    <input type="text" name="otp" id="otp" placeholder="6-digit code" 
                        style="width: 100%; padding: 12px; border: 1px solid #dee2e6; border-radius: 8px; font-size: 18px; text-align: center; letter-spacing: 5px; outline: none;"
                        maxlength="6" required autofocus>
                    @error('otp')
                        <div style="color: #e63946; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-primary" style="width: 100%; border: none; cursor: pointer; padding: 14px; font-size: 16px;">
                    Verify & Login <i class="fas fa-check-circle" style="margin-left: 8px;"></i>
                </button>
            </form>
            
            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ route('member.login') }}" style="color: #6c757d; font-size: 14px; text-decoration: none;">Change phone number?</a>
            </div>
        </div>
    </div>
</div>
@endsection
