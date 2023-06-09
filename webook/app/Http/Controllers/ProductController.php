<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
// use App\Http\Controllers\storeAs;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product = [
        //     'laptop',
        //     'Tv',
        //     'Handphone',
        //     'Jam Tangan',
        //     'Baju'
        // ];
        $product = Product::all();

        return view('product.product',compact('product'));
    }

    public function productlist(){
        return view('product.productlist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.product_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate form
        // $this->validate($request,[
        //     'nama' => 'required|min:3|max:50',
        //     'deskripsi'=> 'required|max:100',
        //     'harga' => 'required|integer',
        //     'file'=> 'required|image|mimes:png,jpg,jpeg|max:2048'
        // ]);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|min:3|max:50',
            'deskripsi'=> 'required|max:100',
            'harga' => 'required|integer',
            'file'=> 'image|mimes:png,jpg,jpeg'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // upload image
        // $file = $request->file('file');
        // $file->storeAs('public/posts',$file->hashName());
        // $file = Storage::putFileAs('public/gambar', $request->file('file'),$file);
        if($request->hasFile('file')){
            $nama = $request->file('file');
            $fileNama = 'Product_' . time() . '.' . $nama->getClientOriginalExtension();
            $path = Storage::putFileAs('public/gambar', $request->file('file'),$fileNama);
        }

        // create produk
        Product::create([
            'nama' => $request -> nama,
            'deskripsi' => $request ->deskripsi,
            'harga' => $request->harga,
            // 'categories_id' =>$request->categories_id,
            'file'=>$fileNama
        ]);

        return redirect('/product')->with('Sukses!','Data berhasil disimpan');


        // notif ke user benar atau salah pada form yg diisi
        // if($validator->fails()){
        //     return back()->with('error', $validator->error());
        // }


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
        $product = Product::where('id',$id)->first();

        return view('product.product_edit',compact('product'));
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
        // validator
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|min:3|max:50',
            'deskripsi'=> 'required|max:100',
            'harga' => 'required|integer',
            'file'=> 'image|mimes:png,jpg,jpeg'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);

        }
        if($request->hasFile('file')){
            $nama = $request->file('file');
            $fileNama = 'Product_' . time() . '.' . $nama->getClientOriginalExtension();
            $path = Storage::putFileAs('public/gambar', $request->file('file'),$fileNama);
        }

        //upload image
        // $file = $request->file('file');
        // $file->storeAs('public/gambar',$file->hashName());


        $product = Product::find($request->id)->update([
            'nama' => $request -> nama,
            'deskripsi' => $request ->deskripsi,
            'harga' => $request->harga,
            'categories_id' =>$request->categories_id,
            'file'=>$fileNama
        ]);

        //delete old image
        Storage::delete('public/gambar/'.$product->file);

        return redirect('/product');
    }

    public function delete($id){
        $product = Product::find($id)->delete();
        return redirect('/product');
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
