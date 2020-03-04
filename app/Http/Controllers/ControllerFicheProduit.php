<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\DB;

class ControllerFicheProduit extends Controller
{
    public function viewFicheProduit($products) {

        return view('page/fiche-produit', ['catalogue' => $catalogue]);
    }
}
