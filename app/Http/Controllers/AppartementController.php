<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Appartement;
use App\Models\SubCategory;

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
            'images' => 'nullable|array',
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
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('appartement'), $imageName);
                if (!file_exists(public_path('appartement/' . $imageName))) {
                    dd('Erreur : Image non enregistrée');
                }
                $appartement->images()->create([
                    'image_path' => 'appartement/' . $imageName,
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
