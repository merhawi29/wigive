<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Fetch categories from the database
        $producted = Product::all();
        return view('products.index', compact('categories', 'producted'));
    }
    public function show()
    {

        $categories = Category::all(); // Fetch categories from the database
        $producted = Product::all();
        return view('products.action', compact('categories', 'producted'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'url' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $image = $request->file('url');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('Image'), $imageName);


        $product = Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'url' => $imageName,
        ]);
        return redirect()->route('products.index')->with('success', 'Product added successfully!');


        // return redirect()->back()->with('success', 'Catagory added successfully');
    }
}
