<?php


namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function viewAdmin()
    {
        return view('/page.admin');
    }

    public function insert(Request $request)
    {

        $product = new Product();
        $product->name = \request('name');
        $product->description = \request('description');
        $product->price = \request('price');
        $product->img_url = \request('img_url');
        $product->save();

        return view('/page.admin');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
