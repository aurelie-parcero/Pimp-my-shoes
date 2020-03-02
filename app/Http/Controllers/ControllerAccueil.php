<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ControllerAccueil extends Controller
{
    public function viewAccueil() {
        return view('page/accueil');
    }
}
