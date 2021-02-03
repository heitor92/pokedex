<?php

namespace App\Http\Controllers\Pokedex;

use App\Http\Controllers\Controller;
use App\Models\Pokedex\Pokedex;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

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
        $pokedex->fetch();
        return view('pokedex.index');
    }
}
