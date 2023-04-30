<?php

namespace App\Http\Controllers;
use App\Http\Boutique;
use App\Http\Manifestation;
use App\Http\UserDTO;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
        protected $UserDTO;
        protected $manifestation;
        protected $boutique;



    public function __construct(UserDTO $UserDTO, Manifestation $manifestation, Boutique $boutique)
    {
        $this->UserDTO = $UserDTO;
        $this->manifestation = $manifestation;
        $this->boutique = $boutique;

    }

    public function inscription(Request $request)
    {
        if ($request->input('localisation')=='Douala'){

            $userData = [
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ];

            $response = $this->UserDTO->signUpUser($userData);

            if ($response === null) {
                return redirect('/signup');
            }else if ($response[0]["message"] == "user created successfully"){
                return redirect('/logg');
            } else {
                return back()->withInput()->withErrors($response == 'FAIL');
            }
        } else {
            return view('redirection');
        }

    }
    public function connexion(Request $request)
    {

        $userData = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $response = $this->UserDTO->loginUser($userData);

        if ($response === null){
            return redirect('/logg');
        }
        else if ($response[0]["success"] === 1) {
            Session::forget('user');
            Session::put('user', $response);
//            if (!Session::has('user')) {
//                // Créer une nouvelle entrée 'user' dans la session
//                Session::put('user', $response);
//            }
            return redirect('/home');
        } else if($response[0]["success"] === 0){
            return redirect('/logg');
        }
        else {
            return back()->withInput()->withErrors($response == 'FAIL');
        }
    }
    public function deconnexion(Request $request)
    {
        Session::forget('user');
        return redirect('/home');
    }
}

