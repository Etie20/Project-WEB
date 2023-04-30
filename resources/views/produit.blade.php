<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ton Produit</title>
    <link rel="stylesheet" href="{{asset("css/produits.css")}}">
</head>
<body>
@php
    $user = session()->get('user');
@endphp
<div class="background">
    <div class="lay1">
        <div class="info">
            <p class="description"> {{ $product->description }} </p>
            <p class="prix"> {{ $product->prix_unitaire }} XAF</p>
        </div>
    </div>
    <div class="lay2">
        <div class="info2">
            <p class="description"> {{ $product->description }} </p>
            <p class="prix"> {{ $product->prix_unitaire }} XAF</p>
        </div>
    </div>
    <img class="placeImage" src="{{ asset($product->image_produit) }}">
        <div id="imageContainer"></div>
    </img>
    <form method="POST" id="produitForm" action="{{url('/panier')}}">
        @csrf
        <input type="submit" name="acheter" class="acheter" value="acheter">
        <input type="hidden" name="idProduit" value="{{ $product->id_produit }}">
        <input type="hidden" name="prix" value="{{ $product->prix_unitaire }}">
        <input type="hidden" name="idEtudiant" value="{{ $user[0]["id"] }}">
        <input type="text" name="quantite" class="icon">
    </form>
    <form action="{{url("/produits")}}">
        <input type="submit" value="close" class="acheter2">
    </form>
</div>
<script src="produits.js"></script>
</body>
</html>
