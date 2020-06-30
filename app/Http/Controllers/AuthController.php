<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request)
    {
        // // dd($request);
        $data = [
            "nama_depan" => $request->first_name,
            "nama_belakang" => $request->first_name,
            "jenis kelamin" => $request->gender,
            "kebangsaan" => $request->kebangsaan,
            "bahasa" => $request->bahasa,
            "biodata" => $request->bio
        ];

        return view('/welcome', [
            'nama_depan' =>$request->first_name
        ]);
    }
}
