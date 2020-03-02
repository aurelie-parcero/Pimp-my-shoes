<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ControllerPanier extends Controller
{
    public function viewPanier() {
        return view('page/panier');
    }
}
