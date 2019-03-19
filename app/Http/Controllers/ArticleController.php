<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Resources\Article as ArticleResource;
use App\Http\Requests;

class ArticleController extends Controller
{
    
    public function index()
    {
        $articles = Article::paginate(10);
        //return this article as a resource
        return ArticleResource::collection($articles);

    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $article = $request->isMethod('put') ? Article::findOrFail 
        ($request->article_id) : new Article;

        $article->id = $request->input('article_id');
        $article->title = $request->input('title');
        $article->body = $request->input('body');

        if ($article->save()) {
           return new ArticleResource($article);
        }
    }

    
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return new ArticleResource($article);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        if ($article->delete()) {
           return new ArticleResource($article);
        }
    }
}
