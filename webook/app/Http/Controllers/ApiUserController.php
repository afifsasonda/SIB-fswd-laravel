<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    public function index(){
        $user = User::get();

        return response()->json([
            'status'=>200,
            'message' => 'Data berhasil diambil',
            'data'=> $user,
        ]);
    }
}
