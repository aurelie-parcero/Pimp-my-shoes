<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    public function viewPanier()
    {
        $cartitems = CartItem::all();
        return view('page/panier', ['cartitems' => $cartitems]);
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
        $user->cartItems()->sync([$id => ["quantity" => $previousQuantity + 1]]);
        $user->save();
        return redirect()->route('my-cart');
    }
}
