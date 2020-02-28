@extends('app')

@section('title', 'Panier')

@section('titre', 'Votre Panier')

@section('contenu')
    <!-- Si le panier est vide -->
    <p>
        Votre panier est vide.
    </p>

    <button type="button">Continuer mes achats</button>


    <!-- Si le panier contient un article, les div suivantes doivent être remplies -->
    <div class="container">
        <h2>Ref produit</h2>
        <img src="" alt=""/>
    </div>
    <div>
        <p>Taille</p>
        <p>/la taille/</p>
    </div>
    <div>
        <p>Quantité</p>
        <p>//la quantité</p>
        <div>
            <button type="button"><img src="" alt="" /> </button>
            <button type="button"><img src="" alt="" /></button>
        </div>
    </div>

@endsection
