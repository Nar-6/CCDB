<?php

use App\Http\Controllers\AbonneController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaiementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Mail\NewPost;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use Kkiapay\Kkiapay;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $lastPost = Post::orderBy('created_at', 'desc')->first();
    return view('accueil/accueil',['lastPost' => $lastPost]);
})->name('home');

// Route::get('/new_post', function () {
//     $post = Post::find(1);
//     // Mail::to('kountobi@gmail.com')->send(new NewPost($post));
//     return view('emails/new_post',['post' => $post]);

// });

Route::get('/page/payer', [PaiementController::class, 'pagePaiement'])->name('page.paiement');


Route::get('/test', [CommentController::class, 'test'])->name('test');

Route::post('/abonnement/abonne', [AbonneController::class, 'abonnement'])->name('abonnement.store');

Route::post('/ecrire/email', [AbonneController::class, 'ecrireEmail'])->name('ecrire.email');

Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');

Route::get('/activites', [PostController::class, 'showActivites'])->name('activites.show');

Route::get('/post/{id}', [PostController::class, 'showPost'])->name('post.show');

Route::post('/post/modalnav', [PostController::class, 'updateI'])->name('post.updatei');


Route::get('/culture', function () {
    return view('culture/culture');
})->name('culture');


Route::group([
    'prefix' => 'admin',
    'middleware' => ['web', 'admin'],
    'namespace' => 'App\Http\Controllers', // Assurez-vous que le namespace est correct
], function () {
    Route::get('/post', 'AdminController@post')->name('post');
});