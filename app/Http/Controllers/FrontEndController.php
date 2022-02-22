<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FrontEndController extends Controller
{
    public function index(){
        $artikel = Artikel::latest()->limit(4)->get();
        $mainContent = Artikel::latest()->limit(1)->get();
        $trending = Artikel::latest()->limit(3)->get();
        return view('index',compact('mainContent','artikel','trending'));
    }   
    public function HeadArtikel($id)
    {
        $data = Artikel::find($id);
        return  response()->json($data);
    }
    public function all(){
        $artikel = Artikel::all();
        return $artikel->judul;
    }
}
