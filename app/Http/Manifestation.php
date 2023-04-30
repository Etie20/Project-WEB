<?php

namespace App\Http;

use Illuminate\Support\Facades\Http;

class Manifestation
{
    public function createManif($userData)
    {
        $response = Http::post('http://localhost:5000/manifestation/add', $userData);
        return $response->json();
    }
    public function createIdee($userIdea)
    {
        $response = Http::post('http://localhost:5000/manifestation/idea', $userIdea);
        return $response->json();
    }
    public function inscrireManif($userData){
        $response = Http::post('http://localhost:5000/manifestation/inscrireManif', $userData);
        return $response->json();
    }

}
