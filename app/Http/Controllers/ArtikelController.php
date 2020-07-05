<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index(){
    	$artikel = ArtikelModel::get_all();
    	return view('layouts.index',compact('artikel'));
    }
    public function create(){
    	return view('layouts.form');
    }
    public function store(Request $request){
	   	$data = $request->all();
	   	unset($data["_token"]);
	   	$artikel = ArtikelModel::save([
            'judul'=>($request->judul),
            'isi'=>($request->isi),
            'slug'=>Str::slug($request->judul),
            'tag'=>($request->tag),
        ]);
	   	if($artikel){
	   		return redirect('/artikel');
	   	}
    }
    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('layouts.show', compact('artikel'));
    }
     public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('layouts.edit', compact('artikel'));
    }
    public function update($id, Request $request){
        $artikel = ArtikelModel::update($id,[
            'judul'=>($request->judul),
            'isi'=>($request->isi),
            'slug'=>Str::slug($request->judul),
            'tag'=>($request->tag),
        ]);
        return redirect('/artikel');
    }
    public function destroy($id){
        $deleted = ArtikelModel::destroy($id);
        return redirect('/artikel'); 
    }
}
