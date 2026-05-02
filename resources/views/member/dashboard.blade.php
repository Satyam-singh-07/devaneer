@extends('layouts.member')

@section('content')
<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card h-100 p-4">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-cyan bg-opacity-10 p-3 rounded-3 me-3">
                    <i class="bi bi-person-check text-cyan fs-4"></i>
                </div>
                <div>
                    <div class="text-muted small">Your Sponsor</div>
                    <div class="fw-bold fs-5">{{ Auth::user()->sponsor_id }}</div>
                </div>
            </div>
            <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-cyan" style="width: 100%"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 p-4">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                    <i class="bi bi-people text-primary fs-4"></i>
                </div>
                <div>
                    <div class="text-muted small">Direct Referrals</div>
                    <div class="fw-bold fs-5">0</div>
                </div>
            </div>
            <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" style="width: 0%"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 p-4">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                    <i class="bi bi-trophy text-success fs-4"></i>
                </div>
                <div>
                    <div class="text-muted small">Total Business Value</div>
                    <div class="fw-bold fs-5">0 BV</div>
                </div>
            </div>
            <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-success" style="width: 0%"></div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-8">
        <div class="card p-4">
            <h5 class="fw-bold mb-4">Recent Activity</h5>
            <div class="text-center py-5">
                <i class="bi bi-activity display-6 text-muted mb-3 d-block"></i>
                <p class="text-muted">No recent activity to show.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card p-4 h-100">
            <h5 class="fw-bold mb-4">Quick Links</h5>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action px-0 border-0 d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-person-plus me-2 text-cyan"></i> Refer New Member</span>
                    <i class="bi bi-chevron-right small text-muted"></i>
                </a>
                <a href="#" class="list-group-item list-group-item-action px-0 border-0 d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-cart me-2 text-cyan"></i> Purchase Products</span>
                    <i class="bi bi-chevron-right small text-muted"></i>
                </a>
                <a href="#" class="list-group-item list-group-item-action px-0 border-0 d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-file-earmark-text me-2 text-cyan"></i> Download Plan PDF</span>
                    <i class="bi bi-chevron-right small text-muted"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
