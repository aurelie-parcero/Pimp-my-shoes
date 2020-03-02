<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerAccueil extends Controller
{
    public function viewAccueil() {

        $catalogue = DB::select('select * from catalogue');
        return view('page/accueil', ['catalogue' => $catalogue]);
    }
}
