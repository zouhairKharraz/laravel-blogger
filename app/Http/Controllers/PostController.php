<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Requests\Postrequest;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index(){

        // $posts = Post ::latest()->get(); --> katrteb mn a5ir haja tzadet l les post jdad
        // $posts = Post ::orderby("un champ",desc)->get();
        // $posts = Post ::where("un champ",=,"variable")->get();
        // $posts = Post ::where("un champ",=,"variable")->get();

        $posts = Post :: latest()->paginate(4);
        return view('home')->with([
            'posts' => $posts
        ]);
    }

    public function show($slug){
        // $post = Post :: where('slug', $slug)->first();
        // return view('show')->with([
        //     'post' => $post
        // ]);
        $post = Post ::with('commentaires')->where('slug', $slug)->first();
        return view('show')->with([
                'post' => $post
            ]);

    }
    public function create(){
        if (auth()->check()){
            return view ('create');
        }
        return redirect()->back();

    }

    public function store(Postrequest $request){
        if ($request->has('image')){
            $file = $request->image ;
            //recuperer le nom de l image
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file -> move(public_path('images'), $image_name);
        }
        post::create([
            'title'=> $request->title,
            'body' => $request->body,
            'slug'=>Str::slug($request->title),
            'image' =>$image_name ,
            'user_id' => auth()->user() -> id ,

        ]);
            return redirect()->route("home")->with([
                'success'=>'article bien poster'
            ]);
    }
    public function modifier($slug){
        $post = Post :: where('slug', $slug)->first();
        return view('modifier')->with([
            'post' => $post
        ]);
    }
    public function update(Postrequest $request ,$slug){

        $post = Post :: where('slug', $slug)->first();
        if ($request->has('image')){
            $file = $request->image ;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file -> move(public_path('images'), $image_name);
            unlink(public_path('images').'/'.$post->image);
            $post->image = $image_name;
        }
        $post->update([
            'title'=> $request->title,
            'body' => $request->body,
            'slug'=>Str::slug($request->title),
            'image' => $post->image
        ]);
            return redirect()->route("home")->with([

              'success'=>'article bien modifier '
            ]);
    }
    public function delete($slug){
        $post = Post :: where('slug', $slug)->first();
        if (file_exists(public_path('images').'/'.$post->image)){
             unlink(public_path('images').'/'.$post->image);
        }
        $post->delete();
            return redirect()->route("home")->with([
                'success'=>'article a ete bien supprimer '
            ]);
    }
 }
