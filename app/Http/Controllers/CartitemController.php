<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;

class CartitemController extends Controller
{
    public function viewPanier()
    {
        return view('page/panier');
    }

    public function insertItem($id)
    {
        $user = Auth::user();
        $previousQuantity = 0;
        foreach ($user->cartitems as $product) {
            if ($product->id == $id) {
                $previousQuantity = $product->pivot->quantity;
                break;
            }
        }
        $user->cartitems()->sync([$id => ["quantity" => $previousQuantity + 1]]);
        $user->save();
        return redirect()->route('my-cart');
    }
}
