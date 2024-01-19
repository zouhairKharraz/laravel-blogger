
@extends('layouts.master')
@section('css')

@section("title")
        poster une publication
@endsection
@endsection
@section('page-header')

<div class="container col-md-8 mx-auto">
    <h3 class="btn bg-warning">Pour Ajouter une publication veuillez remplire les champs suivant Puis cliquer sur le boutton poster </h3>
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
    <div class="container col-md-8 mx-auto">
        <div class="text text-center col-8">
            <div class="card" style="width:680px">

                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-3">
                    <label for="title" class="form-label">title:</label>
                    <input type="text" class="form-control" name="title">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="text" class="form-label">description:</label>
                        <textarea type="textarea" class="form-control" name="body">
                        </textarea>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="image" class="form-label">choisi une image:</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <button type="submit" class="btn bg-info">Poster</button>
                </form>

            </div>
        </div>
    </div>

    <br/><br/>
@endsection
@section('content')
@endsection
@section('js')

@endsection








