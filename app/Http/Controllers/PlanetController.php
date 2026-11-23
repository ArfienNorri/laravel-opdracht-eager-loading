<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();

        return view('planets.index', ['planets' => $planets]);
    }

    public function show($planet)
    {
        $planet = Planet::find($planet);

        abort_if(!$planet, 404);

        return view('planets.show', ['planet' => $planet]);
    }
}
