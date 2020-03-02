@extends('app')

@section('title', 'Pimp my shoes')

@section('introduction')

    <div class="wrapper container">
        <div class="row">
            <div class="item col-sm-12 col-md-12 col-lg-4">
                <div class="polaroid"><img src="{{asset('images/stanwhite.png')}}" alt="chaussure">
                    <div class="caption">Choisis ta chaussure</div>
                </div>
            </div>

            <div class="item col-sm-12 col-md-12 col-lg-4">
                <div class="polaroid"><img src="{{asset('images/stancouleur.jpg')}}" alt="chaussure">
                    <div class="caption">Personnalise-la</div>
                </div>
            </div>

            <div class="item col-sm-12 col-md-12 col-lg-4">
                <div class="polaroid"><img src="{{asset('images/livraisonshoes.png')}}" alt="chaussure">
                    <div class="caption">Fai-toi livrer!</div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('titre', 'Nos produits')

{{--afficher par défaut un élément - voir com dans app.blade--}}
{{--@section("header")--}}
{{--    @include('component.header')--}}
{{--@endsection--}}

@section('contenu')

    <div class="container row catalogue">
        @foreach ($catalogue as $produit)

            <div class="block-produit col-sm-12 col-md-12 col-lg-6">
                <img class="img-produit-catalogue" src="{{$produit->link}}" alt="image produit"/>
                <div class="element-catalogue">
                    <p>{{$produit->produit}}</p>
                    <p>A partir de {{$produit->prix}}€</p>
                    <button type="button"><a href="/fiche-produit/{{$produit->id}}">Personnaliser</a></button>
                </div>
            </div>
        @endforeach
    </div>

@endsection
