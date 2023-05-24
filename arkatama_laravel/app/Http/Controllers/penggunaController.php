<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penggunaController extends Controller
{
    public function pengguna(){
        // ambil data table Users
        $datapengguna = DB::table('users')->get();

        // kirim data users ke view index
        return view('user',['users' => $datapengguna]);

    }
}
