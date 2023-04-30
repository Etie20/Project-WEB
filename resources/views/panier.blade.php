<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{("css/stylePanier.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-tiA3kN+BvM8iQ2u1/xs4s3qZDvOZk0WjKtNwPzY0yvzgO7o58b9O1jHmTP1vLlZdVQOJzYm7Vgkxv85Jh7b+9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PANIER</title>
</head>

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
<body>
@php
    $prixTotale = 0;
    $quantiteTotale = 0;
    $id = "";

@endphp
<section class="sec">

    <div class="titre_sec">
        <p>
            PANIER
        </p>
    </div>
    <div class="carre"></div>
    <div class="grille0">

        <ul class="grille">
            @foreach($products as $product )
            <li class="article">

                <div class="lay1">

                </div>
                @foreach($productInfo as $productInfos)
                    @if($productInfos["id_produit"]=== $product->id_produit)
                        <h4 id="" class="product" >
                            {{$productInfos["nom_produit"]}}
                        </h4>
                    @endif
                @endforeach
                <h5 id="" class="price">
                    prix Totale : {{$product->prix_multiplier}}
                </h5>
                {{$prixTotale += $product->prix_multiplier}}
                <h5 id="" class="price">
                    quantite : {{$product->quantite}}
                </h5>
                {{$quantiteTotale += $product->quantite}}
                {{$id = $product->id_panier}}



                @foreach($productInfo as $productInfos)
                    @if($productInfos["id_produit"]=== $product->id_produit)
                        <img id="" class="image" alt="image darticle bde" src="{{ asset($productInfos["image_produit"]) }}">
                            <div class="panier">
                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24" stroke="#454545"  class="w-50 h-50">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="croix">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24" stroke="#454545" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </a>
                            </div>
                        </img>
                    @endif
                @endforeach
            </li>
            @endforeach

        </ul>

    </div>




</section>

<div class="menu2">


    <form action="https://formsubmit.co/etienne.foyang@2026.ucac-icam.com" method="POST">
        <input type="hidden" name="id_panier" value="{{$id}}">
        <input type="hidden" name="quantite" value="{{$quantiteTotale}}">
        <input type="hidden" name="prix" value="{{$prixTotale}}">
        <input type="hidden" name="_subject" value="Merci de votre achat!">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_autoresponse" value="Groupe 10">
        <input type="hidden" name="_template" value="table">
        <input type="hidden" name="_webhook" value="https://yourdomain.co/your-webhook">
        <input type="submit" value="ACHETER" class="button1 b1">
    </form>
    <div class="button1 b2">
        {{$quantiteTotale}}
    </div>
    <div class="button1 b3">

        {{$prixTotale}} <P class="prix">XAF</P>

    </div>

</div>

</body>
</html>
