<?php

namespace App\Services;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalService {
  
  public function getAnimals() {
    return Animal::all();
  }

  public function getAnimal($id) {
    return Animal::find($id);
  }

  public function storeAnimal(Request $request) {
    $request->validate([
      'name' => 'required|min:2|max:255',
      'type' => 'required|min:2|max:255',
      'habitat' => 'required|min:2|max:255',
    ]);

    $animal = new Animal;
    $animal->name = $request->name;
    $animal->type = $request->type;
    $animal->habitat = $request->habitat;
    $animal->rare = $request->rare;
    $animal->count_in_zoo = $request->count_in_zoo;
    $animal->favourite_food = $request->favourite_food;
    $animal->save();

    return $animal;
  }

  public function editAnimal(Request $request, $id) {
    $request->validate([
      'name' => 'required|min:2|max:255',
      'type' => 'required|min:2|max:255',
      'habitat' => 'required|min:2|max:255',
    ]);

    $animal = Animal::find($id);
    $animal->name = $request->name;
    $animal->type = $request->type;
    $animal->habitat = $request->habitat;
    $animal->rare = $request->rare;
    $animal->count_in_zoo = $request->count_in_zoo;
    $animal->favourite_food = $request->favourite_food;
    $animal->save();

    return $animal;
  }

  public function removeAnimal($id) {
    Animal::destroy($id);
  }
}