@extends('layouts.app')
@section('title','Admin Dashboard')
@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Admin Dashboard</h1>
        <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="btn btn-outline-danger">Logout</button></form>
    </div>
    <div class="row g-4 my-3">
        <div class="col-md-4"><div class="stat"><h2>{{ $reports }}</h2><p>Total Checks</p></div></div>
        <div class="col-md-4"><div class="stat"><h2>{{ $highRisk }}</h2><p>High Risk Results</p></div></div>
        <div class="col-md-4"><div class="stat"><h2>{{ $questions }}</h2><p>Quiz Questions</p></div></div>
    </div>
    <a class="btn btn-primary me-2" href="{{ route('admin.reports') }}">View Reports</a>
    <a class="btn btn-secondary" href="{{ route('admin.questions') }}">Manage Questions</a>
</div>
@endsection
