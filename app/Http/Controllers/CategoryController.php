<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('Category.Admin.index', compact('categories'));
    }

    public function create(){
        return view('Category.Admin.create');
    }

    public function store(Request $request){
        $image = $request->file('inputimage')->getClientOriginalName();
        $request->file('inputimage')->move(public_path('CategoryImage'), $image);

        $category = new Category;

        $category->image = $image;
        $category->category_name = $request->inputcategoryname;
        $category->save();

        return redirect('/category_table');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('Category.Admin.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);

        File::delete(public_path('CategoryImage/' . $category->image));

        $image = $request->file('inputimage')->getClientOriginalName();
        $request->file('inputimage')->move(public_path('CategoryImage'), $image);

        $category->image = $image;
        $category->category_name = $request->inputcategoryname;
        $category->save();

        return redirect('/category_table');
    }

    public function delete($id){
        $category = Category::find($id);
        $tags = Tag::where('category_id', $id)->get();
        $articles = Article::where('category_id', $id)->get();
        File::delete(public_path('CategoryImage/' . $category->image));
        $category->delete();

        foreach ( $tags as $tag ){
            $tag->delete();
        }
        foreach ( $articles as $article ){
            $article->delete();
        }

        return redirect('/category_table');
    }
}