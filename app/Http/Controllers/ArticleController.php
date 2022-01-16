<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Article;
use App\Models\SubContent;
use App\Models\Category;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('Article.Admin.index', compact('articles'));
    }

    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('Article.Admin.create', compact('categories', 'tags'));
    }

    public function store(Request $request){
        $image = $request->file('inputimage')->getClientOriginalName();
        $request->file('inputimage')->move(public_path('ArticleImage'), $image);
                
        $article = new Article;

        $article->image = $image;
        $article->category_id = $request->inputcategoryid;
        $article->tag_id = $request->inputtagid;
        $article->title = $request->inputtitle;
        $article->content = $request->inputcontent;
        $article->author = $request->inputauthor;
        $article->save();

        return redirect('/article_table');
    }

    public function edit($id){
        $article = Article::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('Article.Admin.edit', compact('article', 'categories', 'tags'));
    }

    public function update(Request $request, $id){
        
        $article = Article::find($id);
        
        File::delete(public_path('ArticleImage/' . $article->image));
        
        $image = $request->file('inputimage')->getClientOriginalName();
        $request->file('inputimage')->move(public_path('ArticleImage'), $image);
        
        $article->image = $image;
        $article->category_id = $request->inputcategoryid;
        $article->tag_id = $request->inputtagid;
        $article->title = $request->inputtitle;
        $article->content = $request->inputcontent;
        $article->author = $request->inputauthor;
        $article->save();

        return redirect('/article_table');
    }

    public function delete($id){
        $article = Article::find($id);
        $subcontents = SubContent::where('article_id', $id)->get();
        $article->delete();
        foreach ( $subcontents as $subcontent ){
            File::delete(public_path('ArticleImage/' . $article->image));
            $subcontent->delete();
        }

        return redirect('/article_table');
    }
}