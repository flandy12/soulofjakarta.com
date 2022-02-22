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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        // $data = Artikel::join('tb_kategori','tb_artikel.id','tb_kategori.id_kategori')
        // ->join('sub_kategoris','tb_artikel.idsubmenu','sub_kategoris.id_sub_kategori')
        // ->get(['tb_artikel.*', 'tb_kategori.nama_kategori','sub_kategoris.sub_name_kategori']);
        $kategori = ModelsKategori::all();
        $subkategori = SubKategori::all();
        // return dd($data);
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
        $message = [
            'required' => "Wajid Diisi !",
            'Image_Artikel.image'=>'File Yang Dimasukan Tidak Sesuai',
            'Image_Artikel.mimes'=>'Foto Harus Berupa (jpg,png,jpeg)',
        ];
        $this->validate($request,[
            'Judul' =>'required',
            'Artikel_Utama' =>'required',
            'Artikel_Body' =>'required',
            'Tagline' =>'required',
            'Tag' =>'required',
            'Tempat' =>'required',
            'Sumber_Gambar' =>'required',
            'Image_Artikel' =>'required|image|mimes:jpg,png,jpeg|max:2048',
        ],$message);
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
            'judul'=> $request->Judul,
            'idartikelpart'=> $request->kategori,
            'judul_seo' => $request->Judul,
            'penulis'=>Auth::user()->name,
            'hari' => $hari,
            'tanggal' => $tanggal ,
            'tanggalbuat' => $tanggalbuat,
            'bulan' => $nama_bln ,
            'jam' => $jam_sekarang,
            'lastposting' => $lastposting,
            'isiutama'=>$request->Artikel_Utama,
            'isi'=>$request->Artikel_Body,
            'tagline' => $request->Tagline,
            'tag' => $request->Tag,
            'tempat' => $request->Tempat, 
            'sumbergambar'=>$request->Sumber_Gambar,

            //  Storage LARAVEL
            $imagepath = $request->file('Image_Artikel'),
            $namafile = $imagepath->getClientOriginalName(),
            $path = $imagepath->storeAs('public/artikel-photos',$namafile),
            'gambar_besar'=> 'artikel-photos/'.$namafile,
            'gambar_kecil'=> 'artikel-photos/'.$namafile,

        ]);
        
        // if ($request->hasFile('image')) {
        //     $filenameWithExt = $request->file('image')->getClientOriginalExtension();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        //     $request->file('image')->move('storage/images', $fileNameToStore);

        // } else {
        //     $fileNameToStore = 'noimage.jpg';
        // }
        $data_input = new Artikel($data);
        $data_input->save();
        return redirect('artikel');
    }

    public function show($id)
    {   
        // $dbartikel = Artikel::find($id)->join('tb_kategori','tb_artikel.id','tb_kategori.id_kategori')
        //                                ->join('sub_kategoris','tb_artikel.idsubmenu','sub_kategoris.id_sub_kategori')
        //                                ->get(['tb_artikel.*', 'tb_kategori.*','sub_kategoris.sub_name_kategori']);
        $dbartikel = Artikel::find($id);
        $kategori = ModelsKategori::all();
        $subkategori = SubKategori::all();
        return view('admin.artikel-view',compact(['dbartikel','kategori','subkategori']));
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
         /** TIME Management */
         $artikel = Artikel::find($id);
        //  $data = Artikel::join('tb_kategori','tb_artikel.id','tb_kategori.id_kategori')
        //  ->join('sub_kategoris','tb_artikel.idsubmenu','sub_kategoris.id_sub_kategori')
        //  ->get(['tb_artikel.*', 'tb_kategori.nama_kategori','sub_kategoris.sub_name_kategori']);
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
             'idartikelpart'=> $request->kategori,
             'judul'=> $request->judul,
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
         ]);
        
         if(!$artikel->gambar_besar || $request->Image_Artikel){
            $message = [
                'required' => "Wajid Diisi !",
                'Image_Artikel.image'=>'Foto Harus Berupa (jpg,png,jpeg)',
            ];
            $this->validate($request,[
                'Image_Artikel' =>'required|file|image|max:2048',
            ],$message);

            // //Storage LARAVEL
            $imagepath = $request->file('Image_Artikel');
         
            $namafile = $imagepath->getClientOriginalName();
            $path = $imagepath->storeAs('public/artikel-photos',$namafile);
            $data['gambar_besar'] = 'artikel-photos/'.$namafile;
            $data['gambar_kecil'] = 'artikel-photos/'.$namafile;
            $artikel->update($data);
             return redirect('artikel')->with('status','Update Data ' .$artikel->judul);
         }
        
            $artikel->update($data);
            return redirect('artikel')->with('status','Update Data ' .$artikel->judul);
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {   
        Artikel::find($id)->delete();
        return redirect()->back();
    }
     /**
     * restore specific post
     *
     * @return void
     */
    public function restore($id)
    {
        Artikel::withTrashed()->find($id)->restore();
        return redirect()->back();
    }  
    
    public function destroy($id){
        $image = Artikel::onlyTrashed()->find($id);
        $old_image = Storage::disk('local')->delete('public/'.$image->gambar_besar);
        $image->forceDelete();
        return redirect()->back();
    }
    public function trash()
    {
        $artikel = Artikel::onlyTrashed()->get();
        return view('admin.trash.artikel-trash', ['artikel' => $artikel]);
    }  
}