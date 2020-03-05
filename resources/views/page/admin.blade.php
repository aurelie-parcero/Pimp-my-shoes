@extends('app')

@section('title', 'Admin')

@section('titre', 'Administrateur')

@section('contenu')
    <div class="admin_form">
        <div class="insert_form">
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

        <div class="insert_form">
            <h3>Modifier ou supprimer</h3>
            @foreach($products as $product)
                @csrf
                <div class="container row catalogue">

                    <div class="block-produit col-sm-12 col-md-12 col-lg-6">
                        <img class="img-produit-catalogue" src="{{asset($product->img_url) }}"
                             alt="{{ $product->name }}"/>

                        <p>{{ $product->name }}</p>
                        <p>{{ $product->description }}</p>
                        <p>A partir de {{ $product->price }}€</p>


                        <div class="update_buttons row">


                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal{{$product->id}}">
                                Modifier
                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal{{$product->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modifier l'article</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="/fiche-produit/{{$product->id}}" method="post">
                                                @csrf
                                                @method('put')
                                                <label for="name">Nom du produit</label>
                                                <input type="text" name="name" id="name" value="{{$product->name}}"
                                                       required>

                                                <label for="description">Description du produit</label>
                                                <input type="text" name="description" id="description"
                                                       value="{{$product->description}}" required>

                                                <label for="price">Prix du produit</label>
                                                <input type="text" name="price" id="price" value="{{$product->price}}"
                                                       required>

                                                <label for="img_url">Lien image du produit</label>
                                                <input type="text" name="img_url" id="img_url"
                                                       value="{{$product->img_url}}" required>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">
                                                        Fermer
                                                    </button>

                                                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="/fiche-produit/{{$product->id}}">
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-primary" id="{{$product->id}}">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
