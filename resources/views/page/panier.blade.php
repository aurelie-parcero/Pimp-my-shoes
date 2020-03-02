@extends('app')

@section('title', 'Panier')

@section('titre', 'Votre Panier')

@section('contenu')
    <!-- Si le panier est vide -->
    <section id="panier">
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
                <button type="button"><i class="fas fa-minus"></i></button>
                <button type="button"><i class="fas fa-plus"></i></button>
            </div>
        </div>
        <div>
            <a href=""><i class="fas fa-cog"></i></a>
        </div>
        <div>
            <a href=""><i class="fas fa-trash"></i></a>
        </div>
        <div>
            <div>
                <p>Prix unitaire</p>
                <div>//Prix// € TTC</div>
            </div>
            <div>
                <p>Composition</p>
                <p>// composition //</p>
            </div>
        </div>
        <div>
            <p> Sous-total</p>
            <div>// sous-total //</div>
        </div>

        <button type="submit">Valider</button>
    </section>

@endsection
