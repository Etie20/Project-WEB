<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset("css/G_boite idée_style.css")}}">
    <link rel="stylesheet" href="{{asset("css/style2.css")}}">
    <script src="{{asset("js/ValidationFormulaire.js")}}"></script>
    <title>boite à idée</title>
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
    @php
        $user = session()->get('user');
    @endphp
</header>

<section>
    <div class="img">
        <img src="{{ asset('storage/asset/'.$ideas->image_manif) }}" alt="">
        <button class="galerie"> <a href="">Galerie</a></button>
        <button class="like-button" onclick="updateLikes()" id="myButton"><span class="heart-icon"></span> <br> <span class="like-text">Like</span><span class="like-count">0</span></button>
    </div>
</section>
<!-- definition de limage de levenement -->
<section>
    <div class="event">
        <h1>{{ $ideas->nom_manif }}</h1>
        <h2>realised by BDE</h2>
        <p>{{ $ideas->description }}</p>
    </div>


</section>
<!-- definition du commentaire de levennement  -->

<h1 class="com">commentaire</h1>
<div class="leo">

    <div class="tb_com">

        <div class="lis_com">

            <h1>Nom de la personne</h1>
            <h2>date et heure</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis esse vitae, assumenda illum quis repellat expedita voluptas adipisci, unde, ullam cum voluptatibus laborum deserunt. Eaque magnam vero numquam pariatur libero?</p>

        </div>

        <div class="lis_com">

            <h1>Nom de la personne</h1>
            <h2>date et heure</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis esse vitae, assumenda illum quis repellat expedita voluptas adipisci, unde, ullam cum voluptatibus laborum deserunt. Eaque magnam vero numquam pariatur libero?</p>
            <div class="suprimer">
                <a href="">SUP</a>
            </div>
        </div>
        <div class="lis_com">

            <h1>Nom de la personne</h1>
            <h2>date et heure</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis esse vitae, assumenda illum quis repellat expedita voluptas adipisci, unde, ullam cum voluptatibus laborum deserunt. Eaque magnam vero numquam pariatur libero?</p>
            <div class="suprimer">
                <a href="">SUP</a>
            </div>
        </div>



        <div class="comment">
            <a href="">COMMENT</a>
        </div>



    </div>

</div>
</body>

</html>
