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
        // $user = User::all();

        // panggil ke method orders di model user
        // $user = User::with('orders')->get();
        $user = User::all();

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
        // $imageName = time().'.'.$request->avatar->extension();

        // upload file gambar ke folder avatar
        // Storage::putFileAs('public/avatar',$request->file('avatar'),$imageName);

        $this->validate($request,[
            'name' => 'required|min:3|max:20',
            'email' => 'required',
            'roles' => 'required',
            'avatar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'alamat' => 'required|max:200',
            'password' => 'required|min:6|max:15'
        ]);
        $user = $request->all();
        if ($avatar = $request->file('avatar')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
            $avatar->move($destinationPath, $profileImage);
            $user['avatar'] = "$profileImage";
        }

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'roles'=>$request->roles,
            'avatar'=>$request->avatar,
            'alamat'=>$request->alamat,
            'password'=>Hash::make($request->password)
        ]);



        return redirect('/user')->with('Sukses', ' User Berhasil disimpan');
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
        $request->validate([
            'name' => 'required',
            // 'email' => 'required',
            'roles' => 'required',
            'avatar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'alamat' => 'required|max:200',
            // 'password' => 'required|min:6|max:15'
        ]);

        $user = User::where('id', $request->id)->first();

        if ($file = $request->file('avatar')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $user['avatar'] = "$profileImage";
        }
        else{
            unset($user['avatar']);
        }

        $user->update([
            'avatar' => $profileImage
        ]);

        $user->update([
            'name'=>$request->name,
            // 'email'=>$request->email,
            'roles'=>$request->roles,
            // 'avatar'=>$request->avatar,
            'alamat'=>$request->alamat,
            // 'password'=>Hash::make($request->password)
        ]);

        return redirect('/user')->with("Succes",'User Updated Successfully');
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
