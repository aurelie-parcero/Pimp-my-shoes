<?php


namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdmin()
    {
        return view('/page.admin');
    }

    public function insert()
    {
        $product = new Product();
        $name = \request('name');
        $description = \request('description');
        $price = request('price');
        $img_url = request('img_url');
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->img_url = $img_url;
        $product->save();

        return back();
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
