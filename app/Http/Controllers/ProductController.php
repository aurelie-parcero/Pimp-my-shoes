<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function viewAccueilParNom(Product $products) {

        $products = Product::all()->sortByDesc('name');

        return view('page.liste-produit-nom')->with('products', $products);
    }

    public function viewAccueilPrixCroissant(Product $products) {

        $products = Product::all()->sortBy('price');

        return view('page.liste-produit-prix')->with('products', $products);
    }

    public function viewFicheProduit($id) {
        $products = Product::all()->where('id', $id);
        return view('page/fiche-produit', ['products' => $products]);
    }
}

