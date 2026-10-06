@extends('layouts.app')
@section('title',$article->title)
@section('content')
<div class="container py-5">
    <span class="badge bg-primary">{{ $article->category }}</span>
    <h1 class="mt-3">{{ $article->title }}</h1>
    <p class="lead text-muted">{{ $article->summary }}</p>
    <div class="article-content mt-4">{!! nl2br(e($article->content)) !!}</div>
    <a href="{{ route('articles') }}" class="btn btn-primary mt-4">Back to Awareness</a>
</div>
@endsection
