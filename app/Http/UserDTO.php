<?php

namespace App\Http;
use Illuminate\Support\Facades\Http;

class UserDTO
{
    public function signUpUser($userData)
    {
        $response = Http::post('http://localhost:5000/signup', $userData);
        return $response->json();
    }
    public function loginUser($userData)
    {
        $response = Http::post('http://localhost:5000/login', $userData);
        return $response->json();
    }
}
