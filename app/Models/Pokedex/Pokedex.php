<?php

namespace App\Models\Pokedex;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Pokedex extends Model
{
    /**
     *  configuração para consumir a api com Guzzle
     *
     * @var string
     */
    private $baseURL;

    public function __construct()
    {
        $this->baseURL = 'https://pokeapi.co/api/v2/pokedex/1/';
    }

    /**
    * Consome a api
    * 
    * @return mixed
    */
    public function fetch()
    {
        $response = $response = Http::get($this->baseURL);
        return $response->json();
    }
}
