<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $categories = Category::with('subCategories')->get();
        return view('aboutus',compact('categories'));
    }
}
