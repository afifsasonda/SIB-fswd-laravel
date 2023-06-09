<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        // $user = User::all();

        // panggil ke method orders di model user
        $user = User::with('orders')->get();

        // dd($user);

        return view('user.user',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ubah nama file gambar dengan angka random
        $imageName = time().'.'.$request->avatar->extension();

        // upload file gambar ke folder avatar
        Storage::putFileAs('public/avatar',$request->file('avatar'),$imageName);

        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'roles'=>$request->roles,
            'avatar'=>$request,
            'alamat' =>$request->alamat,
            'password' =>$request->password,
        ]);

        return redirect('/user');
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
        $user = User::where('id',$id)->first();

        // passing data ke view
        return view('user.user_edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find($request->id)->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'roles'=>$request->roles,
            'alamat' =>$request->alamat,
            'password' =>$request->password
        ]);
        return redirect('/user');
    }

    public function delete($id){
        $user = User::find($id)->delete();
        return redirect('user');
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
