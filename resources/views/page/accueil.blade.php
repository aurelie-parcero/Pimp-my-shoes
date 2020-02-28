@extends('app')

@section('title', 'Pimp my shoes')

@section('introduction')

    <div class="wrapper container-fluid">

            <div class="item">
                <div class="polaroid"><img src="{{asset('images/stanwhite.png')}}">
                    <div class="caption">Choisis ta chaussure</div>
                </div>
            </div>

            <div class="item">
                <div class="polaroid"><img src="{{asset('images/stancouleur.jpg')}}">
                    <div class="caption">Personnalise-la</div>
                </div>
            </div>

            <div class="item">
                <div class="polaroid"><img src="{{asset('images/livraisonshoes.png')}}">
                    <div class="caption">Fai-toi livrer!</div>
                </div>
            </div>


    </div>

@endsection

@section('titre', 'Nos produits')


@section('contenu')
    <div class="container">
        <div class="row">
            <div class="block-produit col-sm-12 col-md-12 col-lg-6">
                <img class="img-produit-catalogue" src="{{asset('images/stan.png')}}"/>
                <p>A partir de </p>
                <button type="button">Personnaliser</button>
            </div>
            <div class="block-produit">
                <img class="img-produit-catalogue col-sm-12 col-md-12 col-lg-6" src="{{asset('images/converse.png')}}"/>
                <p>A partir de </p>
                <button type="button">Personnaliser</button>
            </div>
            <div class="block-produit">
                <img class="img-produit-catalogue col-sm-12 col-md-12 col-lg-6" src="{{asset('images/escarpin.png')}}"/>
                <p>A partir de </p>
                <button type="button">Personnaliser</button>
            </div>
            <div class="block-produit">
                <img class="img-produit-catalogue col-sm-12 col-md-12 col-lg-6"
                     src="{{asset('images/espadrille.png')}}"/>
                <p>A partir de </p>
                <button type="button">Personnaliser</button>
            </div>
            <div class="block-produit">
                <img class="img-produit-catalogue" src="{{asset('images/femmeboot.png')}}"/>
                <p>A partir de }</p>
                <button type="button">Personnaliser</button>
            </div>
            <div class="block-produit">
                <img class="img-produit-catalogue col-sm-12 col-md-12 col-lg-6"
                     src="{{asset('images/chaussurehomme.png')}}"/>
                <p>A partir de</p>
                <button type="button">Personnaliser</button>
            </div>
        </div>
    </div>


@endsection
