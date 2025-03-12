<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;

use App\Models\Appartement;
use App\Models\AppartementImage;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    public function index()
    {
        $appartements = Appartement::all();
        return view('admin.appartements.index', compact('appartements'));
    }

    public function create()
    {
        $subcategories = Subcategory::where('status', 'active')->get();
        return view('admin.appartements.create', compact('subcategories'));
    }

    public function store(Request $request)
    {
        // Validation des champs
        $validated = $request->validate([
            'sub_category_id' => 'required|exists:sub_categories,id',
            'niveau' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'surface' => 'required|numeric',
            'salon' => 'nullable|integer',
            'hall' => 'nullable|integer',
            'cuisine' => 'nullable|integer',
            'chambre_1' => 'nullable|integer',
            'chambre_2' => 'nullable|integer',
            'sdb' => 'nullable|integer',
            'wc' => 'nullable|integer',
            'terrasse' => 'nullable|boolean',
            'status' => 'required|in:active,inactive',
            'images' => 'nullable|array',  // On accepte une collection d'images
            'images.*' => 'mimes:jpeg,png,jpg|max:2048',  // Validation pour chaque image
        ]);

        // Création de l'appartement
        $appartement = Appartement::create([
            'sub_category_id' => $validated['sub_category_id'],
            'niveau' => $validated['niveau'],
            'designation' => $validated['designation'],
            'surface' => $validated['surface'],
            'salon' => $validated['salon'],
            'hall' => $validated['hall'],
            'cuisine' => $validated['cuisine'],
            'chambre_1' => $validated['chambre_1'],
            'chambre_2' => $validated['chambre_2'],
            'sdb' => $validated['sdb'],
            'wc' => $validated['wc'],
            'terrasse' => $validated['terrasse'],
            'status' => $validated['status'],
        ]);

        // Si des images sont envoyées, on les traite
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // On stocke l'image
                $imagePath = $image->store('appartement/images', 'public'); // On stocke dans 'public/appartements/images'

                // Sauvegarde de l'image dans la table `appartement_images` avec l'appartement associé
                $appartement->images()->create([
                    'image_path' => $imagePath,
                ]);
            }
        }

        // Redirection avec succès
        return redirect()->route('appartements.index')->with('success', 'Appartement créé avec succès!');
    }



    public function show(Appartement $appartement)
    {
        return view('admin.appartements.show', compact('appartement'));
    }

    public function edit(Appartement $appartement)
    {
        return view('admin.appartements.edit', compact('appartement'));
    }

    public function update(Request $request, Appartement $appartement)
    {
        $validated = $request->validate([
            'sub_category_id' => 'required|exists:sub_categories,id',
            'niveau' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'surface' => 'required|numeric',
            'salon' => 'nullable|integer',
            'hall' => 'nullable|integer',
            'cuisine' => 'nullable|integer',
            'chambre_1' => 'nullable|integer',
            'chambre_2' => 'nullable|integer',
            'sdb' => 'nullable|integer',
            'wc' => 'nullable|integer',
            'terrasse' => 'nullable|boolean',
            'status' => 'required|in:active,inactive',
        ]);

        $appartement->update($validated);

        return redirect()->route('appartements.index')->with('success', 'Appartement mis à jour avec succès!');
    }

    public function destroy(Appartement $appartement)
    {
        $appartement->delete();
        return redirect()->route('appartements.index')->with('success', 'Appartement supprimé avec succès!');
    }
}
