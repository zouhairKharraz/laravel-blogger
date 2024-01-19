
@extends('layouts.master')
@section('css')

@section("title")
modifier {{$post->title}}
@endsection
@endsection
@section('page-header')

@endsection
@section('content')

<div class="container col-md-8 mx-auto">
    <h3 class="btn bg-warning">Pour Modifier une publication veuillez modifier les champs suivant Puis cliquer sur le boutton valider </h3>
</div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container col-md-5 mx-auto">
        <div class="text text-center col-8"">
            <div class="card" style="width:450px">

                <form action="{{ route('post.update',$post->slug) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 mt-3">
                      <label for="title" class="form-label">title:</label>
                      <input type="text" class="form-control" name="title"
                      value='{{$post->title}}'>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="text" class="form-label">text:</label>
                        <textarea type="textarea" class="form-control" name="body" >{{$post->body}}
                        </textarea>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="image" class="form-label">choisi une image:</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn bg-info">valider</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')

@endsection











