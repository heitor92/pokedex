<?php

namespace App\Http\Controllers\Pokedex;

use App\Http\Controllers\Controller;
use App\Models\Pokedex\Pokedex;

class PokedexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Página principal
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pokedex = new Pokedex();
        $pokemons = $pokedex->getPokemons();
        return view('pokedex.index', ['pokemons' => $pokemons]);
    }
}
