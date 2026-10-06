@extends('layouts.app')
@section('title','Awareness')
@section('content')
<div class="container py-5">
    <h1>Cyber Safety Awareness</h1>
    <div class="row g-4 mt-2">
        @foreach($articles as $article)
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <span class="badge bg-primary">{{ $article->category }}</span>
                    <h4 class="mt-3">{{ $article->title }}</h4>
                    <p class="text-muted">{{ $article->summary }}</p>
                    <a href="{{ route('articles.show',$article) }}" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
