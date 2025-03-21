<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class LocalisationController extends Controller
{
    public function index()
    {
        $categories = Category::with('subCategories')->get();
        return view('localisation',compact('categories'));
    }
}
