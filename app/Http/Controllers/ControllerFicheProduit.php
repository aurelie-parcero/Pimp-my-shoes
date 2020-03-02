<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerFicheProduit extends Controller
{
    public function viewFicheProduit() {
         $catalogue = DB::select('select * from catalogue');
        return view('page/fiche-produit',['catalogue' => $catalogue]);
    }
}
