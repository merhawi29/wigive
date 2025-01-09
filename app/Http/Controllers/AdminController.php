<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {


        return view('admin.home');

    }
    public function show()
    {
        $producted = Product::all();
        return view('admin.product-index' , compact('producted'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'name' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ]);

        if ($request->hasFile('url')) {
            $image = $request->file('url');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('Image'), $imageName);
        } else {
            return redirect()->back()->with('error', 'Image upload failed.');
        }

        Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'url' => $imageName,
        ]);

        return redirect()->route('product')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product-edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ]);

        $product = Product::find($id);

        if ($request->hasFile('url')) {
            $request->validate([
                'url' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);
            $image = $request->file('url');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('Image'), $imageName);
            $product->url = $imageName;
        }

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('product')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product')->with('success', 'Product deleted successfully!');
    }
}
