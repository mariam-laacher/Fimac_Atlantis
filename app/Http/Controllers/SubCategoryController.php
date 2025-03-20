<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::with('category')->get();
        return view('admin.sub_categories.index', compact('subCategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.sub_categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('sub_categorie'), $imageName);
            $validated['image'] = 'sub_categorie/' . $imageName;
        }

        SubCategory::create($validated);

        return redirect()->route('sub_categories.index')->with('success', 'Sous-catégorie créée avec succès.');
    }

    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.sub_categories.edit', compact('subCategory', 'categories'));
    }




    public function update(Request $request, SubCategory $subCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($subCategory->image && file_exists(public_path($subCategory->image))) {
                unlink(public_path($subCategory->image));
            }

            // Enregistrer la nouvelle image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('sub_categorie'), $imageName);
            $validated['image'] = 'sub_categorie/' . $imageName;
        }


        $subCategory->update($validated);

        return redirect()->route('sub_categories.index')->with('success', 'Sous-catégorie mise à jour avec succès.');
    }


    public function destroy(SubCategory $subCategory)
    {
        if ($subCategory->image && file_exists(public_path($subCategory->image))) {
            unlink(public_path($subCategory->image));
        }

        $subCategory->delete();

        return redirect()->route('sub_categories.index')->with('success', 'Sous-catégorie supprimée avec succès.');
    }

    public function show($subCategoryName)
    {
        $subCategoryName = str_replace(['+', '_'], ' ', urldecode($subCategoryName));
        $subCategory = SubCategory::where('name', $subCategoryName)->firstOrFail();
        $apartments = Appartement::where('sub_category_id', $subCategory->id)->paginate(10);
        return view('residence.show', compact('subCategory', 'apartments'));
    }
}
