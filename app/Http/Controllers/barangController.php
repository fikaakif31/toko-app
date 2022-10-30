<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang_model;

class barangController extends Controller
{
    //
    public function gethome (){
        $results = barang_model::all();
        return view ('barang.index', ["barang" => $results]);
    }
    public function getView ($id){
        $results = barang_model::where('id',$id)->get();
        return view ('barang.viewdetail', ["barang" => $results]);
    }
}
