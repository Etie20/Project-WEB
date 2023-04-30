<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset("css/manif_styles.css")}}">
    <script src="{{asset("js/ValidationFormulaire.js")}}"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/style2.css")}}">
    <title>Manifestation</title>
</head>

<body>
<header>

    <div class="container1">
        <div class="logo">

        </div>
        <ul class="menu">

            <div class="nav-item">
                <li id="acceuille"> <a href="{{url('/home')}}"> Accueil </a></li>
            </div>

            <div class="nav-item">
                <li id="service"> <a href="{{url('/manifestations')}}"> manifestation </a></li>
            </div>

            <div class="nav-item plus">
                <li id="plus"> <a href=""> plus </a>

                    <div class="dropdown-content">
                        <a href="#">galerie</a>
                        <a href="{{url('/idee')}}">boite a idée</a>
                        <a href="{{url('/produits')}}">article</a>
                    </div>

                </li>
            </div>



            <div class="nav-item plus">
                <li id="contact"> <a href="{{url('/logg')}}"> connexion </a>

                    <div class="dropdown-content">
                        <a href="{{url('/logg')}}">deconnexion</a>

                    </div>

                </li>
            </div>


        </ul>

    </div>
    <div class="notif">
        <a href=""> <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
            </svg>
        </a>

        <div class="rond">

        </div>

    </div>

</header>
<div class="titre_sec">
    <p>
        MY_MANIFESTATION
    </p>
</div>
<section>
    <img class="img" src="{{ asset('storage/asset/'.$manifest->image_manif) }}">
        <button class="galerie"> <a href="#">Galerie</a></button>
        <button class="like-button" onclick="updateLikes()" id="myButton"><span class="heart-icon"></span> <br> <span class="like-text">Like</span><span class="like-count">0</span></button>
    </img>
</section>

<section>
    <div class="event">
        <h1>{{ $manifest->nom_manif }}</h1>
        <p>{{ $manifest->description }}</p>
    </div>
</section>



<div class="leo">
    <div class="tb_com">
        <div class="lis_com">
            <h1>Nom de la personne</h1>
            <h2>date et heure</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis esse vitae, assumenda illum quis repellat expedita voluptas adipisci, unde, ullam cum voluptatibus laborum deserunt. Eaque magnam vero numquam pariatur libero?</p>
            <button onclick="" class="supprimer">Supprimer</button>
        </div>


    </div>
</div>
<div class="leo">
    <div class="tb_com">
        <div class="lis_com">
            <h1>Nom de la personne</h1>
            <h2>date et heure</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis esse vitae, assumenda illum quis repellat expedita voluptas adipisci, unde, ullam cum voluptatibus laborum deserunt. Eaque magnam vero numquam pariatur libero?</p>
            <button onclick="" class="supprimer">Supprimer</button>
        </div>


    </div>
</div>
<div class="menu2">



    <div class="button1 b1">
        <a href="{{url('/panier')}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#45454563" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>
        </a>

    </div>
    <div class="button1 b2">
        <a href="{{url('/postmanif')}}">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
            </svg>

        </a>

    </div>
</div>
</body>

</html>
