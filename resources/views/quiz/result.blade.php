@extends('layouts.app')
@section('title','Quiz Result')
@section('content')
<div class="container py-5 text-center">
    <div class="card shadow-sm p-5">
        <h1>Quiz Completed</h1>
        <div class="display-4 fw-bold">{{ $percentage }}%</div>
        <h3>{{ $score }} / {{ $total }}</h3>
        <p class="lead">{{ $level }}</p>
        <a href="{{ route('quiz') }}" class="btn btn-primary">Try Again</a>
    </div>
</div>
@endsection
