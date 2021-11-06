<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produksi::with('lokasi')->paginate(10);
        return view('index' , ['data' => $data]);
    }

   
}
