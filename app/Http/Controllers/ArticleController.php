<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Etudiant;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

use DB;

class ArticleController extends Controller
{
    public function index() {
        $etudiants = Etudiant::All();
        $articles = Article::All();

        $articles = Article::Paginate(8);

        return view('article.index', ['articles' => $articles,'etudiants' => $etudiants]); 

    }

    public function create() {
        // permet de récupère l'id de l'étudiant 
        $etudiant = Auth::user();

        return view('article.create',['etudiant' => $etudiant]);
    }

    public function store(Request $request){
        $article = Article::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'user_id'=>$request->user_id
        ]);

        // redirige vers la page avec tous les articles
        return redirect()->route('article.index');
    }

    public function show($articleId) {
        // Trouve l'article avec le bon ID
        $article = Article::find($articleId);

        // Permet d'ajouter dans la variable $article les informations sur le créateur de l'article
        // Recherche l'étudiant
        $etudiantCreateurArticle = Etudiant::find($article['user_id']);
        // Ajout des informations
        $article['nom'] = $etudiantCreateurArticle['nom'];
        $article['prenom'] = $etudiantCreateurArticle['prenom'];


        // Trouve l'ID de l'utilisateur CONNECTER
        $user = Auth::user();

        // Trouve toutes les informations de l'utilisateur CONNECTER
        $etudiant = Etudiant::find($user['id']);


        return view('article.show', ['article' => $article, 'etudiant'=>$etudiant]);
    }

    public function article_user(Request $request)
    {
        $etudiant = Auth::user();
        $articles = Article::where('user_id', $etudiant['id']);

        echo '<pre>';
        print_r($etudiant);
        echo '</pre>';

        $articles = Article::Paginate(4);

        return view('article.index', ['articles' => $articles,'etudiants' => $etudiants]); 

    }

    public function edit(Article $article)
    {
        $etudiantCreateurArticle = Etudiant::find($article['user_id']);
        return view('article.edit', ['article'=>$article, 'etudiant'=>$etudiantCreateurArticle]);
    }

    public function update(Request $request, Article $article)
    {
        $article->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'user_id'=>$request->user_id
        ]);
        return redirect()->route('article.index');

    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index');
    }
}
