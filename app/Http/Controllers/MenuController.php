<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Item;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $tableNumber = $request->query('meja');
        if ($tableNumber) {
            Session::put('tableNumber', $tableNumber);
        }
        $items = Item::where('is_active', 1)->orderBy('name', 'asc')->get();

        return view('customer.menu', compact('items', 'tableNumber'));
    }

    public function cart(){

        $cart = Session::get('cart');
        return view('customer.cart');
    }

    public function addToCart(Request $request){
        $menuId = $request->input('id');
        $menu = Item::find($menuId);

        if (!$menu) {
            return response()->json(['message' => 'Menu item not found'], 404);
        }
        $cart = Session::get('cart');

        if (isset($cart[$menuId])) {
            $cart[$menuId]['quantity'] += 1;
        } else {
            $cart[$menuId] = [
                'id' => $menu->id,
                'name' => $menu->name,
                'price' => $menu->price,
                'image' => $menu->img,
                'quantity' => 1,
            ];
        }

        Session::put('cart', $cart);

        return response()->json(['message' => 'Menu item added to cart successfully', 'cart' => $cart], 200);
    }
}
