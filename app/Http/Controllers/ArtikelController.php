<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori as ModelsKategori;
use App\Models\Menu;
use App\Models\SubKategori;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kategori;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbartikel = Artikel::all();
        return view('admin.artikel-page',compact('dbartikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $kategori = ModelsKategori::all();
        $subkategori = SubKategori::all();
        return view('admin.add-artikel-page',compact('kategori','subkategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /** TIME Management */

        $hari = now()->dayName;
        $tanggal_ambil=now()->day();
        $tanggal=now()->format('d/m/Y'); 
        $tanggalbuat=now()->format('m/Y'); 
        $nama_bln=now()->monthName; 
        $bulan_ambil=now()->format('n'); 
        $tahun=now()->year;
        $jam_sekarang = now()->format('H:i');
        $jam_ambil = date("Hi");
        $thnbln= $tahun.$bulan_ambil;
        $lastposting=$thnbln.$tanggal_ambil.$jam_ambil; 

        $data = ([
            'idmenu'=> $request->kategori,
            'idsubmenu'=> $request->submenu,
            'judul'=> $request->judul,
            'idartikelpart'=> $request->kategori,
            'judul_seo' => $request->judul,
            'penulis'=>Auth::user()->name,
            'hari' => $hari,
            'tanggal' => $tanggal ,
            'tanggalbuat' => $tanggalbuat,
            'bulan' => $nama_bln ,
            'jam' => $jam_sekarang,
            'lastposting' => $lastposting,
            'isiutama'=>$request->artikel_main,
            'isi'=>$request->artikel_isi,
            'tagline' => $request->tagline,
            'tag' => $request->tag,
            'tempat' => $request->tempat,    

            //  Storage LARAVEL
            $imagepath = $request->file('image_artikel'),
            $namafile = $imagepath->getClientOriginalName(),
            $path = $imagepath->storeAs('public/artikel-photos',$namafile),
            'gambar_besar'=> 'artikel-photos/'.$namafile,
            'gambar_kecil'=> 'artikel-photos/'.$namafile,

        ]);
        
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalExtension();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $request->file('image')->move('storage/images', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $data_input = new Artikel($data);
        $data_input->save();
        return redirect('artikel');
    }

    public function show($id)
    {   
        $dbartikel = Artikel::find($id);
        // $kategori = ModelsKategori::all();
        // $subkategori = SubKategori::all();
        return view('admin.artikel-view',compact('dbartikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}