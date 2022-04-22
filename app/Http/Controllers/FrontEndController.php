<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use App\Models\Article;
use App\Models\Artikel;
use App\Models\SubKategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class FrontEndController extends Controller
{
    public function index(){
        $FeatureArticle = Article::first();
        $HeadArticle = Article::latest()->limit(5)->get();
        $trending = Article::latest()->limit(3)->get();
        $Chenel = Article::all();
        $Sport = Article::limit(2)->get();
        $Business = Article::latest()->limit(2)->get();
        $LatesNews = Article::limit(4)->get();
 
        return view('home',compact('FeatureArticle','HeadArticle','trending','Chenel','Sport','Business','LatesNews'));
    }   
    public function Data(){
        $HeadArticle = Article::latest()->limit(3)->get();   
        return response()->json([$HeadArticle],200);
    }
    
    public function HeadArtikel($id)
    {
        $data = Article::find($id);
        return  response()->json($data);
    }
    
    // Page Detail Article
    public function ShowArtikel($id){
        $data = Article::where('id',$id)->join('sub_categories','articles.id_sub_category', '=' ,'sub_categories.id_sub_category')->get();
        $penulis = User::where('name',$data[0]->penulis)->get();
        $profile = $penulis[0]->profile_photo_path;
        return view('detail-article',compact('data','penulis','profile'));

    }
    public function dataS(){
         $data =Article::all();

         $x = Arr::keyBy($data,'id');
        /* mengambil data berdasarkan tanggal 22
        *
        * $flights = Artikel::whereDay('created_at','22')->get();
        **/ 
        return dd($x);
        // $flights = $flights->reject(function ($flight) {
        //     return $flight->cancelled;
        // });
        // return dd($flights);
    }
}