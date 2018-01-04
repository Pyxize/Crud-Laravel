<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;

class ProductController extends Controller
{
    public function home(){
        $article = article::all();
        return view('home', ['article' => $article ]);
    }

    public function add(request $request){
        $this->validate($request, [
            'titre' => 'required',
            'texte' => 'required',
        ]);

        $article = new article;
        $article->titre = $request->input('titre');
        $article->texte = $request->input('texte');
        $article->save();
        return redirect('/')->with('info','Article enregistrer avec succes !');
    }

    public function update($id){
        $article = article::find($id);
        return view('update', ['article' => $article ]);
    }
    public function edit(Request $request, $id){
        $this->validate($request, [
            'titre' => 'required',
            'texte' => 'required',
        ]);
        $data = array(
            'titre' => $request->input('titre'),
            'texte' => $request->input('texte')
        );
        article::where('id', $id)->update($data);
        return redirect('/')->with('info','Article modifier avec succes !');
    }

    public function read($id){
        $article = article::find($id);
        return view('read', ['article' => $article ]);
    }

    public function delete($id){
        article::where('id', $id)->delete();
        return redirect('/')->with('info','Article supprimer avec succes !');
    }
}
