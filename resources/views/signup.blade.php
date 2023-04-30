<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup-UBUNTU</title>
    <link rel="stylesheet" href="{{asset("css/test2.css")}}" />
</head>
<body>
<div class="container">
    <div class="left" id="left">
        <div class="logo2">
            <img src="{{asset("asset/imgfond.png")}}" alt="ubuntu" />
            <h1>Bienvenue ! cher utilisateur,</h1>
        </div>
        <div class="forms-wrap">
            <form method="POST" action="{{ url('/inscription') }}" class="sign-in-form" id="monFormulaire">
                @csrf
                <div class="logo">
                    <img src="{{ asset('asset/Fichier2.png') }}" alt="ucac-icam" />

                </div>
                <!-- Entrer votre Nom d'Utilisateur-->
                <div class="actual-form">
                    <div class="input-wrap">
                        <input
                            name="username"
                            type="text"
                            id="username"
                            class="input-field"
                            required
                        />
                        <label>Entrer votre Username</label>
                    </div>

                    <!-- Entrer votre E-mail -->
                    <div class="input-wrap">
                        <input
                            name="email"
                            type="email"
                            id="email"
                            class="input-field"
                            required
                        />
                        <label>Entrer votre E-mail</label>
                    </div>

                    <!-- Entrer votre Mot de passe -->
                    <div class="input-wrap">
                        <input
                            name="password"
                            type="password"
                            id="password"
                            minlength="4"
                            class="input-field"
                            autocomplete="off"
                            required
                        />
                        <label>Entrer votre Mot de passe</label>
                    </div>

                    <!-- Confirmer votre Mot de passe -->
                    <div class="input-wrap">
                        <input
                            type="password"
                            minlength="4"
                            class="input-field"
                            autocomplete="off"
                            required
                            id="confirmPassword"
                        />
                        <label>Confirmer votre Mot de passe</label>
                    </div>
                    <div>
                        <select id="localisation" name="localisation">
                            <option value="Douala">Douala</option>
                            <option value="Kinshasa">Kinshasa</option>
                            <option value="PointeNoire">PointeNoire</option>
                            <option value="Yaoundé">Yaoundé</option>
                            <option value="Paris">Paris</option>
                        </select>
                    </div>

                    <!-- button input -->
                    <button type="submit" class="sign-btn">INSCRIPTION</button>

                </div>
            </form>
        </div>
        <div class="term-col">
            <ul>
                <li>Voulez vous connaitre nos mentions légales des cookies? si vous les accepter cocher la case à coté <a href="{{url('/politique')}}"><u>cliquer ici</u></a></li>
                <li><input type="checkbox" name="validatecookie" id="validatecookie" value="1"/></li>
        </div>
    </div>

        </div>
    </div>
</div>
    <!-- Javascript file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="{{asset("js/test-js.js")}}"></script>
</body>
</html>
