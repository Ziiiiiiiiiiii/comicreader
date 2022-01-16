<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;
use App\Models\SubContent;
use Ap\Models\Tag;

class UserInterfaceController extends Controller
{
    public function home(){
        $articles = Article::all();
        $categories = Category::all();
        return view('Article.User.home', compact('articles', 'categories'));
    }

    public function latest(){
        $articles = Article::latest()->get();
        $categories = Category::all();
        return view('Article.User.article', compact('articles', 'categories'));
    }

    public function oldest(){
        $articles = Article::oldest()->get();
        $categories = Category::all();
        return view('Article.User.article', compact('articles', 'categories'));
    }

    public function explore(){
        $articles = Article::all();
        $categories = Category::all();

        return view('Article.User.article', compact('articles', 'categories'));
    }

    public function explorecategory($category_id){
        $articles = Article::where('category_id', $category_id)->get();
        $categories = Category::all();
        return view('Article.User.article', compact('articles', 'categories'));
    }

    public function exploretag($tag_id){
        $articles = Article::where('tag_id', $tag_id)->get();
        $categories = Category::all();
        return view('Article.User.article', compact('articles', 'categories'));
    }

    public function readarticle($id){
        $article = Article::find($id);
        $subcontents = SubContent::where('article_id', $id)->get();
        $categories = Category::all();
        $articles = Article::latest()->get();;
        return view('Article.User.readarticle', compact('article', 'subcontents', 'categories',  'articles'));
    }
    
    public function about(){
        $categories = Category::all();
        return view('Article.User.about', compact('categories'));
    }

    public function category(){
        $categories = Category::all();
        return view('Article.User.category', compact('categories'));
    }
}