<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;

class HomeController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::all();  // Fetch all subcategories
        return view('welcome', compact('subCategories'));  // Pass to the view
    }
}
