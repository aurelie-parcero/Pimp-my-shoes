@extends('app')

@section('title', 'Pimp my shoes')
@section('introduction')


@endsection
@section('titre', 'Nos produits')


@section('contenu')
    <div class="container">
        <div class="row">
            <div class="block-produit col-sm-12 col-md-6 col-lg-6">
                <img class="img-produit-catalogue" src="/storage/app/public/element_ressource/images/stan.png"/>
                <p>A partir de 59€</p>
                <button type="submit">Personnaliser</button>
            </div>
            <div class="block-produit col-sm-12 col-md-6 col-lg-6">
                <img class="img-produit-catalogue" src="storage/app/public/element_ressource/images/converse.png"/>
                <p>A partir de 59€</p>
                <button type="submit">Personnaliser</button>
            </div>
            <div class="block-produit col-sm-12 col-md-6 col-lg-6">
                <img class="img-produit-catalogue" src="storage/app/public/element_ressource/images/escarpin.png"/>
                <p>A partir de 59€</p>
                <button type="submit">Personnaliser</button>
            </div>
            <div class="block-produit col-sm-12 col-md-6 col-lg-6">
                <img class="img-produit-catalogue"
                     src="storage/app/public/element_ressource/images/espadrille.png"/>
                <p>A partir de 59€</p>
                <button type="submit">Personnaliser</button>
            </div>
            <div class="block-produit col-sm-12 col-md-6 col-lg-6">
                <img class="img-produit-catalogue" src="storage/app/public/element_ressource/images/femmeboot.png"/>
                <p>A partir de 59€</p>
                <button type="submit">Personnaliser</button>
            </div>
            <div class="block-produit col-sm-12 col-md-6 col-lg-6">
                <img class="img-produit-catalogue"
                     src="storage/app/public/element_ressource/images/chaussurehomme.png"/>
                <p>A partir de 59€</p>
                <button type="submit">Personnaliser</button>
            </div>
        </div>
    </div>

@endsection
