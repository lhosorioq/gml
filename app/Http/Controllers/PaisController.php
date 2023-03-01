<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    
    public function all()
    {
        $client = new Client([
            'base_uri' => 'https://restcountries.com/v3.1/subregion/South America',
            'verify' => false,
            'timeout'  => 10.0,
        ]);
        $response = $client->request('GET', ''); // america
        return json_decode($response->getBody()->getContents());
    }
}
