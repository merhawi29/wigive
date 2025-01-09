<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CatagoryController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        // dd($productId);
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found!');
        }

        $cart = session()->get('cart', []);
        $imageName = $product->url; // Default to the product's existing image
        $image = $request->file('url');

        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('Image'), $imageName);
        }
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price * $quantity,
                'url' => $imageName,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->route('products.index')->with('success', 'Product added to cart successfully!');
    }


    public function showCart()
    {

        $cart = session()->get('cart' , []);
        $parsedCart = [];
        if($cart != null){
            foreach($cart as $id => $item){
                $parsedCart[] = $item;
            }
        }


        $total = 0;

            if(!empty($parsedCart)){
                if($item['id'] != null){

                    $total += $item['price'] * $item['quantity'];
                }
            }




        return view('carts/index', compact('parsedCart' , 'total'));
    }


    public function removeFromCart($id)
    {

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully!');
    }
    public function discardCart()
    {
        session()->forget('cart');
        return redirect()->route('cart.index')->with('success', 'Cart discarded successfully!');
    }
    public function payment()
    {
        $cart = session()->get('cart' , []);
        $parsedCart = [];
        if($cart != null){
            foreach($cart as $id => $item){
                $parsedCart[] = $item;
            }
        }


        $total = 0;

            if(!empty($parsedCart)){
                if($item['id'] != null){

                    $total += $item['price'] * $item['quantity'];
                }
            }
            // dd($total);
        return view('carts.payment' , compact('parsedCart' , 'total'));
    }
}
