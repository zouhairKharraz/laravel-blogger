@extends('layouts.master')
@section('css')

@section('title')
    page blog
@endsection
@endsection
@section('page-header')
<!-- breadcrumb -->

<!-- breadcrumb -->
@endsection
@section('content')
<div class="d-flex align-center justify-content-center mb-4">
    <a class="navbar-brand bg-danger col-8 text-center"
        style="color:yellow;border:2px solid yellow;border-radius: 12px;
        padding: 5px; margin:auto;"
        href="/create/post">
        ajouter post
    </a>
</div>
<div class=" overflow-hidden shadow-sm sm:rounded-lg">

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @foreach ($posts as $post)
        <div class="card mb-3">
            <i class="h3 m-3">{{ $post->user->name }}</i>
            <div style="margin-left:20px;">
                <div class="text-dark">{{ $post->title }}</div>
                <div>{{ Str::limit($post->body, 100) }}</div>
            </div>
            <img src="{{ asset('./images/' . $post->image) }}" class="p-5" alt="">
            {{-- <a href="{{ Route('post.show', $post->slug) }}" class="btn btn-primary text text-center"> voir </a> --}}

        </div>
    @endforeach
    <div class="d-flex justify-content-center my-4">
        {{ $posts->links() }}
    </div>
</div>
</div>
@endsection
@section('js')
@endsection
