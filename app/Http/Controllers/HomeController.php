<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Appartement;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('subCategories')->get();
        $appartements = Appartement::all(); // Récupère tous les appartements
        return view('welcome', compact('categories', 'appartements'));
    }
}
