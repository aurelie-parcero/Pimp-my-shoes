@extends('app')

@section('title', 'Panier')

@section('titre', 'Votre Panier')

@section('contenu')
    @if(empty(Auth::user()->cartitems))
        <section id="panier">
            <div class="panier-vide">
                <p>
                    Votre panier est vide.
                </p>

                <button id="panier-achat" type="button">Continuer mes achats</button>
            </div>
        @endif
        <!-- Si le panier contient un article, les div suivantes doivent être remplies -->
            <div class="container panier-contenu">
                @foreach(Auth::User()->cartitems as $product)

                    <div class="row">

                        <div class="col-sm 12 col-lg-12">
                            <h2>{{$product->name}}</h2>
                            <img src="{{$product->img_url}}" alt=""/><!-- img produit -->
                        </div>

                        <div class="info-panier-1 col-sm-12 col-lg-12">
                            <div class="col-sm-3">
                                <p>Taille</p>
                                <p>39</p>
                            </div>
                            <div class="col-sm-3 quantite">
                                <p>Quantité</p>
                                <p class="frame-ylw">{{ $product->pivot->quantity }}</p>
                                <div class="bouton-quantite">
                                    <button type="button"><i class="fas fa-minus"></i></button>
                                    <button type="button"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <a href=""><i class="fas fa-cog"></i></a>
                            </div>
                            <div class="col-sm-3">
                                <a href=""><i class="fas fa-trash"></i></a>
                            </div>
                        </div>

                    </div>


                    <div class="row panier-prix">
                        <div class="col-sm-12 case-prix">
                            <p>Prix</p>
                            <div class="frame-ylw">{{$product->price * $product->pivot->quantity}} € TTC</div>
                        </div>
                        <div class="panier-compo">
                            <p>Composition</p>
                            <p>Textile</p>
                        </div>
                    </div>
                @endforeach

                <div class="row sous-total-panier">
                    <p>Sous-total</p>
                    <div class="frame-ylw">// sous-total //</div>
                </div>

                <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
                <script>paypal.Buttons().render('body');</script>
            </div>
        </section>

@endsection
