@extends('app')

@section('title', 'Admin')

@section('titre', 'Administrateur')

@section('contenu')
    <div class="admin_form">
        <div id="insert_form">
            <h3>Ajouter un produit</h3>
            <form action="{{Route('insert')}}" method="post">
                @csrf
                <label for="name">Nom du produit</label>
                <input type="text" name="name" id="name" required>

                <label for="description">Description du produit</label>
                <input type="text" name="description" id="description" required>

                <label for="price">Prix du produit</label>
                <input type="text" name="price" id="price" required>

                <label for="img_url">Lien image du produit</label>
                <input type="text" name="img_url" id="img_url" required>

                <input type="submit" value="Envoyer">
            </form>
        </div>


        <div id="update_form">
            <h3>Modifier un produit</h3>
            <form action="{{'/update'}}" method="post">


            </form>
        </div>

        <div id="delete_form">
            <h3>Supprimer un produit</h3>
            <form action="{{'/delete'}}" method="post">


            </form>
        </div>
    </div>

@endsection
