<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function store(Request $request){

        $messages = [
            'required'  => 'Harap Di Isi !',
            'unique'    => 'Sudah Terdaftar',
        ];
        $request->validate([
            'nama' =>['required','unique:sub_categories','max:20'],
        ],$messages); 

        $data = new SubCategory();
        $data->nama = $request->nama;
        $data->save();
        return redirect()->back();
     }   
}
