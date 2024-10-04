<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        $city = City::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return response()->json($city, 201);
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return response()->json(null, 204);
    }
}
