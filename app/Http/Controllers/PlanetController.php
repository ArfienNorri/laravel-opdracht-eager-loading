<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::table('planets')->get();

        return view('planets.index', ['planets' => $planets]);
    }

    public function show($planet)
    {
        $planet = DB::table('planets')->where('id', $planet)->first();

        abort_if(!$planet, 404);

        return view('planets.show', ['planet' => $planet]);
    }
}
