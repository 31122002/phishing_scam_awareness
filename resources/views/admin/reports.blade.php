@extends('layouts.app')
@section('title','Scam Reports')
@section('content')
<div class="container py-5">
    <h1>Detection Reports</h1>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary mb-3">Back</a>
    <div class="table-responsive">
    <table class="table table-bordered align-middle">
        <thead><tr><th>Date</th><th>Type</th><th>Input</th><th>Risk</th><th>Score</th><th>Reasons</th></tr></thead>
        <tbody>
        @forelse($reports as $report)
        <tr>
            <td>{{ $report->created_at->format('d M Y H:i') }}</td>
            <td>{{ strtoupper($report->input_type) }}</td>
            <td style="max-width:300px;word-break:break-word">{{ $report->input_value }}</td>
            <td><span class="badge bg-{{ $report->risk_level === 'High Risk' ? 'danger' : ($report->risk_level === 'Suspicious' ? 'warning text-dark' : 'success') }}">{{ $report->risk_level }}</span></td>
            <td>{{ $report->score }}</td>
            <td>{{ implode(', ', $report->reasons ?? []) }}</td>
        </tr>
        @empty
        <tr><td colspan="6" class="text-center">No reports yet.</td></tr>
        @endforelse
        </tbody>
    </table>
    </div>
</div>
@endsection
