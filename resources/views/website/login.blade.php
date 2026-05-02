@extends('layouts.website')

@section('title', 'Member Login | Devaneer')

@section('content')
<div class="container" style="margin-top: 80px; margin-bottom: 100px;">
    <div style="max-width: 400px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 32px; font-weight: 700;">Member Login</h2>
            <p style="color: var(--text-muted);">Enter your Member ID and password to access your dashboard.</p>
        </div>

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

        <div class="income-card" style="padding: 30px; background: #ffffff; border: 1px solid #dee2e6;">
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                
                <div style="margin-bottom: 20px;">
                    <label for="username" style="display: block; font-weight: 600; margin-bottom: 8px; color: #0B1C2C;">Member ID</label>
                    <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="e.g. DEV0001" 
                        style="width: 100%; padding: 12px; border: 1px solid #dee2e6; border-radius: 8px; font-size: 16px; outline: none; background: #f8fafc; color: #0B1C2C;"
                        required autofocus>
                    @error('username')
                        <div style="color: #e63946; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="margin-bottom: 30px;">
                    <label for="password" style="display: block; font-weight: 600; margin-bottom: 8px; color: #0B1C2C;">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" 
                        style="width: 100%; padding: 12px; border: 1px solid #dee2e6; border-radius: 8px; font-size: 16px; outline: none; background: #f8fafc; color: #0B1C2C;"
                        required>
                    @error('password')
                        <div style="color: #e63946; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-primary" style="width: 100%; border: none; cursor: pointer; padding: 14px; font-size: 16px;">
                    Login to Dashboard <i class="fas fa-sign-in-alt" style="margin-left: 8px;"></i>
                </button>
            </form>
        </div>
        
        <div style="text-align: center; margin-top: 30px;">
            <p style="color: var(--text-muted);">New here? <a href="{{ route('register') }}" style="color: var(--primary); text-decoration: none; font-weight: 600;">Create an account</a></p>
        </div>
    </div>
</div>
@endsection
