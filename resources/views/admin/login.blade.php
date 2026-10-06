@extends('layouts.app')
@section('title','Admin Login')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm p-4">
                <h2>Admin Login</h2>
                @if($errors->any())<div class="alert alert-danger">{{ $errors->first() }}</div>@endif
                <form method="POST" action="{{ route('admin.authenticate') }}">
                    @csrf
                    <input type="email" name="email" class="form-control mb-3" placeholder="Admin email" required>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                    <button class="btn btn-primary w-100">Login</button>
                </form>
                <small class="text-muted mt-3">Demo: admin@example.com / admin123</small>
            </div>
        </div>
    </div>
</div>
@endsection
