<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPropertiesRequest;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(SearchPropertiesRequest $request)
    {
        $query = Property::query();
        if ($request->validated('price')) {
            $query = $query->where('price','<=', $request->validated('price'));
        }

        if ($request->validated('area')) {
            $query = $query->where('area','>=', $request->validated('area'));
        }
       
        return view('index',[
            'properties' => $query->paginate(16),
            'input' => $request->validated()
        ]);
    }

    public function show(string $slug, Property $property){

    }
}
