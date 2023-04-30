<?php

namespace App\Http;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class Boutique
{
    public function createProduct($userData)
    {
        $response = Http::post('http://localhost:5000/boutique', $userData);
        return $response->json();
    }
    public function createCart()
    {
        $response = Http::post('http://localhost:5000/boutique/panier');
        return $response->json();
    }
    public function selectCart()
    {
        $response = Http::get('http://localhost:5000/boutique/lastPanier');
        return $response->json();
    }
    public function getCartByUserId($id)
    {
        $response = Http::get('http://localhost:5000/boutique/panier/' . $id);
        return $response->json();
    }
    public function removeCartById($id)
    {
        $response = Http::delete('http://localhost:5000/boutique/panier/'. $id);
        return $response->json();
    }
    public function insertCart($cartData)
    {
//        $user = Session::get('user');
//        $token = $user[0]["token"];
////        $url = 'http://localhost:5000/boutique/insertCart';
////        $response = Http::withHeaders([
////            'Content-Type' => 'application/json',
////            'Authorization' => 'Bearer ' . $token
////        ])->post($url, $cartData);
//        // Instanciez un client GuzzleHTTP
//        $client = new Client();
//// Envoyez votre requête avec l'en-tête contenant votre token
//        $response = $client->post('http://localhost:5000/boutique/insertCart', [
//            'headers' => [
//                'Authorization' => 'Bearer ' . $token,
//                'Content-Type' => 'application/json',
//            ],
//            'json' => $cartData,
//        ]);
//// Traitez la réponse de votre requête
//        $responseBody = $response->getBody()->getContents();
        $response = Http::post('http://localhost:5000/boutique/insertCart', $cartData);
        return $response->json();
    }
    public function getProduitByCat($id)
    {
        $response = Http::post('http://localhost:5000/boutique/produits/categorie/' . $id);
        return $response->json();
    }
    public function show($id)
    {
        $response = Http::get('http://localhost:5000/boutique/produits/' . $id);
        return $response->json();
    }

    public function getPanierByUser($id)
    {
        $response = Http::get('http://localhost:5000/boutique/userPanier/' . $id);
        return $response->json();
    }
}
