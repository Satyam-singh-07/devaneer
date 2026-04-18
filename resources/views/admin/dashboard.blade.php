@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Admin Dashboard</h5>
                    <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-light btn-sm">Logout</button>
                    </form>
                </div>

                <div class="card-body text-center">
                    <h3>Welcome, {{ Auth::user()->name }}!</h3>
                    <p class="text-muted">You are logged in to the Devaneer Admin Panel.</p>
                    <hr>
                    <p>Manage your products, distributors, and track your sales from this panel.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
