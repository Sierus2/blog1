<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function getAll()
    {
        $animals = Animal::all();
        return $animals;
    }
    public function add(Request $request)
    {
        $animals = Animal::create($request->all());
        return 'Success';
    }
    public function get($id)
    {
        $animal = Animal::find($id);
        return $animal;
    }

    public function delete($id)
    {
        $animal = $this->get($id);
        $animal->delete();
        return 'Deleted Success';
    }

    public function edit($id, Request $request)
    {
        $animal = $this->get($id);
        $animal->fill($request->all())->save();
        return $animal;
    }
}
