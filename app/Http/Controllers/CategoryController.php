<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request){
        $messages = [
            'required'  => 'Harap Di Isi !',
            'unique'    => 'Sudah Terdaftar',
        ];
        $request->validate([
            'nama_category' =>['required','unique:categories,nama','max:20'],
        ],$messages); 
        //'unique:categories,nama' 
        //artinya mencari table category yang collumnnya nama
        $data = new Category;
        $data->nama = $request->nama_category;
        $data->save();
        return redirect()->back();
    }   
}
