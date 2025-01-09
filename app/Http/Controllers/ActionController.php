<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function showActionPage()
    {
        $categories = Category::all(); // Fetch categories from the database
        $products = Product::all(); // Fetch products from the database

        return view('products.action', compact('categories', 'products'));
    }

}
