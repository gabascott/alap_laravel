<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tevekenyseg;
use Illuminate\Support\Facades\DB;

class tevekenysegController extends Controller
{
    public function tevekenyseg_listaz(){
        $tevekenyseg = DB::table('tevekenyseg')
        ->select('tevekenyseg_id', 'tevekenyseg_nev', 'pontszam')
        ->distinct()
        ->get();
        return  $tevekenyseg;
    }
}
