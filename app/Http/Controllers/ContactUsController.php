<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $categories = Category::with('subCategories')->get();
        return view('contactus',compact('categories'));
    }
}
