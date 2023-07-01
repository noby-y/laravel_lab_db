<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Retrieve all products from the database
        $products = Product::all();

        // Return a view to display the products
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => 'required|int',
        ]);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];

        $product->save();


        return redirect('/products');
    }
}
