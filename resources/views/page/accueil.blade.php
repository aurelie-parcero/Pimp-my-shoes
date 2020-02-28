@extends('app')

@section('title', 'Pimp my shoes')

@section('titre', 'Nos produits')


@section('contenu')
    <div class="container">

        <div class="block-produit">
            <img class="img-produit-catalogue" src="{{asset('images/stan.png')}}"/>
            <p>A partir de </p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="{{asset('images/converse.png')}}"/>
            <p>A partir de </p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="{{asset('images/escarpin.png')}}"/>
            <p>A partir de </p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="{{asset('images/espadrille.png')}}"/>
            <p>A partir de </p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="{{asset('images/femmeboot.png')}}"/>
            <p>A partir de }</p>
            <div>Personnaliser</div>
        </div>
        <div class="block-produit">
            <img class="img-produit-catalogue" src="{{asset('images/femmeboot.png')}}"/>
            <p>A partir de</p>
            <div>Personnaliser</div>
        </div>

    </div>


@endsection
