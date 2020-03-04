<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Product;

class ControllerAccueil extends Controller
{
    public function viewAccueil(Product $products) {
        $products = Product::all();
        return view('page/accueil')->with('products', $products);
    }

    public function viewByName(Product $products) {

        $products = Product::all()->sortByDESC('name');
        return view('page/accueil')->with('products', $products);
    }

    public function viewByPrice(Product $products) {
        $products = Product::all()->sortBy('price');
        return view('page/accueil')->with('products', $products);
    }
}
