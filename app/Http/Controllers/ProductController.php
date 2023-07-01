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

    public function show($id)
    {
        // Retrieve the product with the given ID from the database
        $product = Product::find($id);

        // Return a view to display the product
        return view('products.show', compact('product'));
    }

    public function store(Request $request)
    {
        // Store a new product in the database based on the request data
        // ...

        // Redirect back to the index page or display a success message
        // ...
    }
}
