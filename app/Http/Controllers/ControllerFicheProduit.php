<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerFicheProduit extends Controller
{
    public function viewFicheProduit($id) {
        $catalogue = DB::select('select * from catalogue where id = :id', ['id' => $id]);
        return view('page/fiche-produit', ['catalogue' => $catalogue]);
    }
}
