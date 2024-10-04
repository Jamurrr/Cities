<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $selectedCity = session('selected_city', null);

        return view('index', compact('cities', 'selectedCity'));
    }

    public function selectCity($slug)
    {
        City::where('slug', $slug)->firstOrFail();
        session(['selected_city' => $slug]);

        return redirect()->route('index');
    }

    public function about()
    {
        return view('about');
    }

    public function news()
    {
        return view('news');
    }


}
