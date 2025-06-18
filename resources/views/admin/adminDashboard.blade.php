{{-- resources/views/admin/adminLayout/adminHome.blade.php --}}
@extends('admin.adminLayout.adminHome') 

@section('title', 'Admin Dashboard')

@section('content')
<div class="container py-5 mt-5">
    <h2 class="mb-4">Welcome to Admin Dashboard</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Projects</h5>
                    <p class="card-text display-6">{{$projectCount}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h5 class="card-title">Messages</h5>
                    <p class="card-text display-6">34</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h5 class="card-title">Visitors</h5>
                    <p class="card-text display-6">128</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
