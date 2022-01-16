<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tag;
use App\Models\Category;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('Tag.Admin.index', compact('tags'));
    }

    public function create(){
        $categories = Category::all();
        return view('Tag.Admin.create', compact('categories'));
    }

    public function store(Request $request){
        $tag = new Tag;
        $tag->category_id = $request->inputcategoryid;
        $tag->tag = $request->inputtag;
        $tag->save();

        return redirect('/tag_table');
    }

    public function edit($id){
        $tag = Tag::find($id);
        $categories = Category::all();
        return view('Tag.Admin.edit', compact('tag', 'categories'));
    }

    public function update(Request $request, $id){
        $tag = Tag::find($id);
        $tag->category_id = $request->inputcategoryid;
        $tag->tag = $request->inputtag;
        $tag->save();

        return redirect('/tag_table');
    }

    public function delete($id){
        $tag = Tag::find($id);
        $tag->delete();

        return redirect('/tag_table');
    }
}