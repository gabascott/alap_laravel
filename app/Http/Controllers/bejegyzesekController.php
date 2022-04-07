<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bejegyzesek;
use Illuminate\Support\Facades\DB;

class bejegyzesekController extends Controller
{
    public function bejegyzesek_listaz(){
        $bejegyzesek = DB::table('bejegyzesek')
        ->select('tevekenyseg_id', 'osztaly_id', 'allapot')
        ->distinct()
        ->get();
        return  $bejegyzesek;
    }
}
