<?php


namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdmin(Product $products)
    {
        $products = Product::all();
        return view('/page.admin', compact('products'));
    }

    public function insert()
    {
        $product = new Product();
        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->img_url = request('img_url');
        $product->save();

        return back();
    }

    public function update($id)
    {
        $product = Product::where('id', $id)->first();
        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->img_url = request('img_url');
        $product->save();
        return back();
    }

    public function delete($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();

        return back();
    }

    //test code pour upload une image
//    public function viewAdminPost()
//    {
//        $request->validate
//        ([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
//
//        $imageName = time().'.'.$request->image->extension();
//
//        $request->image->move(public_path('images/uploaded'), $imageName);
//
//        return back()
//            ->with('success','You have successfully upload a new product.')
//            ->with('image',$imageName);
//
//    }

}
