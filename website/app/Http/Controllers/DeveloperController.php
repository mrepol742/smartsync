<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DeveloperController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('developer');
    }

    public function req(Request $request, $username)
    {
        $user = User::where('username', $username)->first();
        if ($user) {
            return view("profile", ['user' => $user]);
        } 
        return view("errors.404");
    }
}
