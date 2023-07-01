<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserController extends Controller
{
    // * GET ALL USERS
    public function index()
    {
        // Retrieve all users from the database
        $users = User::all();
        // Return a view to display the users
        return view('users.index', compact('users'));
    }


    // * CREATE NEW USER
    public function create()
    {
        return view('users.create');
    }
    
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
    

    // * ADD PRODUCT TO USER
    public function add_product()
    {   
        $users = User::all();
        $products = Product::all();
        return view('users.add_product', compact('users', 'products'));
    }

    public function assign(Request $request)
    {
        $productName = $request->input('productName');
        $userName = $request->input('userName');

        $user = User::where('name', $userName)->first();
        $product = Product::where('name', $productName)->first();
        if ($user == null) {
            echo "Invalid user name";
            return;
        } else if ($product == null) {
            echo "Invalid product name";
            return;
        }
        $user_id = $user->id;
        $product->user_id = $user_id;
        $product->update();

        return redirect('/');
    }

    // public function show_user_products(){

    //     $products = $user->get_products();
    // }


}
