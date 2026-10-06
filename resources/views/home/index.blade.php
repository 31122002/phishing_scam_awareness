@extends('layouts.app')
@section('title','CyberSafe - Home')

@section('content')
<div class="hero py-5">
    <div class="container py-4">
        <span class="badge bg-warning text-dark mb-3">Cyber Security Awareness</span>
        <h1 class="display-5 fw-bold">Phishing, Scam & Fraud Detection</h1>
        <p class="lead col-lg-8">Learn how to recognise suspicious messages, websites, payment requests and online scams before they cause harm.</p>
        <a href="{{ route('checker') }}" class="btn btn-light btn-lg me-2">Check a Scam</a>
        <a href="{{ route('quiz') }}" class="btn btn-outline-light btn-lg">Take Quiz</a>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 mb-5">
        <div class="col-md-4"><div class="stat"><h2>{{ $questions }}</h2><p>Quiz Questions</p></div></div>
        <div class="col-md-4"><div class="stat"><h2>{{ $articles->count() }}</h2><p>Awareness Topics</p></div></div>
        <div class="col-md-4"><div class="stat"><h2>24/7</h2><p>Safety Awareness</p></div></div>
    </div>

    <h2 class="mb-4">Common Scams</h2>
    <div class="row g-4">
        @foreach([
            ['Phishing','Fake emails, SMS and websites designed to steal information.'],
            ['UPI & OTP Fraud','Scammers try to obtain OTPs, PINs or trick users into approving payments.'],
            ['Job Scams','Fake recruitment, registration-fee and work-from-home scams.'],
            ['Investment Scams','Promises of unrealistic or guaranteed returns.'],
            ['Shopping Fraud','Fake stores, copied websites and unrealistic offers.'],
            ['Social Engineering','Scammers use urgency, fear or impersonation to manipulate victims.'],
        ] as $item)
        <div class="col-md-4"><div class="card h-100 shadow-sm"><div class="card-body"><h5>{{ $item[0] }}</h5><p class="text-muted">{{ $item[1] }}</p></div></div></div>
        @endforeach
    </div>
</div>
@endsection
