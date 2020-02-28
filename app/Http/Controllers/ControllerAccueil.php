<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ControllerAccueil
{
    public function viewAccueil() {
        return view('page/accueil');
    }
}
