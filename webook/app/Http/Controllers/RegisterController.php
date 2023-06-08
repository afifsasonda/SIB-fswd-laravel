<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function index(){
        $user = User::all();
        return view('login.register');
    }

    public function store(Request $request){
        // ubah nama file gambar dengan angka random
        // $imageName = time().'.'.$request->avatar->extension();

        // upload file gambar ke folder avatar
        // Storage::putFileAs('public/avatar',$request->file('avatar'),$imageName);

        // $user = User::find($id);

        // $requestData =$request->all();
        // $fileName = time().$request->file('avatar')->getClientOriginalName();
        // $path = $request->file('avatar')->storeAs('avatar',$fileName,'public');
        // $requestData["avatar"] = '/storage/'.$path;
        // User::create($requestData);

        User::create([
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        // with maksudnya lempar
        return redirect('/')->with('success',' Data Berhasil dibuat!');
    }

}
