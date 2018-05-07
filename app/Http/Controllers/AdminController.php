<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }

    public function show(){
        $articles=articles::All();
        return view('articles', compact('articles'));
    }

    public function create(){
        return view('CreateArticles');
    }

    public function store(Request $request){
        articles::create([
            'title' => $request['title'],
            'content' => $request['content'],
        ]);
        return redirect('admin/show');
    }

    public function edit($id){
        $article=articles::find($id);
        return view('editArticles', compact('article'));
    }

    public function update($id, Request $request){
        $article=articles::find($id);
        $article->fill($request->all());
        $article->save();
        return redirect('admin/show');
    }

    public function destroy(Request $request){
        articles::destroy($request['id']);
        return redirect('admin/show');
    }

}
