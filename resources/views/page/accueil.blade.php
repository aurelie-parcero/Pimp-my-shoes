@extends('app')

@section('title', 'Pimp my shoes')

@section('titre', 'Nos produits')


@section('contenu')
    <div class="container">

        <div class="block-produit">
            <img class="img-produit-catalogue" src="storage/app/public/element_ressource/images/stan.png" />
            <p>A partir de {{$prix}}</p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="storage/app/public/element_ressource/images/converse.png" />
            <p>A partir de {{$prix}}</p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="storage/app/public/element_ressource/images/escarpin.png" />
            <p>A partir de {{$prix}}</p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="storage/app/public/element_ressource/images/espadrille.png" />
            <p>A partir de {{$prix}}</p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="storage/app/public/element_ressource/images/femmeboot.png" />
            <p>A partir de {{$prix}}</p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="storage/app/public/element_ressource/images/chaussurehomme.png" />
            <p>A partir de {{$prix}}</p>
            <div>Personnaliser</div>
        </div>

    </div>

                    @endsection
