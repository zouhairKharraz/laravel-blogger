<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $commentaire= new Commentaire();
        $commentaire->comment=$request->comment;
        $commentaire->post_id=$request->postID;
        $commentaire->user_id=$request->userID;
        $commentaire->save();
       return redirect()->back();
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Commentaire $commentaire)
    {
    
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaire $commentaire): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commentaire $commentaire): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $commentaire): RedirectResponse
    {
        $commentaire->delete();
            return redirect()->back();
    }
}
