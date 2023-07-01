<?php

namespace App\Http\Controllers;

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


    public function store(Request $request)
    {
        // Store a new user in the database based on the request data

        // Redirect back to the index page or display a success message
    }
}
