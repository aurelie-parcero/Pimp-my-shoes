<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ControllerFicheProduit extends Controller
{
    public function viewFicheProduit() {
        return view('page/fiche-produit');
    }
}
