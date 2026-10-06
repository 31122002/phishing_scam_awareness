@extends('layouts.app')
@section('title','Risk Result')
@section('content')
<div class="container py-5">
    <div class="card shadow-sm p-4 text-center">
        <h1>Detection Result</h1>
        <div class="risk {{ strtolower(str_replace(' ','-', $level)) }}">{{ $level }}</div>
        <h3 class="mt-3">Risk Score: {{ $score }}</h3>
        <p class="lead">{{ $advice }}</p>
    </div>

    @if(count($reasons))
    <div class="card mt-4 p-4">
        <h4>Why was it flagged?</h4>
        <ul class="mb-0">
            @foreach($reasons as $reason)<li>{{ $reason }}</li>@endforeach
        </ul>
    </div>
    @endif

    <a href="{{ route('checker') }}" class="btn btn-primary mt-4">Check Another</a>
</div>
@endsection
