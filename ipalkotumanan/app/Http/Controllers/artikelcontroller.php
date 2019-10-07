<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\KategoriArtikel;

class artikelcontroller extends Controller
{
    public function index(){
        
        $listArtikel=Artikel::all(); 
        return view('artikel.index' ,compact('listArtikel'));
    
    }

    public function show($id){
        $Artikel=Artikel::find($id);
        return view('artikel.show' ,compact('Artikel'));
    }

    public function create(){
        $KategoriArtikel=KategoriArtikel::pluck('nama', 'id');

        return view('artikel.create',compact('KategoriArtikel'));
    }

    public function store(Request $request){
        $input= $request->all();
        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
}
