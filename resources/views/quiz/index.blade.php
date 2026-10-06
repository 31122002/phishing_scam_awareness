@extends('layouts.app')
@section('title','Awareness Quiz')
@section('content')
<div class="container py-5">
    <h1>Cyber Safety Awareness Quiz</h1>
    <p class="text-muted">Choose the safest response for each situation.</p>
    <form method="POST" action="{{ route('quiz.submit') }}">
        @csrf
        @foreach($questions as $i => $q)
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5>{{ $i+1 }}. {{ $q->question }}</h5>
                @foreach(['option_a','option_b','option_c','option_d'] as $index => $field)
                <label class="d-block border rounded p-2 my-2">
                    <input type="radio" name="answers[{{ $q->id }}]" value="{{ $index+1 }}" required>
                    {{ $q->$field }}
                </label>
                @endforeach
            </div>
        </div>
        @endforeach
        <button class="btn btn-success btn-lg">Submit Quiz</button>
    </form>
</div>
@endsection
