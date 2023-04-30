
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/style5.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>ACCEUIL</title>
</head>


<header>

    <div class="container1">
        <div class="logo">

        </div>
        <ul class="menu topnav" id="myTopnav">

            <div class="nav-item">
                <li id="acceuille"> <a href="{{url('/home')}}"> Accueil </a></li>
            </div>

            <div class="nav-item">
                <li id="service"> <a href="{{url('/manifestations')}}"> manifestation </a></li>
            </div>

            <div class="nav-item plus">
                <li id="plus"> <a href=""> plus </a>

                    <div class="dropdown-content">
{{--                        <a href="#">galerie</a>--}}
                        <a href="{{url('/idee')}}">boite a idée</a>
                        <a href="{{url('/produits')}}">article</a>
                    </div>

                </li>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>



            <div class="nav-item plus">
                <li id="contact"> <a href="{{url('/logg')}}"> connexion </a>

                    <form action="{{url('/deconnexion')}}" method="post">
                        @csrf
                        <input type="submit" value="deconnexion" class="dropdown-content">
                    </form>

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

<body>


<section class="sec s1">


    <div class="container s1">

        <h1>bienvenue dans votre espace BDE</h1>
        <h2>venez découvrir notre intitut</h2>


    </div>




</section>




<section class="sec s2">


    <div class="title">

        <h1>Campus Douala</h1>

    </div>

    <div container>

        <div class="actualite" id="actualite">

            <div class="text">

                <h2 class="titre_event">
                    semaine de la diversiter
                </h2>

                <p class="text_event">
                    a l'occasion de la semaine la diversité les etudiant ont été conviés à participer à plusieur activités toutes aussi interressantes les unes que les autres
                </p>

            </div>
            <div class="img_txt" alt="culturel"></div>

        </div>


    </div>




</section>




<section class="sec s3">


    <div class="title">

        <h1>nos articles</h1>

    </div>

    <div container>

        <div class="caroussel">

            <div class="art">

                @foreach($products as $product)
                <a href="" class="art1">

                    <div class="article a1">

                        <div class="lay1"></div>



                        <h4 id="" class="product"  >

                            {{$product["nom_produit"]}}

                        </h4>

                        <h5 id="" class="price">
                            {{$product["prix_unitaire"]}} XAF
                        </h5>


                        <img id="" class="image" alt="image darticle bde" src="{{ asset($product["image_produit"]) }}">

                        </img>

                    </div>
                </a>
                @endforeach




            </div>

            <div class="carousel__controls">
                <button class="carousel__button" id="prevBtn">&#8249;</button>
                <button class="carousel__button" id="nextBtn">&#8250;</button>
            </div>

        </div>


    </div>




</section>



<section class="sec s4">


    <div class="title">

        <h1>notre équipes</h1>

    </div>

    <div container>



        <ul class="membre">

            <li class="members m1">
                <img src="{{asset("asset/herve.jpg")}}" alt="">
                <div class="text">
                    <h1>KOUAM KAMDEM HERVE</h1>
                    <h2>ux/ui designer</h2>
                </div>
            </li>
            <li class="members m2">
                <img src="{{asset("asset/foyang.jpg")}}" alt="MEMBRE DE GROUPE">
                <div class="text">
                    <h1>ETIENNE FOYANG JUNIOR</h1>
                    <h2>developeur fullstack</h2>
                </div>
            </li>
            <li class="members m3">
                <img src="{{asset("asset/LEONARD.jpg")}}" alt="MEMBRE DE GROUPE">
                <div class="text">

                    <h1>KAMDEM LEONARD</h1>
                    <h2>developeur web</h2>
                </div>
            </li>
            <li class="members m4">
                <img src="{{asset("asset/prince.JPG")}}" alt="MEMBRE DE GROUPE">
                <div class="text">

                    <h1>BOKANJO PRINCE HALLAL</h1>
                    <h2>Chef projet et expert BDD</h2>
                </div>
            </li>

        </ul>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Sponsors</h4>
                    <ul>
                        <img src="{{asset("asset/Fichier2.png")}}" alt="Logo 1" />
                        <img src="{{asset("asset/Fichier 3.png")}}" alt="Logo 2" />
                        <ul><li><span>&copy; copyright Groupe 10 </span></li></ul>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="{{url('/home')}}">accueil</a></li>
                        <li><a href="{{url('/manifestations')}}">manifestation</a></li>
                        <li><a href="{{url('/panier')}}">panier</a></li>
                        <li><a href="{{url('/produits')}}">article</a></li>
                        <li><a href="{{url('/idee')}}">boite à idée</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Mentions légales</h4>
                    <ul>
                        <li><a href="{{url('/politique1')}}">Politique du site</a></li>
                        <li><a href="{{url('/politique')}}">Politique de cookies</a></li>
                        <li><a href="{{url('/avis')}}">Avis de confidentialité</a></li>
                        <li><a href="{{url('/condition')}}">Condition de vente</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Inscription</h4>
                    <ul>
                        <li><a href="{{url('/signup')}}">Inscrit-toi</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Connexion</h4>
                    <ul>
                        <li><a href="{{url('/logg')}}">Connecte-toi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


</section>



<script src="{{asset("js/script.js")}}"></script>
<script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>

</body>
</html>


