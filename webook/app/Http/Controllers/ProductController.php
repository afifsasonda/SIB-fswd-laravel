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
        $products = Product::all();

        return view('product.product',[
            'products' => $products
        ]);
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
        $this->validate($request,[
            'nama' => 'required|min:3|max:50',
            'deskripsi'=> 'required|max:200',
            'harga' => 'required|integer',
            'file'=> 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $input = $request->all();

        // $input['file'] = $request->file('file')->store('assets/product','public');

        // $products = Product::create($input);

        if ($file = $request->file('file')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $input['file'] = "$profileImage";
        }

        Product::create($input)->all();

        return redirect('/product')->with('Sukses!','Data berhasil disimpan');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $product = Product::all();
        // $product = Product::where('id',$id)->first();
        // return view('welcome',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::where('id',$id)->first();

        return view('product.product_edit',compact('products'));
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
            'nama' => 'required|min:3|max:50',
            'deskripsi'=> 'required|max:200',
            'harga' => 'required|integer',
            'file'=> 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $products = Product::where('id', $request->id)->first();

        if ($file = $request->file('file')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $products['file'] = "$profileImage";
        }
        else{
            unset($products['file']);
        }

        $products->update([
            'file' => $profileImage
        ]);

        $products->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect('/product')->with("Succes",'Product Updated Successfully');
    }

    public function delete($id){
        $products = Product::find($id)->delete();
        return redirect('product');
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
