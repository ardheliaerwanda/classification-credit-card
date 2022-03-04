<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Simulasi;
use DB;

class ResultController extends Controller
{
    public function index()
    {
        $simulasi = Simulasi::all()->last()->TARGET;
        return view ('result.index',['simulasi' => $simulasi]);
    }
}
