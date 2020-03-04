@extends('app')

@section('title', 'Pimp my shoes')

@section('introduction')

    <div class="wrapper container">
        <div class="row">
            <div class="item col-sm-12 col-md-12 col-lg-4">
                <div class="polaroid"><img src="{{asset('images/stanwhite.png')}}">
                    <div class="caption">Choisis ta chaussure</div>
                </div>
            </div>

            <div class="item col-sm-12 col-md-12 col-lg-4">
                <div class="polaroid"><img src="{{asset('images/stancouleur.jpg')}}">
                    <div class="caption">Personnalise-la</div>
                </div>
            </div>

            <div class="item col-sm-12 col-md-12 col-lg-4">
                <div class="polaroid"><img src="{{asset('images/livraisonshoes.png')}}">
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

    <form method="post">
        <label for="filter">Trier par:</label>
        <button type="submit">
            <select name="filter">
                <option selected value="">--Veuillez choisir une option--</option>
                <option value="name">Nom</option>
                <option value="price">Prix</option>
            </select>
        </button>
    </form>

    <div class="container row catalogue">
        @foreach ($products as $product)

            <div class="block-produit col-sm-12 col-md-12 col-lg-6">
                <img class="img-produit-catalogue" src="{{$product->img_url}}"/>
                <div class="element-catalogue">
                    <p>{{$product->name}}</p>
                    <p>A partir de {{$product->price}}€</p>
                    <button type="button"><a href="/fiche-produit/{{$product->id}}">Personnaliser</a></button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
