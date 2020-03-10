<?php


namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Product;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct() {
        $this->middleware('is_admin');
    }

    public function viewAdmin()
    {
        $products = Product::all();
        $user = auth()->user();
        return view('/page.admin', ['products' => $products, 'user' => $user]);
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
