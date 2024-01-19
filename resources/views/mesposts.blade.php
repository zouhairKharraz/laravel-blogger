
@extends('layouts.master')
@section('css')

@section("title")
        page blog
@endsection
@endsection
@section('page-header')

<div class="py-12">
    <a class="navbar-brand bg-danger" style="color:yellow;border:2px solid yellow;border-radius: 12px;
        padding: 5px;" href="/create/post">
        creer post
    </a>
<br/>
    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <br/>
        <table class=" overflow-hidden shadow-sm sm:rounded-lg" style="border:red 2px solid">
            <thead style="border:red 2px solid">
                <tr >
                    <th class=" py-4 border-b-2 border-gray-200 bg-gray-100 text-center " style="width: 33% ;border:red 2px solid">  title </th>
                    <th class=" py-4 border-b-2 border-gray-200 bg-gray-100 text-center " style="width: 33%;border:red 2px solid"> description</th>
                    <th class=" py-4 border-b-2 border-gray-200 bg-gray-100 text-center "style="width: 33%"> operation </th>
                </tr>
            </thead>
            <tbody style="border:red 2px solid">
                @foreach ( auth()->user()->posts as $post )
                <tr>
                    <td class=" py-1 border-b-1 " style="width: 33% ;border:red 2px solid">
                                {{$post->title}}
                    </td>
                    <td class=" py-1 border-b-1 " style="width: 33% ;border:red 2px solid">
                                {{Str::limit($post->body,50)}}
                    </td>

                    <td class="text-center py-1 border-b-1" style="border:red 2px solid ">
                        <button form="send-verification" class="text-center text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            <a href="{{route('post.modifier',$post->slug)}}">
                            modifier
                         </a>
                        </button>
                        <form id="{{$post->id}}" action="{{route('post.delete',$post->slug)}}" method="post" enctype="multipart/form-data" class="py-1 bg-blue-500 text-white  rounded text-2xl font-bold">
                            @csrf
                            @method('delete')
                            <button form="send-verification" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                onclick="event.preventDefault(); if(confirm('voulez vous vraiment supprimer ce post '))
                                document.getElementById({{ $post->id }}).submit();"type="submit">
                                <a href="{{route('post.delete',$post->slug)}}">
                                Supprimer
                                <a/>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<!-- breadcrumb -->

<!-- breadcrumb -->
@endsection
@section('content')

@endsection
@section('js')

@endsection










