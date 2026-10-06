<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CyberSafe Awareness')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">CyberSafe</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">☰</button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('checker') }}">Scam Checker</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('articles') }}">Awareness</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('quiz') }}">Quiz</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.login') }}">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>@yield('content')</main>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <div>Phishing, Scam and Fraud Detection Awareness System</div>
    <small class="text-secondary">Educational prototype — always verify suspicious requests through official channels.</small>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
