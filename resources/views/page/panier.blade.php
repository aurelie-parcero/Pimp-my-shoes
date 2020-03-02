@extends('app')

@section('title', 'Panier')

@section('titre', 'Votre Panier')

@section('contenu')
    <!-- Si le panier est vide -->
    <section id="panier">
        <div class="panier-vide">
            <p>
                Votre panier est vide.
            </p>

            <button id="panier-achat" type="button">Continuer mes achats</button>
        </div>

        <!-- Si le panier contient un article, les div suivantes doivent être remplies -->
        <div class="container panier-contenu">

            <div class="row">

                <div class="col-sm 12 col-lg-12">
                    <h2>Ref produit</h2>
                    <img src="" alt=""/>
                </div>

                <div class="info-panier-1 col-sm-12 col-lg-12">
                    <div class="col-sm-3">
                        <p>Taille</p>
                        <p>/la taille/</p>
                    </div>
                    <div class="col-sm-3 quantite">
                        <p>Quantité</p>
                        <p class="frame-ylw">//la quantité</p>
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
                    <p>Prix unitaire</p>
                    <div class="frame-ylw">//Prix// € TTC</div>
                </div>
                <div class="panier-compo">
                    <p>Composition</p>
                    <p>// composition //</p>
                </div>
            </div>
            <div class="row sous-total-panier">
                <p> Sous-total</p>
                <div class="frame-ylw">// sous-total //</div>
            </div>

            <button type="submit" class="frame-ylw button-ylw">Valider</button>
        </div>
    </section>

@endsection
