<?php

namespace App\Http\Controllers;

use App\Http\Boutique;
use App\Http\Manifestation;
use App\Http\StudentDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BoutiqueController
{
    protected $boutique;

    public function __construct(Boutique $boutique)
    {
        $this->boutique = $boutique;
    }
    public function createProduct(Request $request)
    {

        if ($request->hasFile('image')){
            $path = $request->file('image')->store('public/asset');
            // Récupérez l'URL de l'image
            $url = Storage::url($path);


            $productData = [
                'categorie' => $request->input('categorie'),
                'nom' => $request->input('nom'),
                'description' => $request->input('description'),
                'image' => $url,
                'prix' => floatval($request->input('prix'))
            ];
            $response = $this->boutique->createProduct($productData);

            if (isset($response[0]["message"])) {
                // Accéder à l'élément du tableau
                $valeur = $response[0]["message"];
            } else {
                $valeur = null;
            }
            if ($valeur === "created successfully") {
                return redirect('/produits');
            } else if($valeur === "failed to created product"){
                return redirect('/postProd');
            }
        }
    }
    public function getProduit(){
        // Appeler l'API Node.js
        $api_url = 'http://localhost:5000/boutique/produits';
        $products_json = file_get_contents($api_url);

        // Convertir les données JSON en tableau PHP
        $products_array = json_decode($products_json, true);

        // Passer le tableau à la vue Laravel pour l'afficher
        return view('produits', ['products' => $products_array]);
    }
    public function index(Request $request)
    {
        // Filtrer les produits en fonction des critères de recherche
        if ($request->has('categorie')) {
            $categorie = $request->input('categorie');
//            $produits = $produits->where('id_categorie', '=', $request->categorie);
        }

        // Appeler l'API Node.js
        $api_url = 'http://localhost:5000/boutique/produits/categorie/' . $categorie;
        $products_json = file_get_contents($api_url);

        // Convertir les données JSON en tableau PHP
        $products_array = json_decode($products_json, true);


        return view('produits', ['products' => $products_array]);
    }
    public function insertPanier(Request $request) {
        $id_etudiant = $request->input('idEtudiant');
        $id_produit = $request->input('idProduit');
        $id_panierAll = "";
        $id_panier = "";

        if ($this->boutique->getCartByUserId($id_etudiant) === []){
            $this->boutique->createCart();
            $id_panierAll = $this->boutique->selectCart();
            $id_panier = $id_panierAll[0]["MAX(id_panier)"];
        }else
        {
            $id_panierAll = $this->boutique->getCartByUserId($id_etudiant);
            $id_panier = $id_panierAll[0]["id_panier"];
        }
        $prix = floatval($request->input('prix'));
        $quantite = $request->input('quantite');
        $prixTotal = $prix * $quantite;
        $data = [
            'prixTotal' => $prixTotal,
            'id_etudiant' => $id_etudiant,
            'id_produit' => $id_produit,
            'quantite' => $quantite,
            'id_panier' => $id_panier
        ];
        $response = $this->boutique->insertCart($data);
        return redirect('/produits');
    }
    public function show($id)
    {
        $product = json_decode(file_get_contents("http://localhost:5000/boutique/produits/$id"));

        // Afficher la vue avec les informations du produit
        return view('produit', ['product' => $product[0]]);
    }
    public function getPanierByUserId()
    {
        $id = session()->get('user');
        $idU = $id[0]["id"];
        $product = json_decode(file_get_contents("http://localhost:5000/boutique/userPanier/$idU"));
        // Appeler l'API Node.js
        $api_url = 'http://localhost:5000/boutique/produits';
        $products_json = file_get_contents($api_url);

        // Convertir les données JSON en tableau PHP
        $products_array = json_decode($products_json, true);
        // Afficher la vue avec les informations du produit
        return view('panier', ['products' => $product, 'productInfo' => $products_array]);
    }
}
