<?php

namespace App\Http\Controllers;

use App\Http\Manifestation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManifestationController
{
    protected $manifestation;

    public function __construct(Manifestation $manifestation)
    {
        $this->manifestation = $manifestation;
    }

    public function createManif(Request $request)
    {
        if ($request->hasFile('image')){
            // Récupérer l'image téléchargée
            $path = $request->file('image')->store('public/asset');
            // Récupérez l'URL de l'image
            $filename = basename($path);
            $userData = [
                'nom' => $request->input('nom'),
                'description' => $request->input('description'),
                'image' => $filename,
                'date' => $request->input('date')
            ];
            foreach ($userData as $data){
                echo $data;
            }
        }

        $response = $this->manifestation->createManif($userData);

        if ($response[0]["message"] === "created successfully") {
            return redirect('/manifestations');
        } else if($response[0]["message"] === "failed to created manifestation"){
            return redirect('/postmanif');
        }
        else {
            return back()->withInput()->withErrors($response == 'FAIL');
        }

    }
    public function inscrireManifestation(Request $request){
        $id_etudiant = $request->input('id_etudiant');
        $id_manif = $request->input('id_manif');

        $userData = [
            'id_etudiant' => $id_etudiant,
            'id_manif' => $id_manif
        ];

        $response = $this->manifestation->inscrireManif($userData);

        if (!$response){
            return redirect('/home');
        }else{
            return redirect('/manifestations');
        }
    }
    public function createIdea(Request $request)
    {
        if ($request->hasFile('image')){
            // Récupérer l'image téléchargée
            $path = $request->file('image')->store('public/asset');
            // Récupérez l'URL de l'image
            $filename = basename($path);
            $ideeData = [
                'id' => $request->input('id'),
                'nom' => $request->input('nom'),
                'description' => $request->input('description'),
                'image' => $filename,
                'date' => $request->input('date')
            ];
            foreach ($ideeData as $data){
                echo $data;
            }
        }

        $response = $this->manifestation->createIdee($ideeData);

        if ($response[0]["message"] === "created successfully") {
            return redirect('/idee');
        } else if($response[0]["message"] === "failed to created manifestation"){
            return redirect('/postidee');
        }
        else {
            return back()->withInput()->withErrors($response == 'FAIL');
        }

    }
    public function showManif($id)
    {
        $manifest = json_decode(file_get_contents("http://localhost:5000/manifestation/$id"));

        // Afficher la vue avec les informations du produit
        return view('manifestation', ['manifest' => $manifest[0]]);
    }
    public function showIdea($id)
    {
        $ideas = json_decode(file_get_contents("http://localhost:5000/manifestation/idea/$id"));

        // Afficher la vue avec les informations du produit
        return view('idea', ['ideas' => $ideas[0]]);
    }
}
