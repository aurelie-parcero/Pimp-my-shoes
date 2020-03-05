<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\DB;

class AccueilController extends Controller
{
    public function viewAccueilParNom(Product $products) {

        $products = Product::all()->sortByDesc('produit');

        return view('page.liste-produit-nom')->with('products', $products);
    }

    public function viewAccueilPrixCroissant(Product $products) {

        $products = Product::all()->sortBy('prix');

        return view('page.liste-produit-prix')->with('products', $products);
    }
}
