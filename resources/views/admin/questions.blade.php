@extends('layouts.app')
@section('title','Manage Questions')
@section('content')
<div class="container py-5">
    <h1>Manage Quiz Questions</h1>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary mb-3">Back</a>
    @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif

    <div class="card p-4 mb-4">
        <h4>Add Question</h4>
        <form method="POST" action="{{ route('admin.questions.store') }}">
            @csrf
            <textarea name="question" class="form-control mb-2" placeholder="Question" required></textarea>
            <div class="row g-2">
                @foreach(['a','b','c','d'] as $letter)
                <div class="col-md-6"><input name="option_{{ $letter }}" class="form-control" placeholder="Option {{ strtoupper($letter) }}" required></div>
                @endforeach
            </div>
            <div class="row g-2 mt-2">
                <div class="col-md-3"><select name="correct_option" class="form-select" required><option value="">Correct option</option><option value="1">A</option><option value="2">B</option><option value="3">C</option><option value="4">D</option></select></div>
                <div class="col-md-9"><input name="explanation" class="form-control" placeholder="Explanation (optional)"></div>
            </div>
            <button class="btn btn-primary mt-3">Add Question</button>
        </form>
    </div>

    @foreach($questions as $q)
    <div class="card p-3 mb-2">
        <div class="d-flex justify-content-between">
            <strong>{{ $q->question }}</strong>
            <form method="POST" action="{{ route('admin.questions.delete',$q) }}" onsubmit="return confirm('Delete this question?')">
                @csrf @method('DELETE') <button class="btn btn-sm btn-danger">Delete</button>
            </form>
        </div>
        <small class="text-muted">Correct option: {{ $q->correct_option }}</small>
    </div>
    @endforeach
</div>
@endsection
