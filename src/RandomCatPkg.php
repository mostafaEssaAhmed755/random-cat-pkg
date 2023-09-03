<?php

namespace MostafaEssaAhmed755\RandomCatPkg;

// use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class RandomCatPkg
{
    public function getImg()
    {
        // $client = new Client();
        // $response = $client->request('GET', 'https://api.thecatapi.com/v1/images/search');

        // return $response->getBody();
        $response = Http::get('https://api.thecatapi.com/v1/images/search');

        return $response;
    }
}
