@extends('layouts.member')

@section('content')
<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card h-100 p-4 border-start border-4 border-cyan">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-cyan bg-opacity-10 p-3 rounded-3 me-3">
                    <i class="bi bi-person-badge text-cyan fs-4"></i>
                </div>
                <div>
                    <div class="text-muted small">Member ID</div>
                    <div class="fw-bold fs-5">{{ Auth::user()->username }}</div>
                </div>
            </div>
            <div class="mt-2 pt-2 border-top">
                <span class="badge bg-success">Active Distributor</span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 p-4 border-start border-4 border-primary">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                    <i class="bi bi-people text-primary fs-4"></i>
                </div>
                <div>
                    <div class="text-muted small">Direct Referrals</div>
                    <div class="fw-bold fs-5">{{ Auth::user()->referrals->count() }}</div>
                </div>
            </div>
            <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" style="width: {{ min(Auth::user()->referrals->count() * 10, 100) }}%"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 p-4 border-start border-4 border-success">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                    <i class="bi bi-trophy text-success fs-4"></i>
                </div>
                <div>
                    <div class="text-muted small">Total Team Size</div>
                    <div class="fw-bold fs-5">{{ Auth::user()->referrals->count() }}</div> {{-- Placeholder for full team size --}}
                </div>
            </div>
            <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-success" style="width: 10%"></div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <!-- Personal Details -->
    <div class="col-lg-5">
        <div class="card p-4">
            <h5 class="fw-bold mb-4 d-flex align-items-center">
                <i class="bi bi-person-lines-fill me-2 text-cyan"></i> My Profile Details
            </h5>
            <div class="table-responsive">
                <table class="table table-borderless align-middle mb-0">
                    <tbody>
                        <tr>
                            <td class="text-muted ps-0" style="width: 120px;">Full Name</td>
                            <td class="fw-bold">{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted ps-0">Member ID</td>
                            <td class="fw-bold text-cyan">{{ Auth::user()->username }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted ps-0">Phone</td>
                            <td class="fw-bold">+91 {{ Auth::user()->phone }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted ps-0">Email</td>
                            <td class="fw-bold">{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted ps-0">Sponsor ID</td>
                            <td class="fw-bold text-primary">{{ Auth::user()->sponsor_id }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted ps-0">Joined On</td>
                            <td class="fw-bold">{{ Auth::user()->created_at->format('d M, Y') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <button class="btn btn-outline-cyan btn-sm w-100 rounded-pill">
                    <i class="bi bi-pencil-square me-1"></i> Edit Profile
                </button>
            </div>
        </div>
    </div>

    <!-- Genealogy Tree -->
    <div class="col-lg-7">
        <div class="card p-4">
            <h5 class="fw-bold mb-4 d-flex align-items-center">
                <i class="bi bi-diagram-3 me-2 text-cyan"></i> My Referral Tree
            </h5>
            
            <div class="genealogy-tree text-center overflow-auto py-4">
                <div class="tree-root mb-5">
                    <div class="tree-member mx-auto">
                        <div class="member-box main-member">
                            <i class="bi bi-person-circle fs-3 d-block mb-1"></i>
                            <div class="small fw-bold">YOU</div>
                            <div class="tiny text-muted">{{ Auth::user()->username }}</div>
                        </div>
                    </div>
                    
                    @if(Auth::user()->referrals->count() > 0)
                        <div class="tree-connector"></div>
                        
                        <div class="d-flex justify-content-center gap-4 flex-wrap mt-3">
                            @foreach(Auth::user()->referrals as $referral)
                                <div class="tree-child">
                                    <div class="tree-line-v mx-auto"></div>
                                    <div class="member-box child-member">
                                        <i class="bi bi-person fs-4 d-block mb-1"></i>
                                        <div class="small fw-bold text-truncate" style="max-width: 100px;">{{ $referral->name }}</div>
                                        <div class="tiny text-muted">{{ $referral->username }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="py-5 text-muted">
                            <i class="bi bi-info-circle me-1"></i> You haven't referred any members yet.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-outline-cyan {
        color: #06B6D4;
        border-color: #06B6D4;
    }
    .btn-outline-cyan:hover {
        background-color: #06B6D4;
        color: #fff;
    }
    .tiny {
        font-size: 10px;
    }
    .member-box {
        padding: 12px;
        border-radius: 12px;
        background: #fff;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        min-width: 120px;
        transition: all 0.3s;
    }
    .main-member {
        border-color: #06B6D4;
        background: rgba(6, 182, 212, 0.05);
        color: #06B6D4;
    }
    .child-member:hover {
        transform: translateY(-3px);
        border-color: #06B6D4;
        box-shadow: 0 4px 12px rgba(6, 182, 212, 0.15);
    }
    .tree-connector {
        width: 2px;
        height: 30px;
        background: #e2e8f0;
        margin: 0 auto;
    }
    .tree-line-v {
        width: 2px;
        height: 20px;
        background: #e2e8f0;
    }
</style>
@endsection
