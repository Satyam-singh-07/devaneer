@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0 text-gray-800">Manage Members</h2>
        <a href="{{ route('admin.members.create') }}" class="btn btn-primary">
            <i class="bi bi-person-plus me-1"></i> Add Member
        </a>
    </div>

    <!-- Search and Filter Bar -->
    <div class="card shadow border-0 mb-4">
        <div class="card-body p-3">
            <form action="{{ route('admin.members.index') }}" method="GET" class="row g-3">
                <div class="col-md-10">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" name="search" class="form-control border-start-0 ps-0" placeholder="Search by Name, Email, Member ID or Phone..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-2 d-grid">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Search</button>
                        <a href="{{ route('admin.members.index') }}" class="btn btn-outline-secondary" title="Reset"><i class="bi bi-arrow-counterclockwise"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4">Member ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Sponsor ID</th>
                            <th>Joined On</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($members as $member)
                        <tr>
                            <td class="ps-4 fw-bold text-primary">{{ $member->username }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->phone }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->sponsor_id }}</td>
                            <td>{{ $member->created_at->format('d M, Y') }}</td>
                            <td class="text-end pe-4">
                                <div class="btn-group">
                                    <a href="{{ route('admin.members.edit', $member) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.members.destroy', $member) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this member?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger ms-1">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-5">
                                <i class="bi bi-people display-4 text-muted mb-3 d-block"></i>
                                <p class="text-muted">No members found.</p>
                                <a href="{{ route('admin.members.index') }}" class="btn btn-primary btn-sm">Clear Search</a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="px-4 py-3 border-top">
                {{ $members->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
</div>
@endsection
