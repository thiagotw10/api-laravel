<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Dog as ModelsDog;

class DogController extends Controller
{
 
    public function index()
    {
        return ModelsDog::all();
    }

    
    public function store(Request $request)
    {
        ModelsDog::create($request->all());

        echo 'confirmado';
    }

  
    public function show($id)
    {
        return ModelsDog::findOrfail($id);
    }

    

   
    public function update(Request $request, $id)
    {
        $dog = ModelsDog::findOrfail($id);
        $dog->update($request->all());
    }

    public function destroy($id)
    {
        $dog = ModelsDog::findOrfail($id);
        $dog->delete();
    }
}
