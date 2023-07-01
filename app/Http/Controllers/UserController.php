<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve all users from the database
        $users = User::all();
        // Return a view to display the users
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }
    
    public function add_product()
    {
        return view('users.add_product');
    }

    public function assign(Request $productName, Request $userName)
    {
        $user = User::where('name', $userName)->first();
        $product = Product::where('name', $productName)->first();
        if ($user == null){
            echo "Invalid user name";
            return;
        } 
        else if ($product == null){
            echo "Invalid product name";
            return;
        }
        $user->products()->save($product);
    }

    // public function show_user_products(){

    //     $products = $user->get_products();
    // }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        $user = new User;
        $user->name = $validatedData['name'];

        $user->save();


        return redirect('/');
    }
}
