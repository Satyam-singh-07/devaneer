@extends('layouts.website')

@section('title', 'Become a Distributor | Devaneer')

@section('content')
<div class="container" style="margin-top: 60px; margin-bottom: 80px;">
    <div style="max-width: 500px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 32px; font-weight: 700;">Join Devaneer</h2>
            <p style="color: var(--text-muted);">Start your journey with premium wellness products.</p>
        </div>

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                {{ session('success') }}
            </div>
        @endif

        <div class="income-card" style="padding: 30px; background: #ffffff; border: 1px solid #dee2e6;">
            <form action="{{ route('register') }}" method="POST" id="registrationForm">
                @csrf
                
                <div style="margin-bottom: 20px;">
                    <label for="sponsor_id" style="display: block; font-weight: 600; margin-bottom: 8px; color: #0B1C2C;">Sponsor ID <span style="color: #e63946;">*</span></label>
                    <input type="text" name="sponsor_id" id="sponsor_id" value="{{ old('sponsor_id') }}" placeholder="Enter Sponsor Member ID" 
                        style="width: 100%; padding: 12px; border: 1px solid #dee2e6; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.2s; background: #f8fafc; color: #0B1C2C;"
                        required>
                    @error('sponsor_id')
                        <div style="color: #e63946; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="name" style="display: block; font-weight: 600; margin-bottom: 8px; color: #0B1C2C;">Full Name <span style="color: #e63946;">*</span></label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Enter your full name" 
                        style="width: 100%; padding: 12px; border: 1px solid #dee2e6; border-radius: 8px; font-size: 16px; outline: none; background: #f8fafc; color: #0B1C2C;"
                        required>
                    @error('name')
                        <div style="color: #e63946; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="phone" style="display: block; font-weight: 600; margin-bottom: 8px; color: #0B1C2C;">Phone Number <span style="color: #e63946;">*</span></label>
                    <div style="position: relative;">
                        <span style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;">+91</span>
                        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" placeholder="10-digit mobile number" 
                            style="width: 100%; padding: 12px 12px 12px 45px; border: 1px solid #dee2e6; border-radius: 8px; font-size: 16px; outline: none; background: #f8fafc; color: #0B1C2C;"
                            maxlength="10" required>
                    </div>
                    @error('phone')
                        <div style="color: #e63946; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="margin-bottom: 30px;">
                    <label for="email" style="display: block; font-weight: 600; margin-bottom: 8px; color: #0B1C2C;">Email Address <span style="color: #e63946;">*</span></label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your email" 
                        style="width: 100%; padding: 12px; border: 1px solid #dee2e6; border-radius: 8px; font-size: 16px; outline: none; background: #f8fafc; color: #0B1C2C;"
                        required>
                    @error('email')
                        <div style="color: #e63946; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-primary" style="width: 100%; border: none; cursor: pointer; padding: 14px; font-size: 16px;">
                    <i class="fas fa-user-plus" style="margin-right: 8px;"></i> Register Now
                </button>
            </form>
        </div>
        
        <div style="text-align: center; margin-top: 30px;">
            <p style="color: var(--text-muted); font-size: 14px;">By registering, you agree to our Terms & Conditions.</p>
            <a href="{{ route('home') }}" style="color: var(--primary); text-decoration: none; font-weight: 600;">← Back to Home</a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('registrationForm').onsubmit = function(e) {
        const phone = document.getElementById('phone').value;
        const phoneRegex = /^[6789]\d{9}$/;
        
        if (!phoneRegex.test(phone)) {
            alert('Please enter a valid 10-digit Indian phone number starting with 6, 7, 8, or 9.');
            e.preventDefault();
            return false;
        }
        
        const email = document.getElementById('email').value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address.');
            e.preventDefault();
            return false;
        }
    };

    // Auto-focus sponsor_id if it's empty
    window.onload = function() {
        if (!document.getElementById('sponsor_id').value) {
            document.getElementById('sponsor_id').focus();
        }
    }
</script>
@endpush
