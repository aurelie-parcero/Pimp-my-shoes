<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerAccueil extends Controller
{
    public function viewAccueil() {

        $catalogue = DB::table('catalogue')->select('produit')->orderBy('produit');
        return view('page/accueil', 'catalogue');
    }
}
