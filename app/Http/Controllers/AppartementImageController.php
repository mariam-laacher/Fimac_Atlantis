<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\AppartementImage;
use Illuminate\Http\Request;

class AppartementImageController extends Controller
{
    public function store(Request $request, Appartement $appartement)
    {
        $validated = $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image_path')->store('appartement_images', 'public');

        AppartementImage::create([
            'appartement_id' => $appartement->id,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('appartements.show', $appartement)->with('success', 'Image ajoutée avec succès!');
    }

    public function destroy(AppartementImage $appartementImage)
    {
        $appartementImage->delete();
        return back()->with('success', 'Image supprimée avec succès!');
    }
}
