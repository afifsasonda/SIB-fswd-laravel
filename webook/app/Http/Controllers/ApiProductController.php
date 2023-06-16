<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    public function index(){
        $product =Product::get();

        return response()->json([
            'status'=>200,
            'message'=> 'Data berhasil diambil',
            'data' => $product,
        ]);
    }

    public function store(Request $request){
        // validate form
        $this->validate($request,[
            'nama' => 'required|min:3|max:50',
            'deskripsi'=> 'required|max:200',
            'harga' => 'required|integer',
            'file'=> 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $input = $request->all();

        if ($file = $request->file('file')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $input['file'] = "$profileImage";
        }

        Product::create($input)->all();

        return response()->json([
            'status' => 200,
            'message' => ' Data berhasil disimpan',
            'data' => $input,
        ]);
    }

    public function update(Request $request){
        $request->validate([
            'nama' => 'required|min:3|max:50',
            'deskripsi'=> 'required|max:200',
            'harga' => 'required|integer',
            'file'=> 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $product = Product::where('id', $request->id)->first();

        if ($file = $request->file('file')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $product['file'] = "$profileImage";
        }
        else{
            unset($product['file']);
        }

        $product->update([
            'file' => $profileImage
        ]);

        $product->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);
        
        return response()->json([
            'status' => 200,
            'message' => ' Data berhasil disimpan',
            'data' => $product,
        ]);

    }
    public function delete($id){
        $product = Product::find($id)->delete();
        return response()->json([
            'status'=>200,
            'message'=> 'Data berhasil dihapus',
            'data'=>$product
        ]);
    }
}
