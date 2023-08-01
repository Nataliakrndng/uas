<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function showHome()
    {
        $users = User::all();

        return view('home', compact('users'));
    }
}
