<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\DB;

class ControllerFicheProduit extends Controller
{
    public function viewFicheProduit($id) {
        $products = Product::all()->where('id', $id);
        return view('page/fiche-produit', ['products' => $products]);
    }
}
