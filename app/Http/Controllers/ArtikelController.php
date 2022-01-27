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
            'idmenu'=> $request->Menu,
            'idartikelpart' => $request->SubKAtegori,
            'judul'=> $request->Judul,
            'judul_seo' => $request->Seo,
            'penulis'=>Auth::user()->name,
            'hari' => $hari,
            'tanggal' => $tanggal ,
            'tanggalbuat' => $tanggalbuat ,
            'bulan' => $nama_bln ,
            'jam' => $jam_sekarang,
            'last_posting' => $lastposting,
            // 'name'=> $request->FullName,
            // 'username'=> $request->Username,
            // 'email'=>$request->Email,
            // 'born'=>$request->Born,
            // 'level'=> $request->Level,
            // 'gender'=> $request->Gender,
            // 'password'=> Hash::make($request->Password),

            // //  Storage LARAVEL
            // $imagepath = $request->file('Profile'),
            // $namafile = $imagepath->getClientOriginalName(),
            // $path = $imagepath->storeAs('public/profile-photos',$namafile),
            // 'profile_photo_path'=> 'profile-photos/'.$namafile,
        ]);
        return dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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