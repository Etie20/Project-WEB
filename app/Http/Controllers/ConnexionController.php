<?php

namespace App\Http\Controllers;

use App\Http\StudentDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConnexionController
{
    protected $studentDTO;

    public function __construct(StudentDTO $studentDTO)
    {
        $this->studentDTO = $studentDTO;
    }

    public function connexion(Request $request)
    {

            $userData = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ];

            $response = $this->studentDTO->loginStudent($userData);

            if ($response[0]["success"] === 1) {
                return redirect('/welcome');
            } else if($response[0]["success"] === 0){
                return redirect('/connexion');
            }
            else {
                return back()->withInput()->withErrors($response == 'FAIL');
            }
    }



}
