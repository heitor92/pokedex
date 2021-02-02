<?php

namespace App\Http\Controllers;

use Exception;
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
     * 
     */
    public function index()
    {
        /*
        $client =  new Client([
            'base_uri' => 'https://pokeapi.co/api/v2/pokedex/1/'
        ]);
        $response = $client->request('GET');
        print_r($response->getBody()->getContents());
        */
        $response = Http::get('https://pokeapi.co/api/v2/pokedex/1/');
        var_dump($response->json());
        return view('pokedex.index');
    }
}
