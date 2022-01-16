<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\SubContent;
use App\Models\Article;

class SubContentController extends Controller
{
    public function index(){
        $subcontents = SubContent::all();
        return view('SubContent.Admin.index', compact('subcontents'));
    }

    public function create(){
        $articles = Article::all();
        return view('SubContent.Admin.create', compact('articles'));
    }

    public function store(Request $request){
        $subcontent = new SubContent;
        
        if( $request->hasfile('inputimage') ){
            $image = $request->file('inputimage')->getClientOriginalName();
            $request->file('inputimage')->move(public_path('SubContentImage'), $image);
            $subcontent->image = $image;
        }   

        $subcontent->article_id = $request->inputarticleid;
        $subcontent->title = $request->inputtitle;
        $subcontent->content = $request->inputcontent;
        $subcontent->save();

        return redirect('/subcontent_table');
    }

    public function edit($id){
        $articles = Article::all();
        $subcontent = SubContent::find($id);
        $categories = article::all();
        return view('SubContent.Admin.edit', compact('subcontent', 'categories', 'articles'));
    }

    public function update(Request $request, $id){
        
        $subcontent = SubContent::find($id);
        
        File::delete(public_path('SubContentImage/' . $subcontent->image));
        
        $image = $request->file('inputimage')->getClientOriginalName();
        $request->file('inputimage')->move(public_path('SubContentImage'), $image);
        
        $subcontent->article_id = $request->inputarticleid;
        $subcontent->title = $request->inputtitle;
        $subcontent->image = $image;
        $subcontent->content = $request->inputcontent;
        $subcontent->save();

        return redirect('/subcontent_table');
    }

    public function delete($id){
        $subcontent = SubContent::find($id);
        File::delete(public_path('SubContentImage/' . $subcontent->image));
        $subcontent->delete();

        return redirect('/subcontent_table');
    }
}