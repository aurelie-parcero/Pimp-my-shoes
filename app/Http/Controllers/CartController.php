<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class CartController extends Controller
{
    public function viewPanier() {
        return view('page/panier');
    }
}
