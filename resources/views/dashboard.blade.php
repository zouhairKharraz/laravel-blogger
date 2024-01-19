
@extends('layouts.master')
@section('css')

@section("title")
        page blog
@endsection
@endsection
@section('page-header')

<!-- breadcrumb -->

<!-- breadcrumb -->
@endsection
@section('content')
    <a class="navbar-brand bg-danger" style="color:yellow;border:2px solid yellow;border-radius: 12px;
    padding: 5px;" href="/create/post">
    ajouter post
    </a>
<div class=" overflow-hidden shadow-sm sm:rounded-lg"  style="background-color:pink">
    <br>
        @if (session()->has('success'))
            <div class="alert alert-success">
                    {{session()->get('success')}}
            </div>
        @endif
    <div class="row ">
        @foreach ($posts as $post)
            <div class="col-md-3  my-10 ">
                <div class="card h-100 mb-4"  style="border:2px solid red">
                    <img src="{{asset('./images/'.$post->image)}}" class="card-img-top" alt="" style="border:2px solid blue;height:150px">
                    <h5 class="card-title text text-center">{{ $post->user->name }}     </h5>
                    <h4 class="card-title text text-center " style="color:blue">{{ $post->title }}     </h4>
                    <p class="card-text"> {{ Str::limit($post->body,127) }}   </p>
                    <a href="{{ Route('post.show',$post->slug) }}" class="btn btn-primary text text-center">   voir </a>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <div class="d-flex justify-content-center my-4">
        {{ $posts->links() }}
    </div>
</div>
@endsection
@section('js')

@endsection


