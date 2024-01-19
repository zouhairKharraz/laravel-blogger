
@extends('layouts.master')
@section('css')


@section("title")
        show post
@endsection
@endsection
@section('page-header')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8"style="background-color:pink">
        <div class=" overflow-hidden shadow-sm sm:rounded-lg"  style="background-color:pink">
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex">
                    <div class="md:flex">
                        <div class="md:flex-shrink-0">
                            <img class="rounded-lg md:w-56" src="{{asset('./images/'.$post->image)}}" alt="Woman paying for a purchase">
                        </div>
                        <div class="mt-4 md:mt-0 md:ml-6">
                            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">
                            {{$post->title}}
                            </div>

                            <p class="mt-2 text-gray-600">
                            {{$post->body}}
                            </p>
                        </div>
                    <div>
                       
                        <form action="{{route("commentaires.store",["userID"=>auth()->user()->id,"postID"=>$post->id])}}" method="POST">
                            @csrf
                            <div class="row btn-group">
                                <div class="col-6">
                                    <input type="text"  name="comment" class="form-group" placeholder="Commentaire...">
                                </div>
                                <div class="col-1">
                                    <button type="submit" class="btn btn-secondary">submit</button>
                                </div>
                                
                            </div>
                          </form>
                    </div>
                    <div class="" >
                            @foreach ($post->commentaires as $commentaire )
                            
                        <div class="container d-flex">

                            <div class="comment">
                                <span class="h4">{{DB::table('users')->where('id','=',$commentaire->user_id)->value('name')}}</span> : {{$commentaire->comment}}
                            </div>
                            <div class="btn-groupe">
                                <form id="{{$commentaire->id}}"
                                    action="{{route('commentaires.destroy',$commentaire)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button onclick="event.preventDefault(); if(confirm('voulez vous vraiment supprimer ce comment '))
                                            document.getElementById({{ $commentaire->id }}).submit();"
                                        class="btn btn-danger" type="submit">
                                            Sup
                                    </button>
                                </form>
                            </div>
                        </div>
                            @endforeach
                    </div>
          
            @if (auth()->user()->id == $post->user_id || auth()->user()->is_admin)
            <a href=" {{route('post.modifier',$post->slug)}}" class="btn btn-warning">modifier</a>

                    <form id="{{$post->id}}"
                    action="{{route('post.delete',$post->slug)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <button onclick="event.preventDefault(); if(confirm('voulez vous vraiment supprimer ce post '))
                            document.getElementById({{ $post->id }}).submit();"
                        class="btn btn-danger" type="submit">

                            supprimer
                        </button>
                    </form>
            @endif



                </div>


            </div>
            </div>

</div>
@endsection
@section('content')

@endsection
@section('js')

@endsection





