<?php

namespace App\Http\Controllers;
use App\Models\Booklits;

use Illuminate\Http\Request;

class BooklitsController extends Controller
{
    public static function index(){

        return view('booklits/all',[
            "booklits" => Booklits::all()
        ]);
    }   

    public function show($id)
    {
        return view('booklits.detail',[
            "booklist" => Booklits::findOrFail($id)
        ]);
    }
}
