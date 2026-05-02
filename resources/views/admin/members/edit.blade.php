@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800">Edit Member: {{ $member->username }}</h2>
        <a href="{{ route('admin.members.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Back to List
        </a>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow border-0 mb-4">
                <div class="card-body p-4">
                    <form action="{{ route('admin.members.update', $member->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Member ID (Username)</label>
                            <input type="text" class="form-control bg-light" value="{{ $member->username }}" readonly disabled>
                            <div class="form-text">Member ID cannot be changed.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Sponsor ID</label>
                            <input type="text" class="form-control bg-light" value="{{ $member->sponsor_id }}" readonly disabled>
                            <div class="form-text">Sponsor ID cannot be changed in the admin panel.</div>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $member->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label fw-bold">Phone Number <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">+91</span>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $member->phone) }}" maxlength="10" required>
                                </div>
                                @error('phone')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $member->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary py-2 fw-bold">
                                <i class="bi bi-check-circle me-1"></i> Update Member
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card shadow border-0 bg-light">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Member Details</h5>
                    <div class="small text-muted">
                        <p><strong>Joined On:</strong> {{ $member->created_at->format('d M, Y H:i A') }}</p>
                        <p><strong>Last Updated:</strong> {{ $member->updated_at->format('d M, Y H:i A') }}</p>
                    </div>
                    <hr>
                    <h5 class="fw-bold mb-3 text-danger">Danger Zone</h5>
                    <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm w-100">
                            <i class="bi bi-trash me-1"></i> Delete Member Account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
