<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion-UBUNTU</title>
    <link rel="stylesheet" href="{{asset("css/test2.css")}}" />
</head>
<body>
<div class="container">
    <div class="left" id="left">
        <div class="logo2">
            <img src="{{asset("asset/imgfond.png")}}" alt="ubuntu" />
            <h1>Connectez-vous,cher utilisateur</h1>
        </div>
        <div class="forms-wrap">
            <form method="POST" action="{{ url('/connexion') }}" class="sign-in-form">
                @csrf
                <div class="logo">
                    <img src="{{ asset('asset/Fichier2.png') }}" alt="ucac-icam" />
                </div>
                <!-- Entrer votre E-mail -->
                <div class="input-wrap">
                    <input id="email" name="email" type="email" required class="input-field"/>
                    <label>Entrer votre E-mail</label>
                </div>


                <!-- Confirmer votre Mot de passe -->
                <div class="input-wrap">
                    <input id="password" name="password" type="password" required class="input-field"/>
                    <label>Entrer votre Mot de passe</label>
                </div>

                <!-- button input -->
                <button type="submit" class="sign-btn">CONNEXION</button>
            </form>

            <p class="para">ou</p>
            <a href="{{url("/signup")}}"  class="dir_incrip">creez un compte</a>

        </div>
    </div>

    <!-- Javascript file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="{{asset("js/test-js.js")}}"></script>
</body>
</html>
