<?php

namespace App\Models\Pokedex;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Pokedex extends Model
{
    /**
     *  URL base
     *
     * @var string
     */
    private $baseURL;

    /**
     *  endpoint
     *
     * @var string
     */
    private $endPoint;

    /**
     *  id ou nome do recurso 
     *
     * @var string
     */
    private $resource;


    public function __construct(
        string $baseURL = 'https://pokeapi.co/api/v2',
        string $endPoint = 'pokedex',
        string $resource = '1'
    ) {
        $this->baseURL = $baseURL;
        $this->endPoint = $endPoint;
        $this->resource = $resource;
    }

    /**
     * Consome a api
     * 
     * @return mixed
     */
    private function fetch()
    {
        $response = $response = Http::get($this->getURL());
        return $response->json();
    }

    /**
     * Retorna a URL
     * 
     * @return string
     */
    private function getURL()
    {
        return "{$this->baseURL}/{$this->endPoint}/{$this->resource}"; 
    }

    /**
     * Retorna a todos os pokémons
     * 
     * @return array
     */
    public function getPokemons()
    {
        $imageFront = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/';
        $arrayPokemons = $this->fetch()['pokemon_entries'];
        $pokemons = [];
        $pokemon = [];
        foreach($arrayPokemons as $arPokemon) {
            $pokemon['id_pokemon'] = $arPokemon['entry_number'];
            $pokemon['name'] = $arPokemon['pokemon_species']['name'];
            $pokemon['img_front'] = $imageFront . $pokemon['id_pokemon'] . '.png';
            $pokemons[] = $pokemon;
        }
        return $pokemons;
    }
}
