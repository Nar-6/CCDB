<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class CommentController extends Controller
{   
    public function test(){
        $post2 = Post::find(2); // Utilisez simplement l'identifiant sans les guillemets
        $images = $post2->images->pluck('lien')->toArray(); // Extrayez les liens des images
        // dd('dgf');
        return view('/test', compact('images'));
    }
    
  
    public function store(Request $request)
    {
        // Récupérer la valeur de post_id
        $postId = $request->input('post_id');

        // Récupérer les autres données du formulaire
        $commentText = $request->input('comment');

        // Créer un nouveau commentaire
        $comment = new Comment();
        $comment->postId = $postId;
        $comment->contenu = $commentText;
        // ... autres attributs du commentaire

        // Enregistrer le commentaire dans la base de données
        $comment->save();

        // Rediriger ou effectuer d'autres actions après l'enregistrement

        // return redirect()->route('post.show', ['id' => $postId]);

        $comments = Comment::where('postId', $postId)->get();
        $view = View::make('partials.comment_list')->with('comments', $comments)->render();
    
        // Retourner la vue partielle des commentaires au format JSON
        return response()->json(['success' => true, 'comment_list' => $view]);
    
   
    }
}
