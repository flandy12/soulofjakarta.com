<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbuser = User::all();
        return view('admin.user-page',compact('dbuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-user-page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' =>'required',
            'username' =>'required',
            'email' =>'required',
            'born' =>'required',
            'gender' =>'required',
            'password' =>'required',
            'profile_photo_path' =>'required|image|max:2048',
        ]);

        $data = ([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=>$request->email,
            'born'=>$request->born,
            'gender'=> $request->gender,
            'password'=> Hash::make($request->password),

            //  Storage LARAVEL
            $imagepath = $request->file('profile_photo_path'),
            $namafile = $imagepath->getClientOriginalName(),
            $path = $imagepath->storeAs('public/profile-photos',$namafile),
            'profile_photo_path'=> 'profile-photos/'.$namafile,
        ]);
        $Add_User = new User($data);
        //data model yang telah di input akan di simpan
        $Add_User->save();
        // return dd($Add_User);
        return redirect('user')->with('status','Berhasil Add User ' .$Add_User->username);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= User::all()->find($id);
        return view('admin.user-view',compact('user'));
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
    public function updateProfile(Request $request, $id)
    {
        $User_Update = User::find($id);

        $User_Update->update([
            //  Storage LARAVEL
            $imagepath = $request->file('Profile'),
            $namafile = $imagepath->getClientOriginalName(),
            $path = $imagepath->storeAs('public/profile-photos',$namafile),
                
            'profile_photo_path' => 'profile-photos/'.$namafile,
        ]);
       
        return redirect('user');
    }

    public function personalInformation (Request $request,$id)
    {
        $User_Update = User::find($id);

        $User_Update->update([
            'name'=> $request->FullName,
            'username'=> $request->Username,
            'email'=>$request->Email,
            'born'=>$request->Born,
            'level'=> $request->Level,
            'gender'=> $request->Gender,
        ]);
        
        return redirect('user')->with('status','Mengupdate User ' .$User_Update->username);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        $value =User::find($id);
        $value ->delete();
        return redirect('user')->with('hapus','Menghapus Data '.$value->username);
    }
}