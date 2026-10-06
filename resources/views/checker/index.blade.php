@extends('layouts.app')
@section('title','Scam Checker')
@section('content')
<div class="container py-5">
    <h1>Scam Checker</h1>
    <p class="text-muted">Enter a suspicious message or URL. The system uses a simple rule-based risk analysis.</p>

    <form method="POST" action="{{ route('checker.check') }}" class="card shadow-sm p-4">
        @csrf
        <label class="form-label fw-bold">Check Type</label>
        <select name="type" class="form-select mb-3" required>
            <option value="message">SMS / Email / Message</option>
            <option value="url">Website URL</option>
        </select>

        <label class="form-label fw-bold">Message or URL</label>
        <textarea name="input" class="form-control mb-3" rows="7" placeholder="Paste the suspicious message or URL here..." required>{{ old('input') }}</textarea>

        @error('input')<div class="text-danger mb-3">{{ $message }}</div>@enderror
        <button class="btn btn-primary btn-lg">Analyse for Risk</button>
    </form>

    <div class="alert alert-warning mt-4">
        <strong>Important:</strong> This is an educational rule-based checker, not a guarantee that content is safe or fraudulent.
    </div>
</div>
@endsection
