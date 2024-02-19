<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{
    public function showActivites() {

        $posts = Post::all()->reverse();

        // Retourner la vue avec la liste des posts
        return view('activites/activites', ['posts' => $posts]);
    }

    public function showPost(int $id) {
        $post = Post::find($id);
        $images = $post->images->pluck('lien')->toArray(); // Extrayez les liens des images
        $videos = $post->videos->pluck('lien')->toArray(); // Extrayez les liens des images
        $comments = $post->comments;
        return view('activites/post',compact('post','comments','images','videos'));

    }
    public function updateI(Request $request)
    {
        $i = $request->input('i');
        $action = $request->input('action');
        $countImages = $request->input('countImages');
        $images = $request->input('images');
        dd($images);
        
        if ($action == 'decrement') {
            $i = max($i - 1,0);

        }if ($action == 'increment') {
            $i = min($i + 1, $countImages - $i);
        }
        // Effectuez ici toutes les validations nécessaires sur $i

        // Mettez à jour la valeur de $i dans la session ou dans la base de données, selon vos besoins
        // Répondre avec la nouvelle valeur de $i ou toute autre information nécessaire
        return response()->json(['success' => true, 'i' => $i]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
