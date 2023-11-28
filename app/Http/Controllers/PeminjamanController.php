<?php

namespace App\Http\Controllers;
use App\Models\Peminjaman;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public static function index(){

        return view('pinjaman/allPeminjaman',[
            "peminjamen" => Peminjaman::all()
        ]);
    }   

    public function show($id)
    {
        return view('pinjaman.detailpinjaman',[
            "peminjamen" => Peminjaman::findOrFail($id)
        ]);
    }
}
