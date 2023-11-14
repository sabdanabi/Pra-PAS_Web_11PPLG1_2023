<?php

namespace App\Http\Controllers;
use App\Models\Guardlits;

use Illuminate\Http\Request;

class GuardlitsController extends Controller
{
    public static function index(){

        return view('guardlist/allguardlits',[
            "guardlits" => Guardlits::all()
        ]);
    }   

    public function show($id)
    {
        return view('guardlist.detailguard',[
            "guardlits" => Guardlits::findOrFail($id)
        ]);
    }
}
