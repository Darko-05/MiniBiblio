<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLivreRequest;
use App\Models\Livre;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Termwind\Components\Li;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $livres = Livre::all()->sortByDesc('created_at', 'DESC');

        return response()->json(
            $request->$livres
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivreRequest $request)
    {
        $livre = Livre::create($request->validated());

        return response()->json([
            'message' => 'Livre créer avec succès',
            'data' => $livre
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Livre $livre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $livre = Livre::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|max:255',
            'nombre_total_exemplaires' => 'required',
        ]);

        $livre->update($validated);

        return response()->json([
            'message' => 'Livre modifié avec succès',
            'data' => $livre
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        $livre->delete();

        return response()->json([
            'message' => 'Objet supprimé avec succès'
        ], 200);
    }
}
