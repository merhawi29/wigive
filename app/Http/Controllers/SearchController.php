<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index() {
        $products = Product::all();
       return view('products.search', compact('products'));
   }

   public function search(Request $request)
   {
       $query = $request->input('query');

        if (!$query) {
            return redirect()->route('products.index');
        }

       $products = Product::where('name', 'LIKE', "%{$query}%")->get();
       return view('products.search', compact('products', 'query'));
   }
}