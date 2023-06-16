<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();

        return view('slider.slider',compact('slider'));
        // $slider = Slider::latest()->paginate(5);

        // return view('/slider',compact('slider'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.slider_create');
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
            'banner' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi'=> 'required|max:200'
        ]);

        $slider = $request->all();

        if ($banner = $request->file('banner')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $banner->getClientOriginalExtension();
            $banner->move($destinationPath, $profileImage);
            $slider['banner'] = "$profileImage";
        }

        Slider::create($slider)->all();

        return redirect('/slider')->with('Sukses!','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $slider = Slider::all();

        return view('welcome',compact('slider'));

        // Retrieve the product by its ID
        // $slider = Slider::findOrFail($id);

        // Retrieve a list of related products
        // $relatedSliders = Slider::where('banner', $slider->banner)
        //     ->where('id', '!=', $slider->id)
        //     ->take(4)
        //     ->get();

        // Pass the product and related products data to the landing page
        // return view('welcome', compact('slider', 'relatedSliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::where('id',$id)->first();

        return view('slider.slider_edit',compact('slider'));
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
            'banner'=> 'required|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi'=> 'required|max:200'
        ]);

        $slider = Slider::where('id', $request->id)->first();

        if ($file = $request->file('banner')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $slider['banner'] = "$profileImage";
        }
        else{
            unset($slider['banner']);
        }

        $slider->update([
            'banner' => $profileImage
        ]);

        $slider->update([
            'deskripsi'=> $request->deskripsi
        ]);

        return redirect('/slider')->with("Succes",'Product Updated Successfully');
    }

    public function delete($id){
        $slider = Slider::find($id)->delete();
        return redirect('/slider');
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
