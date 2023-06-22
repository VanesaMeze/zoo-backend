<?php

namespace App\Http\Controllers;

use App\Services\AnimalService;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    private AnimalService $animalService;

    public function __construct(AnimalService $animalService)
    {
        $this->animalService = $animalService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->animalService->getAnimals();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->animalService->storeAnimal($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->animalService->getAnimal($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->animalService->editAnimal($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->animalService->removeAnimal($id);
    }
}