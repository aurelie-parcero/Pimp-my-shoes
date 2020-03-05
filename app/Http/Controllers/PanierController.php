<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class PanierController extends Controller
{
    public function viewPanier() {
        return view('page/panier');
    }
}
